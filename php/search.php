<?php
/**
 * 用于火车票查询
 * Craete by ChangXing group
 * 2019-12-09
 */

session_start();

//传递参数
$StartStation=$_POST['StartStation'];
$StartDate=$_POST['StartDate'];
$ArriveStation=$_POST['ArriveStation'];
$ArriveDate=$_POST['ArriveDate'];
$TrainType=$_POST['TrainType'];
$SeatType=$_POST['SeatType'];
$LowPrice=$_POST['LowPrice'];
$HighPrice=$_POST['HighPrice'];

//连接数据库
$con=mysqli_connect("localhost","root","19990420",ticket);
if(!$con){
    echo "数据库连接失败！请检查网络重新连接或联系管理员";
}

//查询车次
//$sql = "SELECT traininfo.TrainID,traininfo.StartStation,traininfo.StartTime,traininfo.ArriveStation,traininfo.ArriveStation,train_seat_priceinfo.XseatsNum,train_seat_priceinfo.Price FROM traininfo INNER JOIN train_seat_priceinfo ON traininfo.TrainID=train_seat_priceinfo.TrainID WHERE traininfo.StartStation=train_seat_priceinfo.StartStation AND traininfo.ArriveStation=train_seat_priceinfo.ArriveStation";
//SELECT TrainID,StartStation,StartTime,ArriveStation,ArriveTime,XseatsNum,Price FROM traininfo natural JOIN train_seat_priceinfo
$sql1 = "SELECT TrainID,StartStation,StartTime,ArriveStation,ArriveTime,XseatsType,XseatsNum,Price FROM traininfo natural JOIN train_seat_priceinfo WHERE StartStation='$StartStation' AND ArriveStation='$ArriveStation' AND StartDate='$StartDate' AND XseatsType='$SeatType'" ;
$sql2 = "SELECT TrainID,XseatsNum,Price FROM traininfo natural JOIN train_seat_priceinfo WHERE StartStation='$StartStation' AND ArriveStation='$ArriveStation' AND StartDate='$StartDate' AND XseatsType='商务座'";
$sql3 = "SELECT TrainID,XseatsNum,Price FROM traininfo natural JOIN train_seat_priceinfo WHERE StartStation='$StartStation' AND ArriveStation='$ArriveStation' AND StartDate='$StartDate' AND XseatsType='一等座'";
$sql4 = "SELECT TrainID,XseatsNum,Price FROM traininfo natural JOIN train_seat_priceinfo WHERE StartStation='$StartStation' AND ArriveStation='$ArriveStation' AND StartDate='$StartDate' AND XseatsType='二等座'";



$result1 = mysqli_query($con, $sql1);
$result2 = mysqli_query($con, $sql2);
$result3 = mysqli_query($con, $sql2);
$result4 = mysqli_query($con, $sql2);

/*if (mysqli_num_rows($result) > 0) {
    // 输出数据
    while($row = mysqli_fetch_assoc($result)) {
        //echo "id: " . $row["tourist_name"]. " - Name: " . $row["tourist_id"]. " " . $row["Tourist_sex"]. "<br>";
        $_re1=$row["tourist_name"];
        $_re2=$row["tourist_id"];
        $_re3=$row["Tourist_sex"];
        $_re4=$row["Tourist_phone"];
        echo "";
    }
} else {
    echo "0 结果";
}*/
//mysqli_close($con);