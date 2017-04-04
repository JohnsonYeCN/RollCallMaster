<?php
	include_once 'lib/BmobObject.class.php';
	include_once 'lib/BmobUser.class.php';
	include_once 'lib/BmobBatch.class.php';
	include_once 'lib/BmobFile.class.php';
	include_once 'lib/BmobImage.class.php';
	include_once 'lib/BmobRole.class.php';
	include_once 'lib/BmobPush.class.php';
	include_once 'lib/BmobPay.class.php';
	include_once 'lib/BmobSms.class.php';
	include_once 'lib/BmobApp.class.php';
	include_once 'lib/BmobSchemas.class.php';
	include_once 'lib/BmobTimestamp.class.php';
	include_once 'lib/BmobCloudCode.class.php';
	include_once 'lib/BmobBql.class.php';
	error_reporting(E_ALL^E_NOTICE^E_WARNING);
	?>
<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->

<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>点名系统————教师首页</title>

	<meta content="width=device-width, initial-scale=1.0" name="viewport" />

	<meta content="" name="description" />

	<meta content="" name="author" />

	<!-- BEGIN GLOBAL MANDATORY STYLES -->

	<link href="/default/media/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

	<link href="/default/media/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>

	<link href="/default/media/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

	<link href="/default/media/css/style-metro.css" rel="stylesheet" type="text/css"/>

	<link href="/default/media/css/style.css" rel="stylesheet" type="text/css"/>

	<link href="/default/media/css/style-responsive.css" rel="stylesheet" type="text/css"/>

	<link href="/default/media/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>

	<link href="/default/media/css/uniform.default.css" rel="stylesheet" type="text/css"/>

	<!-- END GLOBAL MANDATORY STYLES -->

	<!-- BEGIN PAGE LEVEL STYLES --> 

	<link href="/default/media/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>

	<link href="/default/media/css/daterangepicker.css" rel="stylesheet" type="text/css" />

	<link href="/default/media/css/fullcalendar.css" rel="stylesheet" type="text/css"/>

	<link href="/default/media/css/jqvmap.css" rel="stylesheet" type="text/css" media="screen"/>

	<link href="/default/media/css/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>

	<!-- END PAGE LEVEL STYLES -->

	<link rel="shortcut icon" href="/default/media/image/favicon.ico" />

