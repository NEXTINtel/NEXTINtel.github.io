<?php

//此文件不包含在此系统中

header("Content-type: text/html; charset=utf-8");

require_once 'db.class.php.php';//数据库
error_reporting(0);//屏蔽错误警告
ignore_user_abort(); //忽略关闭浏览器
set_time_limit(0); //永远执行


//设置网络请求配置
function curl_request($curl,$https=true,$method='GET',$data=null,$aHeader=array()){
    // 创建一个新cURL资源
    $ch = curl_init();

    // 设置URL和相应的选项
    curl_setopt($ch, CURLOPT_URL, $curl);    //要访问的网站
    curl_setopt($ch, CURLOPT_HEADER, false);    //启用时会将头文件的信息作为数据流输出。
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  //将curl_exec()获取的信息以字符串返回，而不是直接输出。

    if( count($aHeader) >= 1 ){
        curl_setopt($ch, CURLOPT_HTTPHEADER, $aHeader);
    }

    if($https){
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  //FALSE 禁止 cURL 验证对等证书（peer's certificate）。
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);  //验证主机
    }
    if(strtoupper($method) == 'POST'){
        curl_setopt($ch, CURLOPT_POST, true);  //发送 POST 请求
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);  //全部数据使用HTTP协议中的 "POST" 操作来发送。
    }


    // 抓取URL并把它传递给浏览器
    $content = curl_exec($ch);
    //关闭cURL资源，并且释放系统资源
    if($content){
        curl_close($ch);
        return $content;
    }else {
        $error = curl_errno($ch);
        echo "call faild, errorCode:$error\n";
        curl_close($ch);
        return false;
    }

}

/**
 * 数据输出返回
 * @param null $data
 * @param int $errCode
 * author 江南极客
 */
function msgReturn($data=null,$errCode=0){
    $returnArr = array(
        'error_no'=>$errCode,
    );
    if($errCode===0 || is_array($data)){
        $returnArr['data'] = $data;
    }else{
        $returnArr['error_msg'] = $data;
    }
    die(json_encode($returnArr));
}

/**
 * 车站的电码信息编号
 * 数据格式:@bjb|北京北|VAP|beijingbei|bjb|0
 * 车站名缩写:bjb
 * 车站名称:北京北
 * 车站电码编号:VAP
 * 车站数字编号:0
 * author 江南极客
 */
function get_station_code(){
    $url = 'https://kyfw.12306.cn/otn/resources/js/framework/station_name.js';
    $data = curl_request($url);
    if(!$data){
        msgReturn('获取数据失败',-1);
    }
    //var station_names ='@bjb|北京北|VAP|beijingbei|bjb|0...';
    $station_data = strrchr($data,'=');
    $station_name = ltrim($station_data,"='@");
    $station_name = rtrim($station_name,"';");
    $station_arr = explode('@',$station_name);
    if(empty($station_arr)){
        msgReturn('获取数据失败',-1);
    }

    return $station_arr;
}

/**
 * 导入车站信息(至数据库)
 * author 江南极客
 * @return array
 */
function import_train_station(){
    $station_arr = get_station_code();
    $station_data = array();
    $time = date('Y-m-d H:i:s');
    $month = date('n');

    $db_config = array(
        'hostname'  => '127.0.0.1',
        'username'  => 'root',
        'password'  => '19990420',
        'database'  => 'dmx_train',
        'pconnect'  => 0,
        'log'  => 0
    );
    $db = new DB($db_config);
    $update = false; //是否要更新数据
    //数据一个月更新一次
    $one_sql = 'select * from dmx_station_info where update_month='.$month;
    $curr_month_data = $db->get_one($one_sql);
    if(empty($curr_month_data)){
        //当前月份没有数据,则截断表然后插入数据
        $update = true;
        $truncate_sql = 'TRUNCATE dmx_station_info';
        $db->query($truncate_sql);
    }
    foreach ($station_arr as $item){
        $temp = explode('|',$item);
        $temp_arr = array(
            'station_no' => $temp[5],
            'station_abbr' => $temp[0],
            'station_name' => $temp[1],
            'station_telecode' => $temp[2],
            'ch_pinyin' => $temp[3],
            'simp_pinyin' => $temp[4],
            'origin_info' => $item,
            'update_time' => $time,
            'update_month' => $month,
        );
        $station_data[] = $temp_arr;
        if($update){
            $db->insert('dmx_station_info',$temp_arr);
        }
    }
    return $station_data;
}

/**
 * 通过12306月排班表拿到所有的车次信息
 * 铁道部 每日排班车次1万多条数据 , 每月30多万 , 一次取出来数据量非常庞大,可以取出来然后做缓存一个月更新一次
 * author 江南极客
 * @return mixed
 */
