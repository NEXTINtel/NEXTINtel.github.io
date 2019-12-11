<!--常用联系人列表-->
<?php
    session_start();
?>

<!DOCTYPE html>
<html class="iframe-h">

	<head>
		<meta charset="UTF-8">
		<meta name="renderer" content="webkit">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />

		<link rel="stylesheet" type="text/css" href="../../static/admin/layui/css/layui.css" />
		<link rel="stylesheet" type="text/css" href="../../static/admin/css/admin.css" />

		<!--混合第二部分部分-->
		<meta charset="utf-8">
		<title>畅行 - 让出行更便捷. | 常用联系人</title>
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
										<li class="dropdown"><a href="index.html">个人中心</a>
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
									<a href="article-list.php" class="theme-btn btn-style-one"><span class="btn-title">刷新</span></a>
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
					<li>常用联系人</li>
				</ul>
			</div>
		</section>
		<!--End Page Title-->

	</div>
	<!-- End Page Wrapper -->

		<div class="wrap-container clearfix">
				<div class="column-content-detail">
					<form class="layui-form" action="">
						<div class="layui-form-item">
							<div class="layui-inline tool-btn">
								<button class="layui-btn layui-btn-small layui-btn-normal addBtn" data-url="article-add.php"><i class="layui-icon">&#xe654;</i></button>
								<button class="layui-btn layui-btn-small layui-btn-danger delBtn"  data-url="article-add.php"><i class="layui-icon">&#xe640;</i></button>
								<button class="layui-btn layui-btn-small layui-btn-warm listOrderBtn hidden-xs" data-url="article-add.php"><i class="iconfont">&#xe656;</i></button>
							</div>
							<div class="layui-inline">
								<input type="text" name="title" required lay-verify="required" placeholder="请输入姓名" autocomplete="off" class="layui-input">
							</div>
							<div class="layui-inline">
								<select name="states" lay-filter="status">
									<option value="">请选择一个状态</option>
									<option value="010">正常</option>
									<option value="021">停止</option>
									<option value="0571">删除</option>
								</select>
							</div>
							<button class="layui-btn layui-btn-normal" lay-submit="search">搜索</button>
						</div>
					</form>
					<div class="layui-form" id="table-list">
						<table class="layui-table" lay-even lay-skin="nob">
							<colgroup>
								<col width="50">
								<col class="hidden-xs" width="50">
								<col class="hidden-xs" width="100">
								<col>
								<col class="hidden-xs" width="150">
								<col class="hidden-xs" width="150">
								<col width="80">
								<col width="150">
							</colgroup>
							<thead>
								<tr>
									<th><input type="checkbox" name="" lay-skin="primary" lay-filter="allChoose"></th>
									<th class="hidden-xs">排序</th>
									<th class="hidden-xs">姓名</th>
									<th>身份证号</th>
									<th class="hidden-xs">性别</th>
									<th class="hidden-xs">联系方式</th>
									<th>状态</th>
									<th>操作</th>
								</tr>
							</thead>
                            <tfoot>
                            <!--tr>

                                <td colspan=\"4\"><strong><font color=\"#d2691e\">共查到xxx条符合您出行的相关信息，请及时购票避免行程延误!</font></strong></td>
                            </tr-->
                            </tfoot>
							<tbody>
                            <?php
                            //获取当前登录的账户名称及密码,用于查询数据库
                            $username=$_SESSION['UserName'];
                            $password=$_SESSION['UserPassword'];
                            $Uid=$_SESSION['Uid'];

                            //连接数据库
                            $con=mysqli_connect("localhost","root","19990420",ticket);
                            if(!$con){
                                echo "数据库连接失败！请检查网络重新连接或联系管理员";
                            }

                            //多表联合查询
                            //$re_temp=mysqli_query($con,"SELECT tourist_name,tourist_id,Tourist_sex,Tourist_phone FROM `_TU`,'_Tourist' WHERE _TU.user_name='$username' AND _TU.user_password='$password'");

                            $sql = "SELECT _tu.tourist_name,_tu.tourist_id,_tourist.Tourist_sex,_tourist.Tourist_phone FROM _tu INNER JOIN _tourist ON _tu.tourist_id=_tourist.Tourist_ID WHERE _tu.user_name='$username' AND _tu.user_password='$password'";
                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                // 输出数据
                                while($row = mysqli_fetch_assoc($result)) {
                                    //echo "id: " . $row["tourist_name"]. " - Name: " . $row["tourist_id"]. " " . $row["Tourist_sex"]. "<br>";
                                    $_re1=$row["tourist_name"];
                                    $_re2=$row["tourist_id"];
                                    $_re3=$row["Tourist_sex"];
                                    $_re4=$row["Tourist_phone"];
                                    echo "<tr>
									<td><input type=\"checkbox\" name=\"\" lay-skin=\"primary\" data-id=\"1\"></td>
									<td class=\"hidden-xs\">2</td>
									<td class=\"hidden-xs\"><!--input type=\"text\" name=\"title\" autocomplete=\"off\" class=\"layui-input\" value=\"0\" data-id=\"1\"-->$_re1</td>
									<td>$_re2</td>
									<td class=\"hidden-xs\">$_re3</td>
									<td class=\"hidden-xs\">$_re4</td>
									<td><button class=\"layui-btn layui-btn-mini layui-btn-normal\">正常</button></td>
									<td>
										<div class=\"layui-inline\">
											<button class=\"layui-btn layui-btn-small layui-btn-normal go-btn\" data-id=\"1\" data-url=\"article-detail.php\"><i class=\"layui-icon\">&#xe642;</i></button>
											<button class=\"layui-btn layui-btn-small layui-btn-danger del-btn\" data-id=\"1\" data-url=\"article-detail.php\"><i class=\"layui-icon\">&#xe640;</i></button>
										</div>
									</td>
								</tr>";
                                }
                            } else {
                                echo "0 结果";
                            }

                            //echo mysqli_num_rows($result);结果为2行

                            if(mysqli_num_rows($result)>0){
                                //输出数据
                                while($row=mysqli_fetch_assoc($result)){
                                    $row[]=$row;    //接受结果集
                                    /*echo "<tr>
									<td><input type=\"checkbox\" name=\"\" lay-skin=\"primary\" data-id=\"1\"></td>
									<td class=\"hidden-xs\">2</td>
									<td class=\"hidden-xs\"><!--input type=\"text\" name=\"title\" autocomplete=\"off\" class=\"layui-input\" value=\"0\" data-id=\"1\"--></td>
									<td>111111222233336666</td>
									<td class=\"hidden-xs\">女</td>
									<td class=\"hidden-xs\">1989-10-14</td>
									<td><button class=\"layui-btn layui-btn-mini layui-btn-normal\">正常</button></td>
									<td>
										<div class=\"layui-inline\">
											<button class=\"layui-btn layui-btn-small layui-btn-normal go-btn\" data-id=\"1\" data-url=\"article-detail.php\"><i class=\"layui-icon\">&#xe642;</i></button>
											<button class=\"layui-btn layui-btn-small layui-btn-danger del-btn\" data-id=\"1\" data-url=\"article-detail.php\"><i class=\"layui-icon\">&#xe640;</i></button>
										</div>
									</td>
								</tr>";*/
                                }
                                echo $row;
                            }
                            ?>

								<!--tr>
									<td><input type="checkbox" name="" lay-skin="primary" data-id="1"></td>
									<td class="hidden-xs">2</td>
									<td class="hidden-xs"><input type="text" name="title" autocomplete="off" class="layui-input" value="0" data-id="1">李四</td>
									<td>111111222233336666</td>
									<td class="hidden-xs">女</td>
									<td class="hidden-xs">1989-10-14</td>
									<td><button class="layui-btn layui-btn-mini layui-btn-normal">正常</button></td>
									<td>
										<div class="layui-inline">
											<button class="layui-btn layui-btn-small layui-btn-normal go-btn" data-id="1" data-url="article-detail.php"><i class="layui-icon">&#xe642;</i></button>
											<button class="layui-btn layui-btn-small layui-btn-danger del-btn" data-id="1" data-url="article-detail.php"><i class="layui-icon">&#xe640;</i></button>
										</div>
									</td>
								</tr-->
							</tbody>
						</table>
						<div class="page-wrap">
							<ul class="pagination">
								<li class="disabled"><span>«</span></li>
								<li class="active"><span>1</span></li>
								<li>
									<a href="#">2</a>
								</li>
								<li>
									<a href="#">»</a>
								</li>
							</ul>
						</div>
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
		<script src="../../static/admin/js/common.js" type="text/javascript" charset="utf-8"></script>
	</body>

</html>