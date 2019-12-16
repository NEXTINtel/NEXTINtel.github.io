<!--火车票订单列表-->
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

		<link rel="stylesheet" type="text/css" href="../../static/admin/layui/css/layui.css" />
		<link rel="stylesheet" type="text/css" href="../../static/admin/css/admin.css" />

		<!--混合第二部分部分-->
		<meta charset="utf-8">
		<title>畅行 - 让出行更便捷. | 火车票订单</title>
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
									<a href="rbac-admin.php" class="theme-btn btn-style-one"><span class="btn-title">刷新</span></a>
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
					<li>火车票订单</li>
				</ul>
			</div>
		</section>
		<!--End Page Title-->

	</div>
	<!-- End Page Wrapper -->

		<div class="wrap-container">
				<div class="column-content-detail">
					<form class="layui-form" action="../../../result.php">
						<div class="layui-form-item">
							<div class="layui-inline tool-btn">
								 <button class="layui-btn layui-btn-small layui-btn-normal addBtn" type="submit" data-url="../../../result.php"><i class="layui-icon">&#xe654;</i></button>
								<button class="layui-btn layui-btn-small layui-btn-warm listOrderBtn hidden-xs"><i class="iconfont">&#xe656;</i></button>
							</div>
							<div class="layui-inline">
								<input type="text" name="name" placeholder="请输入车次信息" autocomplete="off" class="layui-input">
							</div>
							<div class="layui-inline">
								<select name="states" lay-filter="status">
									<option value="">请选择一位旅客</option>
									<!--option value="010">张三</option>
									<option value="021">李四</option-->
								</select>
							</div>
							<button class="layui-btn layui-btn-normal" lay-submit="search">搜索</button>
						</div>
					</form>
					<div class="layui-form" id="category-table-list">
						<table class="layui-table" lay-even lay-skin="nob">
							<colgroup>
								<col width="50">
								<col class="hidden-xs" width="50">
								<col width="200">
								<col class="hidden-xs">
								<col class="hidden-xs">
								<col class="hidden-xs">
								<col class="hidden-xs" width="100">
								<col width="150">
							</colgroup>
							<thead>
								<tr>
									<th><input type="checkbox" name="" lay-skin="primary" lay-filter="allChoose"></th>
									<th class="hidden-xs">车次</th>
									<th>订单号</th>
									<th class="hidden-xs">乘客信息</th>
									<th class="hidden-xs">出发时间</th>
									<th class="hidden-xs">始发站-->终点站</th>
									<th class="hidden-xs">状态</th>
									<th>操作</th>
								</tr>
							</thead>
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

                                $sql = "SELECT * FROM _tickets_info natural JOIN _tpu WHERE UserName='$username' AND UserPassword='$password'" ;
                                $result = mysqli_query($con, $sql);

                                $arr=array();
                                if (mysqli_num_rows($result) > 0) {
                                    // 输出数据
                                    while($row = mysqli_fetch_assoc($result)) {
                                        //echo "id: " . $row["tourist_name"]. " - Name: " . $row["tourist_id"]. " " . $row["Tourist_sex"]. "<br>";
                                        $_re1_=$row["OrderID"];
                                        $_re2_=$row["TrainID"];
                                        $_re3_=$row["StartStation"];
                                        $_re4_=$row["StartTime"];
                                        $_re5_=$row["ArriveStation"];
                                        $_re6_=$row["ArriveTime"];
                                        $_re7_=$row["Passenger"];
                                        $_re8_=$row["SeatType"];
                                        $_re9_=$row["CompartmentID"];
                                        $_re10_=$row["SeatID"];
                                        $_re11_=$row["SeatAllID"];
                                        $_re12_=$row["Price"];
                                        $_re13_=$row["CreateTime"];

                                        $arr[]=$_re1_;
                                        $arr[]=$_re2_;
                                        $arr[]=$_re3_;
                                        $arr[]=$_re4_;
                                        $arr[]=$_re5_;
                                        $arr[]=$_re6_;
                                        $arr[]=$_re7_;
                                        $arr[]=$_re8_;
                                        $arr[]=$_re9_;
                                        $arr[]=$_re10_;
                                        $arr[]=$_re11_;
                                        $arr[]=$_re12_;
                                        $arr[]=$_re13_;

                                        $_SESSION['delete_ticket']=$arr;

                                        $_re14_=$_re3_."-->".$_re5_;
                                        echo "<tr>
                                <td><input type=\"checkbox\" name=\"\" lay-skin=\"primary\"  data-id=\"1\"></td>
                                <td class=\"hidden-xs\">$_re2_</td>
                                <td>$_re1_</td>
                                <td class=\"hidden-xs\">$_re7_</td>
                                <td class=\"hidden-xs\">$_re4_</td>
                                <td class=\"hidden-xs\">$_re14_</td>
                                <td><button class=\"layui-btn layui-btn-mini layui-btn-normal\">正常</button></td>
                                <td>
                                    <form method='post' action='../../../php/delete/delete_ticket_confirm.php'>
                                    <div class=\"layui-inline\">
											<button class=\"layui-btn layui-btn-small layui-btn-normal  edit-btn\" data-id=\"1\" data-url=\"\"><i class=\"layui-icon\">&#xe642;</i></button>
                                         <button class=\"layui-btn layui-btn-small layui-btn-danger del-btn\" type='submit' name='delete' value='$arr' data-id=\"1\" data-url=\"../../../php/delete/delete_ticket_confirm.php\"><i class=\"layui-icon\">&#xe640;</i></button>
										</div>
                                    </form>
                                </td>
                            </tr>";
                                    }
                                } else {
                                    echo "0 结果";
                                }
                                ?>
							</tbody>

                            <!--tr>
                                <td><input type="checkbox" name="" lay-skin="primary"  data-id="1"></td>
                                <td class="hidden-xs">G2</td>
                                <td>李四</td>
                                <td class="hidden-xs">T0987654321</td>
                                <td class="hidden-xs">1989-10-14</td>
                                <td class="hidden-xs">北京->长沙</td>
                                <td><button class="layui-btn layui-btn-mini layui-btn-normal">正常</button></td>
                                <td>
                                    <div class="layui-inline">
                                        <button class="layui-btn layui-btn-small layui-btn-normal  edit-btn" data-id="1"><i class="layui-icon">&#xe642;</i></button>
                                        <button class="layui-btn layui-btn-small layui-btn-danger del-btn" data-id="1"><i class="layui-icon">&#xe640;</i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" lay-skin="primary"  data-id="1"></td>
                                <td class="hidden-xs">G3</td>
                                <td>王五</td>
                                <td class="hidden-xs">T5647382910</td>
                                <td class="hidden-xs">1989-10-14</td>
                                <td class="hidden-xs">北京->成都</td>
                                <td><button class="layui-btn layui-btn-mini layui-btn-normal">正常</button></td>
                                <td>
                                    <div class="layui-inline">
                                        <button class="layui-btn layui-btn-small layui-btn-normal  edit-btn" data-id="1"><i class="layui-icon">&#xe642;</i></button>
                                        <button class="layui-btn layui-btn-small layui-btn-danger del-btn" data-id="1"><i class="layui-icon">&#xe640;</i></button>
                                    </div>
                                </td>
                            </tr-->
						</table>

                        <br/>
                        <br/>

                        <!--已删除订单页面-->
                        <table class="layui-table" lay-even lay-skin="nob">
                            <colgroup>
                                <col width="50">
                                <col class="hidden-xs" width="50">
                                <col width="200">
                                <col class="hidden-xs">
                                <col class="hidden-xs">
                                <col class="hidden-xs">
                                <col class="hidden-xs" width="100">
                                <col width="150">
                            </colgroup>
                            <thead>
                            <tr>
                                <th><input type="checkbox" name="" lay-skin="primary" lay-filter="allChoose"></th>
                                <th class="hidden-xs">车次</th>
                                <th>订单号</th>
                                <th class="hidden-xs">乘客信息</th>
                                <th class="hidden-xs">出发时间</th>
                                <th class="hidden-xs">始发站-->终点站</th>
                                <th class="hidden-xs">状态</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            //获取当前登录的账户名称及密码,用于查询数据库
                            $username_=$_SESSION['UserName'];
                            $password_=$_SESSION['UserPassword'];
                            $Uid=$_SESSION['Uid'];

                            //连接数据库
                            $con_=mysqli_connect("localhost","root","19990420",ticket);
                            if(!$con_){
                                echo "数据库连接失败！请检查网络重新连接或联系管理员";
                            }

                            //多表联合查询
                            //$re_temp=mysqli_query($con,"SELECT tourist_name,tourist_id,Tourist_sex,Tourist_phone FROM `_TU`,'_Tourist' WHERE _TU.user_name='$username' AND _TU.user_password='$password'");

                            $sql_ = "SELECT * FROM delete_ticket  WHERE Username='$username_' AND Password='$password_'" ;
                            $result_ = mysqli_query($con_, $sql_);


                            if (mysqli_num_rows($result_) > 0) {
                                // 输出数据
                                while($row_ = mysqli_fetch_assoc($result_)) {
                                    //echo "id: " . $row["tourist_name"]. " - Name: " . $row["tourist_id"]. " " . $row["Tourist_sex"]. "<br>";
                                    $_re1_1=$row_["OrderID"];
                                    $_re2_1=$row_["TrainID"];
                                    $_re3_1=$row_["StartStation"];
                                    $_re4_1=$row_["StartTime"];
                                    $_re5_1=$row_["ArriveStation"];
                                    $_re6_1=$row_["ArriveTime"];
                                    $_re7_1=$row_["Passenger"];
                                    $_re8_1=$row_["SeatType"];
                                    $_re9_1=$row_["CompartmentID"];
                                    $_re10_1=$row_["SeatID"];
                                    $_re11_1=$row_["SeatAllID"];
                                    $_re12_1=$row_["Price"];
                                    $_re13_1=$row_["DeleteTime"];


                                    $_re14_1=$_re3_1."-->".$_re5_1;
                                    echo "<tr>
                                <td><input type=\"checkbox\" name=\"\" lay-skin=\"primary\"  data-id=\"1\"></td>
                                <td class=\"hidden-xs\">$_re2_1</td>
                                <td>$_re1_1</td>
                                <td class=\"hidden-xs\">$_re7_1</td>
                                <td class=\"hidden-xs\">$_re4_1</td>
                                <td class=\"hidden-xs\">$_re14_1</td>
                                <td><button class=\"layui-btn layui-btn-mini layui-btn-warm\">已退票</button></td>
                                <td>
                                    
                                    <div class=\"layui-inline\">
											<button class=\"layui-btn layui-btn-small layui-btn-normal  edit-btn\" data-id=\"1\" data-url=\"\"><i class=\"layui-icon\">&#xe642;</i></button>
                                         <button class=\"layui-btn layui-btn-small layui-btn-danger del-btn\" type='submit' name='delete' value='$arr' data-id=\"1\" data-url=\"../../../php/delete/delete_ticket_confirm.php\"><i class=\"layui-icon\">&#xe640;</i></button>
										</div>
                                    
                                </td>
                            </tr>";
                                }
                            } else {
                                echo "0 结果";
                            }
                            ?>
                            </tbody>

                            <!--tr>
                                <td><input type="checkbox" name="" lay-skin="primary"  data-id="1"></td>
                                <td class="hidden-xs">G2</td>
                                <td>李四</td>
                                <td class="hidden-xs">T0987654321</td>
                                <td class="hidden-xs">1989-10-14</td>
                                <td class="hidden-xs">北京->长沙</td>
                                <td><button class="layui-btn layui-btn-mini layui-btn-normal">正常</button></td>
                                <td>
                                    <div class="layui-inline">
                                        <button class="layui-btn layui-btn-small layui-btn-normal  edit-btn" data-id="1"><i class="layui-icon">&#xe642;</i></button>
                                        <button class="layui-btn layui-btn-small layui-btn-danger del-btn" data-id="1"><i class="layui-icon">&#xe640;</i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" lay-skin="primary"  data-id="1"></td>
                                <td class="hidden-xs">G3</td>
                                <td>王五</td>
                                <td class="hidden-xs">T5647382910</td>
                                <td class="hidden-xs">1989-10-14</td>
                                <td class="hidden-xs">北京->成都</td>
                                <td><button class="layui-btn layui-btn-mini layui-btn-normal">正常</button></td>
                                <td>
                                    <div class="layui-inline">
                                        <button class="layui-btn layui-btn-small layui-btn-normal  edit-btn" data-id="1"><i class="layui-icon">&#xe642;</i></button>
                                        <button class="layui-btn layui-btn-small layui-btn-danger del-btn" data-id="1"><i class="layui-icon">&#xe640;</i></button>
                                    </div>
                                </td>
                            </tr-->
                        </table>

						<!--tp分页-->
						<div class="page-wrap">
							<ul class="pagination">
								<li class="disabled"><span>«</span></li>
								<li class="active"><span>1</span></li>
								<li>
									<a href="/admin/category/index.html?page=2">2</a>
								</li>
								<li>
									<a href="/admin/category/index.html?page=2">»</a>
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


		<script type="text/javascript">
			var SCOPE = {
				static: '/static',
				index: '/admin/category/index.html',
				edit: 'menu-add.html',
				updateEdit: '/admin/category/updateedit.html',
				status: '/admin/category/updatestatus.html',
				del: '/admin/category/del.html',
				listOrderAll: '/admin/category/listorderall.html'
			}
		</script>
		<script src="../../static/admin/layui/layui.js" type="text/javascript" charset="utf-8"></script>

		<script>
			layui.config({
				base: '../../static/admin/js/module/'
			}).extend({
				dialog: 'dialog',
				load: 'load',
				common: 'common'
			});
			layui.use(['form', 'jquery', 'layer', 'dialog', 'common', 'element'], function() {
				var form = layui.form(),
					layer = layui.layer,
					$ = layui.jquery,
					common = layui.common,
					element = layui.element(),
					dialog = layui.dialog;

				//获取当前iframe的name值
				var iframeObj = $(window.frameElement).attr('name');
				//全选
				form.on('checkbox(allChoose)', function(data) {
					var child = $(data.elem).parents('table').find('tbody input[type="checkbox"]');
					child.each(function(index, item) {
						item.checked = data.elem.checked;
					});
					form.render('checkbox');
				});
				form.render();
				//顶部添加
				$('.addBtn').click(function() {
					//将iframeObj传递给父级窗口,执行操作完成刷新
					parent.page("菜单添加", SCOPE.add, iframeObj, w = "700px", h = "620px");
					return false;

				}).mouseenter(function() {

					dialog.tips('添加', '.addBtn');

				})
				//列表添加
				$('.add-btn').click(function() {
					//将iframeObj传递给父级窗口
					parent.page("菜单添加", SCOPE.add, iframeObj, w = "700px", h = "620px");
					return false;

				})
				//删除
				$('.del-btn').on('click', function() {
					var id = $(this).attr('data-id');
					common.del(SCOPE.del, id);
				})

				//排序
				$('.listOrderBtn').click(function() {

					common.listOrderAll(SCOPE.listOrderAll, '您确定要进行排序吗？');
					return false;

				}).mouseenter(function() {

					dialog.tips('排序', '.listOrderBtn');

				})
				//编辑栏目
				$('#category-table-list').on('click', '.edit-btn', function() {
					var That = $(this);
					var id = That.attr('data-id');
					//将iframeObj传递给父级窗口
					parent.page("菜单编辑", SCOPE.edit + "?id=" + id, iframeObj, w = "700px", h = "620px");
				})
			});
		</script>
	</body>

</html>