function get_train_list(){
    $cache_file = __DIR__.'/train_list.json';
    CHECKFILE:
    if(file_exists($cache_file)){
        $cache_time = filemtime($cache_file);
        $month = date('n');
        //一个月缓存一次
        if(date('n',$cache_time) != $month){
            @unlink($cache_file);
            goto CHECKFILE;
        }
        $train_list = file_get_contents($cache_file);
    }else{
        $url = 'https://kyfw.12306.cn/otn/resources/js/query/train_list.js?scriptVersion=1.0';
        $data = curl_request($url);
        $train_data = strrchr($data,'=');
        $train_list = ltrim($train_data,"=");
        $train_list = rtrim($train_list,",");
        @file_put_contents($cache_file,$train_list);
    }
    $train_arr = json_decode($train_list,true);
    return $train_arr;
}

/**
 * 导入车次信息(至数据库)
 * author 江南极客
 */
function import_train_list(){
    //数据库配置
    $db_config = array(
        'hostname'  => '127.0.0.1',
        'username'  => 'root',
        'password'  => '19990420',
        'database'  => 'dmx_train',
        'pconnect'  => 0,
        'log'  => 0
    );
    $db = new DB($db_config);

    //获取一个月内列车排班信息列表
    $station_arr = get_train_list();
    $station_arr_count = count($station_arr);

    //一次取出来 一个月的信息 一次只操作一天的数据
    $temp_times = 'youqijun';
    session_start() ;
    if(isset($_SESSION[$temp_times])){
        $temp = $_SESSION[$temp_times];
        $temp += 1;
        $_SESSION[$temp_times] = $temp;
    }else{
        $temp = 0;
        $_SESSION[$temp_times] = $temp;
    }
    if($temp >= $station_arr_count){
        msgReturn('导入完毕',-1);
    }
    //截取数组的一部分(一次取一天的数据)
    $station_arr = array_slice($station_arr,$temp,1);
    if(empty($station_arr)){
        msgReturn('暂无数据',-1);
    }

    $temp_arr = array();
    $pattern = "/^(.*?)\((.*?)\-(.*?)\)$/";
    $month = date('n');
    foreach ($station_arr as $key1 => $date_arr){
        $time = $key1;
        foreach ($date_arr as $key2 => $train_arr){
            $type = $key2;
            foreach ($train_arr as $train){
                $train['train_date'] = $time.' 00:00:00';
                $train['train_type'] = $type;
                $train['update_month'] = $month;
                //K580(长沙-成都东)  匹配出车次 和 始发站,终到站
                preg_match_all($pattern, $train['station_train_code'], $match);
                //$train_sn = strstr($train['station_train_code'],'(',true);
                $train['train_sn'] = $match[1][0];
                $train['from_station'] = $match[2][0];
                $train['to_station'] = $match[3][0];
                $train['between_station'] = $match[2][0].'-'.$match[3][0];
                $temp_arr[] = $train;
                $db->insert('dmx_train_list',$train);
            }
        }
    }
    print_r($temp_arr);
}

/**
 * 获取列车时刻表
 * @param string $train_sn 车次(如:G1207)
 * @param string $date 日期
 * train_no: 车次编号,从步骤1中的数据获取
 * from_station_telecode: 起始站点的电码编号
 * to_station_telecode: 目的站点的电码编号
 * depart_date: 查询日期
 * author 江南极客
 * @return mixed
 */
function get_train_timetable($train_sn='',$date=''){
    $url = 'https://kyfw.12306.cn/otn/czxx/queryByTrainNo?';
    if(empty($train_sn)){
        msgReturn('请填写车次',-1);
    }
    if(empty($date)) {
        $date = date('Y-m-d');
    }else{
        $date_str = strtotime($date);
        $date = date('Y-m-d',$date_str);
    }
    $db_config = array(
        'hostname'  => '127.0.0.1',
        'username'  => 'root',
        'password'  => '19990420',
        'database'  => 'dmx_train',
        'pconnect'  => 0,
        'log'  => 0
    );
    $db = new DB($db_config);
    $train_date = $date.' 00:00:00';
    $train_sn = strtoupper($train_sn);
    //根据输入的车次 拿到 车次排班编号,始发站和终到站
    $train_sql = "select * from dmx_train_list where train_sn='{$train_sn}' and train_date='{$train_date}'";
    $train = $db->get_one($train_sql);
    if(empty($train)){
        msgReturn('未查到当日当次列车信息',-1);
    }
    //取出始发站和终到站的电码编号
    $from_station_name = $train['from_station'];
    $to_station_name = $train['to_station'];
    $from_station_sql = "select * from dmx_station_info where station_name='{$from_station_name}'";
    $to_station_sql = "select * from dmx_station_info where station_name='{$to_station_name}'";
    $from_station = $db->get_one($from_station_sql);
    if(empty($from_station)){
        msgReturn('未查到始发车站',-1);
    }
    $to_station = $db->get_one($to_station_sql);
    if(empty($to_station)){
        msgReturn('未查到终点车站',-1);
    }
    $param = [
        'train_no' => $train['train_no'],
        'from_station_telecode' => $from_station['station_telecode'],
        'to_station_telecode' => $to_station['station_telecode'],
        'depart_date' => $date,
    ];
    $http_param = http_build_query($param);
    $url = $url.$http_param;
    $header = array('User-Agent:Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36');
    $data = curl_request($url,true,'GET',null,$header);
    if(!$data){
        msgReturn('网络错误',-1);
    }
    $data = json_decode($data,true);
    if(empty($data['data']['data'])){
        msgReturn('列车时刻表数据不存在',-1);
    }
    return $data['data']['data'];
}


