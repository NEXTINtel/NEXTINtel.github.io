<!--用户个人信息界面-->
<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />

    <link rel="stylesheet" type="text/css" href="../../static/admin/layui/css/layui.css"/>
    <link rel="stylesheet" type="text/css" href="../../static/admin/css/admin.css"/>


    <!--混合第二部分部分-->
    <meta charset="utf-8">
    <title>畅行 - 让出行更便捷. | 我的资料</title>
    <!-- Stylesheets -->
    <link href="../../../css/bootstrap.css" rel="stylesheet">
    <link href="../../../css/style.css" rel="stylesheet">
    <link href="../../../css/responsive.css" rel="stylesheet">
    <!--Color Switcher Mockup-->
    <link href="../../../css/color-switcher-design.css" rel="stylesheet">

    <!--Color Themes-->
    <link id="theme-color-file" href="../../../css/color-themes/default-theme.css" rel="stylesheet">

    <link rel="shortcut icon" href="../../../images/method-draw-image.png" type="image/x-icon">
    <link rel="icon" href="../../../images/method-draw-image.png" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="../../../js/respond.js"></script><![endif]-->

    <!--自定义添加部分-->
    <link href="../../../css/table.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../../../css/list.css" />
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
								      <li><a href="../../../login.html">登录</a></li>
								      <li><a href="../../../login.html">注册</a></li>
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
                        <div class="logo"><a href="../../../index.php"><img src="../../../images/icons/empty.png" data-src="../../../images/method-draw-image.png" alt="" title=""></a></div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-lg navbar-light">
                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="../../../index.php">首页</a></li>
                                    <li><a href="../../../result.php">余票查询</a></li>
                                    <li><a href="../../../result.php">路线查询</a></li>
                                    <li><a href="#">出行指南</a></li>
                                    <li class="dropdown"><a href="#">个人中心</a>
                                        <ul>
                                            <li><a href="admin-info.php">我的资料</a></li>
                                            <li><a href="rbac-admin.php">火车票订单</a></li>
                                            <li><a href="article-list.php">常用联系人</a></li>
                                        </ul>
                                    </li>
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
                                <a href="admin-info.php" class="theme-btn btn-style-one"><span class="btn-title">刷新</span></a>
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
                    <a href="../../../index.php" title=""><img src="../../../images/icons/empty.png" data-src="../../../images/method-draw-image.png" alt="" title=""></a>
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
                <div class="nav-logo"><a href="../../../index.php"><img src="../../../images/icons/empty.png" data-src="../../../images/logo.png" alt="" title=""></a></div>

                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </nav>
        </div><!-- End Mobile Menu -->
    </header>
    <!--End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url(../../../images/main-slider/4.jpg)">
        <div class="auto-container">
            <h1>个人中心</h1>
            <ul class="page-breadcrumb">
                <li><a href="../../../index.php">首页</a></li>
                <li>个人中心</li>
                <li>我的资料</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

</div>
<!-- End Page Wrapper -->

