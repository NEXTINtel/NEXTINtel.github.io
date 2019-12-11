<!--首页部分-->
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>畅行 - 让出行更便捷. | 首页</title>
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

    <!--自定义样式-->
    <style type="text/css">
        /*input css*/
        .iInput{
            position: absolute;
            width: 99px;
            height: 16px;
            left: 1px;
            top: 2px;
            border-bottom: 0px;
            border-right: 0px;
            border-left: 0px;
            border-top: 0px;
        }
    </style>
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <!--div class="preloader"></div-->
    
    <!-- Main Header-->
    <header class="main-header header-style-two">
        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">
                    
                    <div class="logo-outer">
                        <div class="logo"><a href="index.php"><img src="images/icons/empty.png" data-src="images/method-draw-image.svg" alt="" title=""></a></div>
                    </div>
                    
                    <div class="upper-right clearfix">
                        
                        <!--Info Box-->
                        <!--div class="upper-column info-box">
                            <div class="icon-box"><span class="fa fa-map-marker-alt"></span></div>
                            <ul>
                                <li>18 Haward Amston <br>Building St, CA, USA</li>
                            </ul>
                        </div-->

                        <!--Info Box-->
                        <!--div class="upper-column info-box">
                            <div class="icon-box"><span class="fa fa-phone-volume"></span></div>
                            <ul>
                                <li><a href="tel:(+84)388-969-888">(+84) 388-969-888</a></li>
                                <li><a href="tel:(+84)388-969-888">(+84) 388-969-888</a></li>
                            </ul>

                        </div-->

                        <!--Info Box-->
                        <!--div class="upper-column info-box">
                            <div class="icon-box"><span class="fa fa-envelope"></span></div>
                            <ul>
                                <li><a href="mailto:arytheme@outlook.com">arytheme@outlook.com</a></li>
                                <li><a href="mailto:support@arytheme.com">support@arytheme.com</a></li>
                            </ul>
                        </div-->

                        <!--Info Box-->
                        <div class="upper-column btn-box info-box">
                            <?php
                                if($_SESSION['UserName']==NULL){
                                    //用echo输出html标签不会报错
                                    //此刻用户还未登录或者注册
                                    echo '<a href="#" class="theme-btn btn-style-two"><span class="btn-title">为了您的出行安全</span></a>';
                                }
                                else{
                                    //已注册
                                    $welcome1='欢迎您';
                                    $welcome2=$_SESSION['UserName'];
                                    $welcome=$welcome1." ".$welcome2;
                                    echo "<a href=\"order/admin/index/admin-info.php\" class=\"theme-btn btn-style-two\"><span class=\"btn-title\">$welcome</span></a>";
                                }
                            ?>

                        </div>

                        <!--Info Box-->
                        <div class="upper-column btn-box info-box">
                            <?php
                            if($_SESSION['UserName']==NULL){
                                //用echo输出html标签不会报错
                                //此刻用户还未登录或者注册
                                echo '<a href="login.html" class="theme-btn btn-style-two"><span class="btn-title">请登录/注册</span></a>';
                            }
                            else{
                                //已注册，但想退出登录
                                $logoff='退出登录';
                                echo "<a href=\"php/logoff.php\" class=\"theme-btn btn-style-two\"><span class=\"btn-title\">$logoff</span></a>";
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Upper -->

        <!--Header Lower-->
        <div class="header-lower">
            <div class="auto-container">
                <div class="main-box clearfix">
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
                           <ul class="social-icon-one">
                               <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                               <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                               <li><a href="#"><span class="fab fa-skype"></span></a></li>
                               <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                           </ul>
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
                <div class="nav-logo"><a href="index.php"><img src="images/icons/empty.png" data-src="images/method-draw-image.png" alt="" title=""></a></div>
                
                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </nav>
        </div><!-- End Mobile Menu -->
    </header>
    <!--End Main Header -->

    <!-- Banner Section -->
    <section class="banner-section-two">
        <div class="banner-carousel-two owl-carousel owl-theme">
            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url(images/main-slider/2.jpg);">
                <div class="auto-container">

                    <div class="content-box clearfix">
                        <div class="left-content">
                            <div class="status"><span>畅行</span></div>
                            <h2>心向世界，始于足下</h2>
                            <div class="text">无论你身在何处，只需轻轻触动屏幕，便可享受旅行的惬意.</div>
                            <div class="btn-box"><a href="index.php" class="theme-btn btn-style-two"><span class="btn-title">了解更多</span></a></div>
                        </div>

                        <div class="right-content">
                            <span class="tag">多、快、好、省</span>
                            <span class="price">8位用户的选择</span>
                            <span class="avail">即刻购票，畅享更多优惠</span>
                        </div>
                    </div>
                </div>
            </div>

                        <!-- Slide Item -->
            <div class="slide-item" style="background-image: url(images/main-slider/3.jpg);">
                <div class="auto-container">

                    <div class="content-box clearfix">
                        <div class="left-content">
                            <div class="status"><span>畅行</span></div>
                            <h2>心向世界，始于足下</h2>
                            <div class="text">无论你身在何处，只需轻轻触动屏幕，便可享受旅行的惬意.</div>
                            <div class="btn-box"><a href="index.php" class="theme-btn btn-style-two"><span class="btn-title">了解更多</span></a></div>
                        </div>

                        <div class="right-content">
                            <span class="tag">多、快、好、省</span>
                            <span class="price">8位用户的选择</span>
                            <span class="avail">即刻购票，畅享更多优惠</span>
                        </div>
                    </div>
                </div>
            </div>

                        <!-- Slide Item -->
            <div class="slide-item" style="background-image: url(images/main-slider/1.jpg);">
                <div class="auto-container">

                    <div class="content-box clearfix">
                        <div class="left-content">
                            <div class="status"><span>畅行</span></div>
                            <h2>心向世界，始于足下</h2>
                            <div class="text">无论你身在何处，只需轻轻触动屏幕，便可享受旅行的惬意.</div>
                            <div class="btn-box"><a href="index.php" class="theme-btn btn-style-two"><span class="btn-title">了解更多</span></a></div>
                        </div>

                        <div class="right-content">
                            <span class="tag">多、快、好、省</span>
                            <span class="price">8位用户的选择</span>
                            <span class="avail">即刻购票，畅享更多优惠</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->
    
    <!-- Property Search Section -->
    <section class="property-search-section style-two">
        <div class="auto-container">
            <div class="property-search-form-two wow fadeInUp">
                <div class="title"><h5>开始购票</h5></div>
                <div class="form-inner">
                    <form method="post" action="result.php#gradient-style">
                        <div class="row">
                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12" style="position:relative;">
                                <label>出发城市</label>
                                <!--input id="input" name="input" class="iInput"/-->
                                <select class="custom-select-box" name="StartStation" style="width:120px;" onchange="document.getElementById('input').value=this.value">
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
                                <button type="submit" class="theme-btn btn-style-one"><span class="btn-title">一键查询</span></button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- End Property Search Section -->


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

<!-- Color Palate / Color Switcher -->
<!--div class="color-palate">
    <div class="color-trigger">
        <i class="fa fa-cog"></i>
    </div>
    <div class="color-palate-head">
        <h6>Choose Your Color</h6>
    </div>
    <div class="various-color clearfix">
        <div class="colors-list">
            <span class="palate default-color active" data-theme-file="css/color-themes/default-theme.css"></span>
            <span class="palate green-color" data-theme-file="css/color-themes/green-theme.css"></span>
            <span class="palate blue-color" data-theme-file="css/color-themes/blue-theme.css"></span>
            <span class="palate orange-color" data-theme-file="css/color-themes/orange-theme.css"></span>
            <span class="palate purple-color" data-theme-file="css/color-themes/purple-theme.css"></span>
            <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
            <span class="palate brown-color" data-theme-file="css/color-themes/brown-theme.css"></span>
            <span class="palate redd-color" data-theme-file="css/color-themes/redd-color.css"></span>
        </div>
    </div>
    
    <div class="palate-foo">
        <span>You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.</span>
    </div>
</div--><!-- End Color Switcher -->

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
</body>
</html>