/*$checi = 'g1207';
$data = get_train_timetable($checi,'2019-5-18');
print_r($data);die;*/

$now = date('Y-m-d');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $train_no = trim($_POST['value1']);
    $train_date = trim($_POST['value2']);
    $data = get_train_timetable($train_no,$train_date);
    msgReturn($data);
}


?>
<html xmlns="">

<head>
    <meta http-equiv = "Content-Type" content = "text/html;charset = utf8">
    <meta name = "description" content = "列车时刻表">
    <title>列车时刻表-高铁动车运行时间查询</title>
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
</head>
<style type="text/css">
    .key1{
        width:100px;
    }
    .value1{
        width:300px;
        margin:0 0 0 1px;
    }
    .main{
        margin:0 auto;
        width:450px;
        height:auto;
        background:#B4E4E4;
        padding:20px 40px;
        /*background: url("https://www.12306.cn/index/images/pic/banner08.jpg") bottom center repeat-y #efeff4 ;*/
    }
    .refer{
        width:100px;
        height:24px;
    }
    .h1-title{

    }
    .request-res{
        width:300px;
        margin:0 0 0 1px;
        display: none;
    }
    .train-table{
        margin-top: 10px;
        margin-left: 85px;
        display: none;
    }
    .train-table table{
        /*border: 1px solid gray;*/
        border-right: 1px solid gray;
        border-bottom: 1px solid gray;
    }
    .train-table table td{
        font-size: 14px;
        border-left: 1px solid gray;
        border-top: 1px solid gray;
    }
</style>
<body>

<div class="main">
    <h1 class="h1-title" align="center">列车时刻表</h1>
    <form method="POST" action="" target="_blank" id="form">
        <p>列车车次：
            <input class="value1" type="text" name="value1" value="" placeholder="列车车次 如:k16"></p>
        <p>发车日期：
            <input class="value1" type="text" name="value2" value="<?php echo $now; ?>" placeholder="发车时间"></p>
        <p class="request-res">查询结果：<span class="value1 res-return1">...</span></p>
        <div class="train-table">
            <table width="300" border="0" cellpadding="0" cellspacing="0" class="table-result">
                <!--<tr>
                    <td>序号</td>
                    <td>车站</td>
                    <td>到/发时间</td>
                    <td>停留</td>
                </tr>
                <tr>
                    <td>01</td>
                    <td>青岛</td>
                    <td>16:26-16:30</td>
                    <td>4分钟</td>
                </tr>-->
            </table>
        </div>
        <p style="text-align:center;"><input class="refer" type="submit" value="查询"></p>
    </form>
</div>
</body>
<script>
    $(function(){
        $("#form").submit(function(e){
            e.preventDefault();
            var data = {};
            data.value1 = $("input[name=value1]").val();
            data.value2 = $("input[name=value2]").val();
            $(".request-res").show();
            $.ajax({
                url:'train.php',
                data:data,
                dataType:'json',
                type:'post',
                success:function(ret){
                    //console.log(ret);

                    if(ret.error_no == 0){
                        var train_list_html = "<tr><td>序号</td><td>车站</td><td>到/发时间</td><td>停留</td></tr>";
                        $.each(ret.data,function(key,val){
                            //console.log(key+'----'+val.station_name);
                            //train_list_html += "<tr><td>序号</td><td>车站</td><td>到/发时间</td><td>停留</td></tr>";
                            train_list_html += "<tr><td>"+val.station_no+"</td><td>"+val.station_name+"</td><td>"+val.arrive_time+"-"+val.start_time+"</td><td>"+val.stopover_time+"</td></tr>";
                        });
                        var train_info = ret.data[0];
                        var train_text = train_info.station_train_code+"( "+train_info.start_station_name+"-"+train_info.end_station_name+" )";
                        $(".train-table").show();
                        $(".res-return1").html(train_text);
                        $(".request-res").css("color","green");
                        $(".table-result").html(train_list_html);
                    }else{
                        $(".train-table").hide();
                        $(".request-res").css("color","red");
                        $(".res-return1").html(ret.error_msg);
                    }
                },
                complete:function (info) {
                    //console.log('over:'+info);
                },
                error:function (err) {
                    //console.log('err:'+err);
                }
            })
        })
    })
</script>
</html>