</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="page-header-fixed">

	<!-- BEGIN HEADER -->

	<div class="header navbar navbar-inverse navbar-fixed-top">

		<!-- BEGIN TOP NAVIGATION BAR -->

		<div class="navbar-inner">

			<div class="container-fluid">

				<!-- BEGIN LOGO -->

				<a class="brand" href="/default/index.php">

				<img src="/default/media/image/logo.png" alt="logo"/>

				</a>

				<!-- END LOGO -->

				<!-- BEGIN RESPONSIVE MENU TOGGLER -->

				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">

				<img src="/default/media/image/menu-toggler.png" alt="" />

				</a>          

				<!-- END RESPONSIVE MENU TOGGLER -->            

				<!-- BEGIN TOP NAVIGATION MENU -->              

				<ul class="nav pull-right">

					<!-- BEGIN NOTIFICATION DROPDOWN -->   

					

					<!-- END NOTIFICATION DROPDOWN -->

					<!-- BEGIN INBOX DROPDOWN -->

					

					<!-- END INBOX DROPDOWN -->

					<!-- BEGIN TODO DROPDOWN -->

					

					<!-- END TODO DROPDOWN -->

					<!-- BEGIN USER LOGIN DROPDOWN -->

					<li class="dropdown user">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<img alt="" src="/default/media/image/avatar1_small.jpg" />

						<span class="username"><?php echo $_SESSION['name']; ?></span>

						<i class="icon-angle-down"></i>

						</a>

						<ul class="dropdown-menu">

							<li><a href="index.php?/quit"><i class="icon-key"></i> Log Out</a></li>

						</ul>

					</li>

					<!-- END USER LOGIN DROPDOWN -->

				</ul>

				<!-- END TOP NAVIGATION MENU --> 

			</div>

		</div>

		<!-- END TOP NAVIGATION BAR -->

	</div>

	<!-- END HEADER -->
    <a href="http://www.hrbeu.edu.cn/" title="HEU~upupup" target="_blank">HEU-calling</a>

	<!-- BEGIN CONTAINER -->

	<div class="page-container">

		<!-- BEGIN SIDEBAR -->

		<div class="page-sidebar nav-collapse collapse">

			<!-- BEGIN SIDEBAR MENU -->        

			<ul class="page-sidebar-menu">

				<li>

					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

					<div class="sidebar-toggler hidden-phone"></div>

					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

				</li>

				<li>

					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->

					<form class="sidebar-search">

						<div class="input-box">

							<a href="javascript:;" class="remove"></a>

						</div>

					</form>

					<!-- END RESPONSIVE QUICK SEARCH FORM -->

				</li>

				<li class="start active ">

					<a href="index.php?/user">

					<i class="icon-home"></i> 

					<span class="title">总览表</span>

					<span class="selected"></span>

					</a>

				</li>


				<li class="">

					<a href="javascript:;">

					<i class="icon-cogs"></i> 

					<span class="title">发起点名</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="index.php?/callprepare">

							课堂点名</a>

						</li>

						<li >

							<a href="index.php?/dormcallprepare">

							点名查寝</a>

						</li>

					</ul>

				</li>

				<li class="">

					<a href="javascript:;">

					<i class="icon-bookmark-empty"></i> 

					<span class="title">查看历史记录</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="index.php?/recordbycourse">

							按课程查看</a>

						</li>

						<li >

							<a href="index.php?/showrecordbydate">

							按时间查看</a>

						</li>

						

					</ul>

				</li>

				<li class="">

					<a href="javascript:;">

					<i class="icon-table"></i> 

					<span class="title">我的课程</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="index.php?/getcourse">

							查看课程</a>

						</li>

						<li >

							<a href="index.php?/todo">

							添加课程</a>

						</li>

					</ul>

				</li>

				


						<li >

							<a href="index.php?/todo">
							<i class="icon-cogs"></i>

							发送消息</a>

						</li>

						

						<li >

							<a href="index.php?/quit">

							<i class="icon-comments"></i>

							退出登录</a>

						</li>

						

			</ul>

			<!-- END SIDEBAR MENU -->

		</div>

		<!-- END SIDEBAR -->

		<!-- BEGIN PAGE -->

		<div class="page-content">

			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<div id="portlet-config" class="modal hide">

				<div class="modal-header">

					<button data-dismiss="modal" class="close" type="button"></button>

					<h3>Widget Settings</h3>

				</div>

				<div class="modal-body">

					Widget settings form goes here

				</div>

			</div>

			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<!-- BEGIN PAGE CONTAINER-->

			<div class="container-fluid">

				<!-- BEGIN PAGE HEADER-->

				<div class="row-fluid">

					<div class="span12">

						<!-- BEGIN STYLE CUSTOMIZER -->

						<div class="color-panel hidden-phone">

							<div class="color-mode-icons icon-color"></div>

							<div class="color-mode-icons icon-color-close"></div>

							<div class="color-mode">

								<p>THEME COLOR</p>

								<ul class="inline">

									<li class="color-black current color-default" data-style="default"></li>

									<li class="color-blue" data-style="blue"></li>

									<li class="color-brown" data-style="brown"></li>

									<li class="color-purple" data-style="purple"></li>

									<li class="color-grey" data-style="grey"></li>

									<li class="color-white color-light" data-style="light"></li>

								</ul>

								<label>

									<span>Layout</span>

									<select class="layout-option m-wrap small">

										<option value="fluid" selected>Fluid</option>

										<option value="boxed">Boxed</option>

									</select>

								</label>

								<label>

									<span>Header</span>

									<select class="header-option m-wrap small">

										<option value="fixed" selected>Fixed</option>

										<option value="default">Default</option>

									</select>

								</label>

								<label>

									<span>Sidebar</span>

									<select class="sidebar-option m-wrap small">

										<option value="fixed">Fixed</option>

										<option value="default" selected>Default</option>

									</select>

								</label>

								<label>

									<span>Footer</span>

									<select class="footer-option m-wrap small">

										<option value="fixed">Fixed</option>

										<option value="default" selected>Default</option>

									</select>

								</label>

							</div>

						</div>

						<!-- END BEGIN STYLE CUSTOMIZER -->    

						<!-- BEGIN PAGE TITLE & BREADCRUMB-->

						<h3 class="page-title">

							总览表 <small>简要浏览您的课程等信息</small>

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="index.html">首页</a> 

								<i class="icon-angle-right"></i>

							</li>

							<li><a href="#">总览表</a></li>

							<li class="pull-right no-text-shadow">

								<div id="dashboard-report-range" class="dashboard-date-range tooltips no-tooltip-on-touch-device responsive" data-tablet="" data-desktop="tooltips" data-placement="top" data-original-title="Change dashboard date range">

									<i class="icon-calendar"></i>

									<span></span>

									<i class="icon-angle-down"></i>

								</div>

							</li>

						</ul>

						<!-- END PAGE TITLE & BREADCRUMB-->

					</div>

				</div>

				<!-- END PAGE HEADER-->

				<div id="dashboard">

					<!-- BEGIN DASHBOARD STATS -->

					<div class="row-fluid">

						<div class="span3 responsive" data-tablet="span6" data-desktop="span3">

							<div class="dashboard-stat blue">

								<div class="visual">

									<i class="icon-comments"></i>

								</div>

								<div class="details">

									<div class="number">

										<?php
											$bmobObj_course = new BmobObject("Course");
											$objectId = $_SESSION['objectId'];
											$res=$bmobObj_course->get("",array('where={"userID":"' .$objectId .'"}','limit=0','count=1'));
											echo "$res->count";
										?>

									</div>

									<div class="desc">                           

										课程总数
										
									</div>

								</div>

								<a class="more" href="#">

								View more <i class="m-icon-swapright m-icon-white"></i>

								</a>   
								
								
							</div>

						</div>

						<div class="span3 responsive" data-tablet="span6" data-desktop="span3">

							<div class="dashboard-stat green">

								<div class="visual">

									<i class="icon-globe"></i>

								</div>

								<div class="details">

									<div class="number">
									
									<?php
											$bmobObj_dorm = new BmobObject("Dorm");
											$objectId = $_SESSION['objectId'];
											$res=$bmobObj_dorm->get("",array('where={"userID":"' .$objectId .'"}','limit=0','count=1'));
											echo "$res->count";
										?>
									
									</div>

									<div class="desc">负责公寓数</div>

								</div>								             

								<a class="more" href="#">

								View more <i class="m-icon-swapright m-icon-white"></i>

								</a>   
								
							</div>

						</div>


						<div class="span3 responsive" data-tablet="span6" data-desktop="span3">

							<div class="dashboard-stat yellow">

								<div class="visual">

									<i class="icon-bar-chart"></i>

								</div>

								<div class="details">

									<div class="number">
									
									<?php
											$bmobObj_call = new BmobObject("Record");
											$username = $_SESSION['username'];
											$res=$bmobObj_call->get("",array('where={"teacherName":"' .$username .'"}','limit=0','count=1'));
											echo "$res->count";
										?>
									
									</div>

									<div class="desc">发起点名数</div>

								</div>

								<a class="more" href="#">

								View more <i class="m-icon-swapright m-icon-white"></i>

								</a>                 

							</div>

						</div>

					</div>

					<!-- END DASHBOARD STATS -->

					<div class="clearfix"></div>

					
					<div class="clearfix"></div>

					
					<div class="clearfix"></div>


					<div class="clearfix"></div>

					<div class="row-fluid">

						<div class="span6">

							<!-- BEGIN PORTLET-->

							<div class="portlet box blue calendar">

								<div class="portlet-title">

									<div class="caption"><i class="icon-calendar"></i>便捷日历</div>

								</div>

								<div class="portlet-body light-grey">

									<div id="calendar">

									</div>

								</div>

							</div>

							<!-- END PORTLET-->

						</div>

						

					</div>

				</div>

			</div>

			<!-- END PAGE CONTAINER-->    

		</div>

		<!-- END PAGE -->

	</div>

	<!-- END CONTAINER -->

	<!-- BEGIN FOOTER -->

	<div class="footer">

		<div class="footer-inner">

			2016 &copy; based on Bootstrap. Designed by JohnsonYe_cn,HEU.

		</div>

		<div class="footer-tools">

			<span class="go-top">

			<i class="icon-angle-up"></i>

			</span>

		</div>

	</div>

	<!-- END FOOTER -->

	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

	<!-- BEGIN CORE PLUGINS -->

	<script src="/default/media/js/jquery-1.10.1.min.js" type="text/javascript"></script>

	<script src="/default/media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

	<script src="/default/media/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      

	<script src="/default/media/js/bootstrap.min.js" type="text/javascript"></script>

	<!--[if lt IE 9]>

	<script src="media/js/excanvas.min.js"></script>

	<script src="media/js/respond.min.js"></script>  

	<![endif]-->   

	<script src="/default/media/js/jquery.slimscroll.min.js" type="text/javascript"></script>

	<script src="/default/media/js/jquery.blockui.min.js" type="text/javascript"></script>  

	<script src="/default/media/js/jquery.cookie.min.js" type="text/javascript"></script>

	<script src="/default/media/js/jquery.uniform.min.js" type="text/javascript" ></script>

	<!-- END CORE PLUGINS -->

	<!-- BEGIN PAGE LEVEL PLUGINS -->

	<script src="/default/media/js/jquery.vmap.js" type="text/javascript"></script>   

	<script src="/default/media/js/jquery.vmap.russia.js" type="text/javascript"></script>

	<script src="/default/media/js/jquery.vmap.world.js" type="text/javascript"></script>

	<script src="/default/media/js/jquery.vmap.europe.js" type="text/javascript"></script>

	<script src="/default/media/js/jquery.vmap.germany.js" type="text/javascript"></script>

	<script src="/default/media/js/jquery.vmap.usa.js" type="text/javascript"></script>

	<script src="/default/media/js/jquery.vmap.sampledata.js" type="text/javascript"></script>  

	<script src="/default/media/js/jquery.flot.js" type="text/javascript"></script>

	<script src="/default/media/js/jquery.flot.resize.js" type="text/javascript"></script>

	<script src="/default/media/js/jquery.pulsate.min.js" type="text/javascript"></script>

	<script src="/default/media/js/date.js" type="text/javascript"></script>

	<script src="/default/media/js/daterangepicker.js" type="text/javascript"></script>     

	<script src="/default/media/js/jquery.gritter.js" type="text/javascript"></script>

	<script src="/default/media/js/fullcalendar.min.js" type="text/javascript"></script>

	<script src="/default/media/js/jquery.easy-pie-chart.js" type="text/javascript"></script>

	<script src="/default/media/js/jquery.sparkline.min.js" type="text/javascript"></script>  

	<!-- END PAGE LEVEL PLUGINS -->

	<!-- BEGIN PAGE LEVEL SCRIPTS -->

	<script src="/default/media/js/app.js" type="text/javascript"></script>

	<script src="/default/media/js/index.js" type="text/javascript"></script>        

	<!-- END PAGE LEVEL SCRIPTS -->  

	<script>

		jQuery(document).ready(function() {    

		   App.init(); // initlayout and core plugins

		   Index.init();

		   Index.initJQVMAP(); // init index page's custom scripts

		   Index.initCalendar(); // init index page's custom scripts


		   Index.initMiniCharts();

		   Index.initDashboardDaterange();

		   Index.initIntro();

		});

	</script>

	<!-- END JAVASCRIPTS -->

</body>

<!-- END BODY -->

</html>