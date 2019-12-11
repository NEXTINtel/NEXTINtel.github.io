<!--添加常用联系人(大页面)-->
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
		<title>畅行 - 让出行更便捷. | 添加常用联系人</title>
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
									<a href="article-detail.php" class="the0me-btn btn-style-one"><span class="btn-title">刷新</span></a>
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
					<li>添加常用联系人</li>
				</ul>
			</div>
		</section>
		<!--End Page Title-->

	</div>
	<!-- End Page Wrapper -->

		<div class="page-content-wrap">
				<form class="layui-form" action="../../../php/passenger.php" method="post">
					<div class="layui-tab" style="margin: 0;">
						<ul class="layui-tab-title">
							<li><a href="article-list.php">常用联系人列表</a></li>
							<li class="layui-this">添加常用联系人</li>
							
						</ul>
						<div class="layui-tab-content">
							<div class="layui-tab-item"></div>
							<div class="layui-tab-item layui-show">
								<div class="layui-form-item">
									<label class="layui-form-label">姓名：</label>
									<div class="layui-input-block">
										<input type="text" name="name" required lay-verify="required" placeholder="请输入常用联系人姓名" autocomplete="off" class="layui-input">
									</div>
								</div>
								<div class="layui-form-item">
									<label class="layui-form-label">性别：</label>
									<div class="layui-input-block">
										<select name="sex" lay-verify="required">
											<option value="">请选择性别</option>
											<optgroup label="性别类型">
												<option value="男" selected="">男</option>
												<option value="女">女</option>
											</optgroup>
										</select>
									</div>
								</div>
								<div class="layui-form-item">
									<label class="layui-form-label">身份<br/>证号：</label>
									<div class="layui-input-block">
										<input type="text" name="IDnumber" required lay-verify="required" placeholder="请输入常用联系人身份证号（大陆）" autocomplete="off" class="layui-input">
									</div>
								</div>
								<div class="layui-form-item">
									<label class="layui-form-label">邮箱：</label>
									<div class="layui-input-block">
										<input type="text" name="email" required lay-verify="required" placeholder="请输入常用联系人邮箱（用于找回密码）" autocomplete="off" class="layui-input">
									</div>
								</div>
								<div class="layui-form-item">
									<label class="layui-form-label">联系<br/>方式：</label>
									<div class="layui-input-block">
										<input type="text" name="phone" required lay-verify="required" placeholder="请输入常用联系人联系方式" autocomplete="off" class="layui-input">
									</div>
								</div>
								<div class="layui-form-item">
									<label class="layui-form-label">信息<br/>上传：</label>
									<div class="layui-input-block">
										<input type="file" name="file（可随便定义）" class="layui-upload-file">
									</div>
								</div>
								<div class="layui-form-item">
									<label class="layui-form-label">联系人<br/>类型：</label>
									<div class="layui-input-block">
										<input type="radio" name="type" title="成人" checked>
										<input type="radio" name="type" title="儿童">
										<input type="radio" name="type" title="学生">
										<input type="radio" name="type" title="军人及残疾人">
									</div>
								</div>
								<div class="layui-form-item layui-form-text">
									<label class="layui-form-label">添加<br/>联系人<br/>描述：</label>
									<div class="layui-input-block">
										<textarea class="layui-textarea layui-hide" name="content" lay-verify="content" id="LAY_demo_editor"></textarea>
									</div>
								</div>
								<!--div class="layui-form-item">
									<label class="layui-form-label">关键字：</label>
									<div class="layui-input-block">
										<input type="text" name="laiyuan" placeholder="请输入关键字" autocomplete="off" class="layui-input">
									</div>
								</div>
								<div class="layui-form-item layui-form-text">
									<label class="layui-form-label">描述：</label>
									<div class="layui-input-block">
										<textarea placeholder="请输入内容" class="layui-textarea"></textarea>
									</div>
								</div>
								<div class="layui-form-item">
									<label class="layui-form-label">文章来源：</label>
									<div class="layui-input-block">
										<input type="text" name="laiyuan" required lay-verify="required" placeholder="请输入文章来源" autocomplete="off" class="layui-input">
									</div>
								</div>
								<div class="layui-form-item">
									<label class="layui-form-label">文章排序：</label>
									<div class="layui-input-block">
										<input type="text" name="listorder" required lay-verify="required" placeholder="请输入排序" autocomplete="off" class="layui-input" value="100">
									</div>
								</div>
								<div class="layui-form-item">
									<label class="layui-form-label">点击数：</label>
									<div class="layui-input-block">
										<input type="text" name="count" required lay-verify="required" placeholder="请输入文章点击数" autocomplete="off" class="layui-input" value="100">
									</div>
								</div-->
							</div>
						</div>
					</div>
					<div class="layui-form-item" style="padding-left: 10px;">
						<div class="layui-input-block">
							<button class="layui-btn layui-btn-normal" type="submit" data-url="article-list.html">立即添加</button>
							<!--button type="reset" class="layui-btn layui-btn-primary">重置</button-->
						</div>
					</div>
				</form>
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
				add: 'add.html',
				save: '/admin/category/save.html',
				edit: 'add.html',
				updateEdit: '/admin/category/updateedit.html',
				status: '/admin/category/updatestatus.html',
				del: '/admin/category/del.html',
				delAll: '/admin/category/deleteall.html',
				listOrderAll: '/admin/category/listorderall.html'
			}
		</script>
		<script src="../../static/admin/layui/layui.js" type="text/javascript" charset="utf-8"></script>
		<script src="../../static/admin/js/common.js" type="text/javascript" charset="utf-8"></script>
		<script>
			
			layui.use(['form', 'jquery', 'laydate', 'layer', 'laypage', 'dialog',  'element', 'upload', 'layedit'], function() {
				var form = layui.form(),
					layer = layui.layer,
					$ = layui.jquery,
					laypage = layui.laypage,
					laydate = layui.laydate,
					layedit = layui.layedit,
					element = layui.element(),
					dialog = layui.dialog;

				//获取当前iframe的name值
				var iframeObj = $(window.frameElement).attr('name');
				//创建一个编辑器
				var editIndex = layedit.build('LAY_demo_editor', {
					tool: ['strong' //加粗
						, 'italic' //斜体
						, 'underline' //下划线
						, 'del' //删除线
						, '|' //分割线
						, 'left' //左对齐
						, 'center' //居中对齐
						, 'right' //右对齐
						, 'link' //超链接
						, 'unlink' //清除链接
						, 'image' //插入图片
					],
					height: 100
				})
				//全选
				form.on('checkbox(allChoose)', function(data) {
					var child = $(data.elem).parents('table').find('tbody input[type="checkbox"]');
					child.each(function(index, item) {
						item.checked = data.elem.checked;
					});
					form.render('checkbox');
				});
				form.render();

				layui.upload({
					url: '上传接口url',
					success: function(res) {
						console.log(res); //上传成功返回值，必须为json格式
					}
				});
			});
		</script>
	</body>

</html>