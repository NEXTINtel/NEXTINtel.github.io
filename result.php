<!--车票信息查询结果界面-->
<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>畅行 - 让出行更便捷. | 查询结果</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--Color Switcher Mockup-->
    <link href="css/color-switcher-design.css" rel="stylesheet">

    <!--Color Themes-->
    <link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/method-draw-image.png" type="image/x-icon">
    <link rel="icon" href="images/method-draw-image.png" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

    <!--自定义添加部分-->
    <link href="css/table.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/list.css" />
</head>
<body>
<div class="page-wrapper">
    <!-- Main Header-->
    <header class="main-header header-style-one">
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="top-left">
                        <ul class="contact-list clearfix">
                            <li><i class="fa fa-phone-volume"></i> <a href="tel:215-598-385">666-666-666</a></li>
                            <li><i class="fa fa-envelope"></i><a href="mailto:admin@raqba.com">ChangXing@163.com</a></li>
                        </ul>
                    </div>
                    <div class="top-right clearfix">
                        <ul class="social-icon-one">
                            <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-skype"></span></a></li>
                            <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                        </ul>

                        <?php
                        if($_SESSION['UserName']==NULL){
                            //用echo输出html标签不会报错
                            //此刻用户还未登录或者注册
                            echo '<ul class="login-signup">
								      <li><a href="login.html">登录</a></li>
								      <li><a href="login.html">注册</a></li>
							          </ul>';
                        }
                        else{
                            //已注册
                            $welcome1='欢迎您';
                            $welcome2=$_SESSION['UserName'];
                            $welcome=$welcome1." ".$welcome2;
                            echo "<ul class=\"login-signup\">
                                      <li><a href='#'>$welcome</a></li>
								      <li><a href=\"../../../php/logoff.php\">退出登录</a></li>
							          </ul>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!--Header Lower-->
        <div class="header-lower">
            <div class="auto-container">
                <div class="main-box clearfix">
                    <div class="pull-left logo-outer">
                        <div class="logo"><a href="index.php"><img src="images/icons/empty.png" data-src="images/method-draw-image.png" alt="" title=""></a></div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-lg navbar-light">
                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="index.php">首页</a></li>
                                    <li><a href="result.php">余票查询</a></li>
                                    <li><a href="result.php">路线查询</a></li>
                                    <li><a href="#">出行指南</a></li>
                                    <?php
                                    if($_SESSION['UserName']==NULL){
                                        echo "<li class=\"dropdown\"><a href=\"login.html\">个人中心,请先登录</a>
                                        
                                                  </li>";
                                    }
                                    else{
                                        echo "<li class=\"dropdown\"><a href=\"index.php\">个人中心</a>
                                        <ul>
                                            <li><a href=\"order/admin/index/admin-info.php\">我的资料</a></li>
                                            <li><a href=\"order/admin/index/rbac-admin.php\">火车票订单</a></li>
                                            <li><a href=\"order/admin/index/article-list.php\">常用联系人</a></li>
                                        </ul>
                                    </li>";
                                    }
                                    ?>
                                    <li><a href="#">信息查询</a></li>
                                    <li><a href="#">信息反馈</a></li>
                                    <li><a href="#">关于我们</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->

                        <div class="outer-box">
                            <!-- Btn Box -->
                            <div class="btn-box">
                                <a href="result.php" class="theme-btn btn-style-one"><span class="btn-title">刷新</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Lower-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.php" title=""><img src="images/icons/empty.png" data-src="images/method-draw-image.png" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="nav-outer pull-right">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>

            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.php"><img src="images/icons/empty.png" data-src="images/logo.png" alt="" title=""></a></div>

                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </nav>
        </div><!-- End Mobile Menu -->
    </header>
    <!--End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/main-slider/4.jpg)">
        <div class="auto-container">
            <h1>订票查询</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.php">首页</a></li>
                <li>订票详细信息查询</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Property Search Section -->
    <section class="property-search-section style-two">
        <div class="auto-container">
            <div class="property-search-form-two wow fadeInUp">
                <div class="title"><h5>开始购票</h5></div>
                <div class="form-inner">
                    <form method="post" action="#gradient-style">
                        <div class="row">
                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>出发城市</label>
                                <select class="custom-select-box" name="StartStation">
                                    <option>北京西</option>
                                    <option>石家庄</option>
                                    <option>郑州东</option>
                                    <option>郑州</option>
                                    <option>西安北</option>
                                    <option>兰州西</option>
                                    <option>上海虹桥</option>
                                    <option>南京南</option>
                                    <option>合肥南</option>
                                    <option>武汉</option>
                                    <option>正定机场</option>
                                    <option>保定东</option>
                                    <option>岳阳</option>
                                    <option>长沙</option>
                                    <option>太原南</option>
                                </select>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>出发日期</label><input id="meeting" type="date" name="StartDate" value="getNowFormatDate()"/>
                                <!--select class="custom-select-box">
                                    <option>National Parks</option>
                                    <option>National Parks</option>
                                    <option>National Parks</option>
                                    <option>National Parks</option>
                                    <option>National Parks</option>
                                    <option>National Parks</option>
                                    <option>National Parks</option>
                                </select-->
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>车型</label>
                                <select class="custom-select-box" name="TrainType">
                                    <option>普通</option>
                                    <option>直达Z</option>
                                    <option>特快T</option>
                                    <option>动车D</option>
                                    <option>高铁G</option>
                                    <option>复兴号</option>
                                    <option>城际专线</option>
                                </select>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>最低可接受票价</label>
                                <select class="custom-select-box" name="LowPrice">
                                    <option>￥1000</option>
                                    <option>￥5000</option>
                                    <option>￥10000</option>
                                    <option>￥20000</option>
                                    <option>￥50000</option>
                                    <option>￥100000</option>
                                </select>
                            </div>


                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>到达城市</label>
                                <select class="custom-select-box" name="ArriveStation">
                                    <option>北京西</option>
                                    <option>石家庄</option>
                                    <option>郑州东</option>
                                    <option>郑州</option>
                                    <option>西安北</option>
                                    <option>兰州西</option>
                                    <option>上海虹桥</option>
                                    <option>南京南</option>
                                    <option>合肥南</option>
                                    <option>武汉</option>
                                    <option>正定机场</option>
                                    <option>保定东</option>
                                    <option>岳阳</option>
                                    <option>长沙</option>
                                    <option>太原南</option>
                                </select>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>到达日期</label><input id="meeting1" type="date" name="ArriveDate" value="getNowFormatDate()"/>
                                <!--select class="custom-select-box">
                                    <option>Any Bathrooms</option>
                                    <option>01 Bathrooms</option>
                                    <option>02 Bathrooms</option>
                                    <option>03 Bathrooms</option>
                                    <option>04 Bathrooms</option>
                                    <option>05 Bathrooms</option>
                                </select-->
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>座位等级</label>
                                <select class="custom-select-box" name="SeatType">
                                    <option>无座</option>
                                    <option>硬座</option>
                                    <option>软座</option>
                                    <option>硬卧</option>
                                    <option>软卧</option>
                                    <option>二等座</option>
                                    <option>一等座</option>
                                    <option>特等座</option>
                                    <option>商务座</option>
                                </select>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>最高可接受票价</label>
                                <select class="custom-select-box" name="HighPrice">
                                    <option>￥1000</option>
                                    <option>￥5000</option>
                                    <option>￥10000</option>
                                    <option>￥20000</option>
                                    <option>￥50000</option>
                                    <option>￥100000</option>
                                </select>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-12 col-md-6 col-sm-12 text-center">
                                <button type="submit" class="theme-btn btn-style-one"><span class="btn-title" href="index.html">一键查询</span></button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!-- End Property Search Section -->

    <!--查询表结果反馈-->
    <!--样式修改对应css/table.css文件-->


    <table id="gradient-style" summary="Meeting Results">
        <thead>
        <tr>
            <!--此处是行标题，不用修改，保持固定即可-->
            <th scope="col">车次</th>
            <th scope="col">出发站</th>
            <th scope="col">出发时间</th>
            <th scope="col">到达站</th>
            <th scope="col">到达时间</th>
            <th scope="col">历时</th>
            <th scope="col">指定座位余票详情</th>

            <!--th scope="col">一等座</th>
            <th scope="col">二等座</th>
            <th scope="col">软卧<br/>一等卧</th>
            <th scope="col">动卧</th>
            <th scope="col">硬卧<br/>二等卧</th>
            <th scope="col">软座</th>
            <th scope="col">硬座</th>
            <th scope="col">无座</th-->
            <th scope="col"><strong>备注</strong></th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <!--此处输出查出的记录总数-->
            <?php
            include 'php/search.php';
            $num_=mysqli_num_rows($result1);
            $ok1='共查到';
            $ok2='条符合您出行的相关信息，请及时购票避免行程延误!';
            $ok=$ok1." ".$num_." ".$ok2;
            echo "<td colspan=\"4\"><strong><font color=\"#d2691e\">$ok</font></strong></td>";
            ?>
        </tr>
        </tfoot>


        <form method="post" action="php/storge_ticket_search.php">
        <!--此处按行输出php查询的结果-->
        <?php
        include 'php/search.php';

        $num=mysqli_num_rows($result1);
        $arr=array();
        if (mysqli_num_rows($result1) > 0) {
            // 输出数据
            $i=0;
            while($row1 = mysqli_fetch_assoc($result1)) {
                //echo "id: " . $row["tourist_name"]. " - Name: " . $row["tourist_id"]. " " . $row["Tourist_sex"]. "<br>";
                $_re1=$row1["TrainID"];
                $_re2=$row1["StartStation"];
                $_re3=$row1["StartTime"];
                $_re4=$row1["ArriveStation"];
                $_re5=$row1["ArriveTime"];

                $_re6=$row1["XseatsType"];
                $_re7=$row1["XseatsNum"];
                $_re9=$row1["Price"];
                $_re8=$_re6." ".$_re7;

                $_SESSION['TrainID']=$_re1;
                $_SESSION['StartStation']=$_re2;
                $_SESSION['StartTime']=$_re3;
                $_SESSION['ArriveStation']=$_re4;
                $_SESSION['ArriveTime']=$_re5;
                $_SESSION['XseatsType']=$_re6;
                $_SESSION['XseatsNum']=$_re7;
                $_SESSION['Price']=$_re9;

                $arr[]=$_re1;
                $arr[]=$_re2;
                $arr[]=$_re3;
                $arr[]=$_re4;
                $arr[]=$_re5;
                $arr[]=$_re6;
                $arr[]=$_re7;
                $arr[]=$_re9;

                $i=$i+1;
                //$_re8=$row4["XseatsNum"];
                echo "<tr>
            <td>$_re1</td>
            <td>$_re2</td>
            <td>$_re3</td>
            <td>$_re4</td>
            <td>$_re5</td>
            <td>-</td>
            <td>$_re8</td>
            <!--td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td-->
            <td><button id=\"ok\" name=\"store\" value=\"$i\"  type='submit'  data-url='php/storge_ticket_search.php'>预定购票</button></td>
         </tr>
        ";

            }$_SESSION['arr']=$arr;
            //echo $arr[7];
        } else {
            echo "<td><strong><font color='black'>十分抱歉！没有查询到您想乘坐的车次！请更换乘车区间！</font></strong></td>";
        }

        ?>
            <!--a id="urll" href="http://www.baidu.com/">这是一个a标签的超链接</a-->



        <!--tr>
            <td>G101</td>
            <td>北京南</td>
            <td>06:36</td>
            <td>上海虹桥</td>
            <td>12:40</td>
            <td>06:04</td>
            <td>候补</td>
            <td>有</td>
            <td>有</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td><a href="order/admin/index/menu-add2.php">预定购票</a></td></td>
        </tr-->
        <!--在此处添加更多行-->

        </form>
        </tbody>
    </table>
    <!--script type="text/javascript">
        document.getElementById("urll").onclick = function(){
            //此处输入超链接点击时要执行的代码
            Cookies.set('js_cn_ck','js_中文_cookie',5000);
            Cookies.set('js_en_ck','js_english_cookie');

        }
    </script-->
    <!--tr>
            <td>G101</td>
            <td>北京南</td>
            <td>06:36</td>
            <td>上海虹桥</td>
            <td>12:40</td>
            <td>06:04</td>
            <td>候补</td>
            <td>有</td>
            <td>有</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td><a href=\"order/admin/index/menu-add2.php\">预定购票</a></td></td>
        </tr-->



    <!-- Main Footer -->
    <footer class="main-footer" style="background-image: url(images/background/3.jpg);">
        <div class="auto-container">
            <div class="upper-box">
                <div class="row">
                    <!-- Upper column -->
                    <div class="upper-column col-lg-3 col-md-12 col-sm-12">
                        <div class="footer-logo">
                            <figure class="image"><a href="index.php"><img src="images/icons/empty.png" data-src="images/method-draw-image.svg" alt=""></a></figure>
                        </div>
                    </div>

                    <!-- Upper column -->
                    <div class="upper-column col-lg-3 col-md-12 col-sm-12">
                        <h2>畅行 <br>让出行更便捷,<br>心向世界，始于足下.</h2>
                    </div>

                    <!-- Upper column -->
                    <div class="upper-column col-lg-6 col-md-12 col-sm-12">
                        <div class="subscribe-form">
                            <form method="post" action="index.php">
                                <div class="form-group">
                                    <input type="email" name="search" value="" placeholder="搜一搜，更精彩" required="">
                                    <button type="submit" class="theme-btn btn-style-two"><span class="btn-title">开始搜索</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </footer>
    <!-- End Main Footer -->

</div>
<!-- End Page Wrapper -->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/appear.js"></script>
<script src="js/script.js"></script>
<!-- Color Setting -->
<script src="js/color-settings.js"></script>


<!--判断链接是否被点击-->
<script src="js/click.js"></script>
</body>
</html>