<div class="layui-tab page-content-wrap">
    <ul class="layui-tab-title">
        <li class="layui-this">基本资料</li>
        <li>修改密码</li>
        <li>修改资料</li>
    </ul>
    <div class="layui-tab-content">
        <div class="layui-tab-item layui-show">
            <!--form class="layui-form"  style="width: 90%;padding-top: 20px;">
              <div class="layui-form-item">
                <label class="layui-form-label">ID：</label>
                <div class="layui-input-block">
                  <input type="text" name="id" disabled autocomplete="off" class="layui-input layui-disabled" value="1">
                </div>
              </div>
              <div class="layui-form-item">
                <label class="layui-form-label">用户名：</label>
                <div class="layui-input-block">
                  <input type="text" name="username" disabled autocomplete="off" class="layui-input layui-disabled" value="admin">
                </div>
              </div>
               <div class="layui-form-item">
                <label class="layui-form-label">姓名：</label>
                <div class="layui-input-block">
                  <input type="text" name="name" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input" value="未知">
                </div>
              </div>
              <div class="layui-form-item">
                <label class="layui-form-label">邮箱：</label>
                <div class="layui-input-block">
                  <input type="text" name="email" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input" value="5303588521@qq.com">
                </div>
              </div>
              <div class="layui-form-item layui-form-text">
                <label class="layui-form-label">备注：</label>
                <div class="layui-input-block">
                  <textarea name="desc" placeholder="请输入内容" class="layui-textarea"></textarea>
                </div>
              </div>
              <div class="layui-form-item">
                <div class="layui-input-block">
                  <button class="layui-btn layui-btn-normal" lay-submit lay-filter="adminInfo">立即提交</button>
                </div>
              </div>
            </form-->
            <?php
            $_username=$_SESSION['UserName'];
            $_userid=$_SESSION['Uid'];
            $_userpassword=$_SESSION['UserPassword'];
            $_userid=$_SESSION['Uid'];

            //连接数据库
            //连接数据库
            $con=mysqli_connect("localhost","root","19990420",ticket);
            if(!$con){
                echo "数据库连接失败！请检查网络重新连接或联系管理员";
            }

            $re1_temp=mysqli_query($con,"SELECT Name FROM `_user` WHERE Uname='$_username' AND Upasswd='$_userpassword'");
            $re1=mysqli_fetch_array($re1_temp);

            $re2_temp=mysqli_query($con,"SELECT Uemail FROM `_user` WHERE Uname='$_username' AND Upasswd='$_userpassword'");
            $re2=mysqli_fetch_array($re2_temp);

            $re3_temp=mysqli_query($con,"SELECT Ucreatime FROM `_user` WHERE Uname='$_username' AND Upasswd='$_userpassword'");
            $re3=mysqli_fetch_array($re3_temp);

            $re4_temp=mysqli_query($con,"SELECT Phone FROM `_user` WHERE Uname='$_username' AND Upasswd='$_userpassword'");
            $re4=mysqli_fetch_array($re4_temp);

            $re5_temp=mysqli_query($con,"SELECT IDnumber FROM `_user` WHERE Uname='$_username' AND Upasswd='$_userpassword'");
            $re5=mysqli_fetch_array($re5_temp);

            $re6_temp=mysqli_query($con,"SELECT Remarks FROM `_user` WHERE Uname='$_username' AND Upasswd='$_userpassword'");
            $re6=mysqli_fetch_array($re6_temp);


            echo "<table id=\"gradient-style\" summary=\"Meeting Results\">
        <thead>
        <tr>
            <!--此处是行标题，不用修改，保持固定即可-->
            <th scope=\"col\">基本信息索引</th>
            <th scope=\"col\">详细基本信息</th>
            <th scope=\"col\"><strong>备注</strong></th>
        </tr>
        </thead>
        
        <tr>
            <td>账户ID</td>
            <td>$_userid</td>
            <td>-</td>
        </tr>
        <tr>
            <td>账户名称</td>
            <td>$_username</td>
            <td>-</td>
        </tr>
        <tr>
            <td>账户绑定邮箱</td>
            <td>$re2[0]</td>
            <td>-</td>
        </tr>
        <tr>
        <tr>
            <td>账户绑定联系方式</td>
            <td>$re4[0]</td>
            <td>-</td>
        </tr>
            <td>账户持有者姓名</td>
            <td>$re1[0]</td>
            <td>-</td>
        </tr>
        <tr>
            <td>账户持有者身份证号</td>
            <td>$re5[0]</td>
            <td>-</td>
        </tr>
        <tr>
            <td>账户上次修改备注</td>
            <td>$re6[0]</td>
            <td>-</td>
        </tr>
       
        <!--在此处添加更多行-->

        </tbody>
    </table>";
            ?>
        </div>

        <div class="layui-tab-item">
            <form class="layui-form" v style="width: 90%;padding-top: 20px;" action="../../../php/user_passwd.php" method="post">
                <?php
                    echo "<div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">用户名：</label>
                    <div class=\"layui-input-block\">
                        <input type=\"text\" name=\"username\" disabled autocomplete=\"off\" class=\"layui-input layui-disabled\" value=\"$welcome2\">
                    </div>
                </div>";
                ?>
                <div class="layui-form-item">
                    <label class="layui-form-label">旧密码：</label>
                    <div class="layui-input-block">
                        <input type="password" name="password1" required lay-verify="required" placeholder="请输入旧密码" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">新密码：</label>
                    <div class="layui-input-block">
                        <input type="password" name="password2" required lay-verify="required" placeholder="请输入新密码" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">重复密码：</label>
                    <div class="layui-input-block">
                        <input type="password" name="password3" required lay-verify="required" placeholder="请再次输入新密码" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <button class="layui-btn layui-btn-normal" type="submit" ">确认修改</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="layui-tab-item layui-show" id="first">
            <form class="layui-form"  style="width: 90%;padding-top: 20px;" action="../../../php/user_info.php" method="post">
                <?php
                    $UID=$_SESSION['Uid'];
                    echo "<div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">ID：</label>
                    <div class=\"layui-input-block\">
                        <input type=\"text\" name=\"id\" disabled autocomplete=\"off\" class=\"layui-input layui-disabled\" value=\"$UID\">
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">用户名：</label>
                    <div class=\"layui-input-block\">
                        <input type=\"text\" name=\"username\" disabled autocomplete=\"off\" class=\"layui-input layui-disabled\" value=\"$welcome2\">
                    </div>
                </div>";
                ?>
                <div class="layui-form-item">
                    <label class="layui-form-label">姓名：</label>
                    <div class="layui-input-block">
                        <input type="text" name="name" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input" value="请输入真实姓名">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">邮箱：</label>
                    <div class="layui-input-block">
                        <input type="text" name="email" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input" value="请输入正确的邮箱地址，如：changxing666@163.com">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">手机号：</label>
                    <div class="layui-input-block">
                        <input type="text" name="phone" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input" value="请输入正确的手机号，如：15333587032">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">身份证号：</label>
                    <div class="layui-input-block">
                        <input type="text" name="IDcard" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input" value="请输入18位大陆身份证号（不包括港澳台）">
                    </div>
                </div>
                <div class="layui-form-item layui-form-text">
                    <label class="layui-form-label">备注：</label>
                    <div class="layui-input-block">
                        <textarea name="desc" placeholder="请输入内容" class="layui-textarea"></textarea>
                    </div>
                </div>
                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <button class="layui-btn layui-btn-normal" type="submit">确认修改</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Main Footer -->
<footer class="main-footer" style="background-image: url(../../../images/background/3.jpg);">
    <div class="auto-container">
        <div class="upper-box">
            <div class="row">
                <!-- Upper column -->
                <div class="upper-column col-lg-3 col-md-12 col-sm-12">
                    <div class="footer-logo">
                        <figure class="image"><a href="../../../index.php"><img src="../../../images/icons/empty.png" data-src="../../../images/method-draw-image.svg" alt=""></a></figure>
                    </div>
                </div>

                <!-- Upper column -->
                <div class="upper-column col-lg-3 col-md-12 col-sm-12">
                    <h2>畅行 <br>让出行更便捷,<br>心向世界，始于足下.</h2>
                </div>

                <!-- Upper column -->
                <div class="upper-column col-lg-6 col-md-12 col-sm-12">
                    <div class="subscribe-form">
                        <form method="post" action="../../../index.php">
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

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
<script src="../../../js/jquery.js"></script>
<script src="../../../js/popper.min.js"></script>
<script src="../../../js/bootstrap.min.js"></script>
<script src="../../../js/jquery-ui.js"></script>
<script src="../../../js/jquery.fancybox.js"></script>
<script src="../../../js/owl.js"></script>
<script src="../../../js/wow.js"></script>
<script src="../../../js/jquery.stellar.min.js"></script>
<script src="../../../js/isotope.js"></script>
<script src="../../../js/appear.js"></script>
<script src="../../../js/script.js"></script>
<!-- Color Setting -->
<script src="../../../js/color-settings.js"></script>


<script src="../../static/admin/layui/layui.js" type="text/javascript" charset="utf-8"></script>
<script>
    //Demo
    layui.use(['form','element'], function(){
        var form = layui.form();
        var element = layui.element();
        form.render();
        //监听信息提交
        form.on('submit(adminInfo)', function(data){
            layer.msg(JSON.stringify(data.field));
            return false;
        });
        //监听密码提交
        form.on('submit(adminPassword)', function(data){
            layer.msg(JSON.stringify(data.field));
            return false;
        });
    });
</script>
</body>
</html>