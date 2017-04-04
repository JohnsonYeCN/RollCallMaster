<?php
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

	
	
	<link rel="stylesheet" href="/default/media/css/cd_animate.css" rel="stylesheet" type="text/css"/>
	
	<link rel="stylesheet" href="/default/media/css/cd_style.css" rel="stylesheet" type="text/css"/>
	
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

	<link rel="stylesheet" type="text/css" href="media/css/select2_metro.css" />

	<link rel="stylesheet" href="media/css/DT_bootstrap.css" />

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

				<li >

					<a href="index.php?/user">

					<i class="icon-home"></i> 

					<span class="title">课程列表</span>


					</a>

				</li>


				<li  class="start active ">

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

				<li>

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

							<a href="form_samples.html">

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

							点名 <small>发起一次点名考勤</small>

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="index.html">首页</a> 

								<i class="icon-angle-right"></i>

							</li>

						
									
							<li>
							<a href="#">发起点名</a>
							<i class="icon-angle-right"></i>
							</li>
							
							
							
							<li><a href="#">课堂点名</a></li>

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

				<div class="row-fluid">

					<div class="span12">

							<!-- BEGIN PORTLET-->
							<!-- 此处显示课程列表-->
						<!-- BEGIN EXAMPLE TABLE PORTLET-->

						<!-- BEGIN INLINE NOTIFICATIONS PORTLET-->

						<div class="row-fluid">

						<div class="span12">

							<!-- BEGIN PORTLET-->
							<!-- 此处显示课程列表-->
						<!-- BEGIN EXAMPLE TABLE PORTLET-->

						<div class="portlet box blue">

							<div class="portlet-title">

								<div class="caption"><i class="icon-globe"></i>课程列表</div>

								<div class="tools">

									<a href="javascript:;" class="collapse"></a>

									<a href="#portlet-config" data-toggle="modal" class="config"></a>

									<a href="javascript:;" class="reload"></a>

									<a href="javascript:;" class="remove"></a>

								</div>

							</div>

							<div class="portlet-body">

								<div class="clearfix">

								</div>

								<table class="table table-striped table-bordered table-hover" >
								<?php
									$callresult = new callresult();
									$callresult -> getParams();
									$res = $callresult->buildresult();									
								?>

									<thead>
									
										


										<tr>


												<th> </th>
												<th>学号</th>

												<th>姓名</th>
												
												<th>距离</th>

												<th>状态</th>

												<th>加分</th>

												<th>备注</th>

												

										</tr>

									</thead>

									
									<tbody>
									
											<?php
											foreach($res as $value){
											?>
												<tr>
													<td style="text-align:center;vertical-align: middle;width:40px;">
														<img style="width:35px;height:35px;" src="<?php echo $value['thumbUrl'];?>"/>
													</td>
												
												  <td style="text-align:center;vertical-align: middle;width:80px;">
														<?php echo $value['stu_num'];?>
												  </td>
												  <td style="text-align:center;vertical-align: middle;width:40px;">
														<?php echo $value['stu_name'];?>
												  </td>
												  <td style="text-align:center;vertical-align: middle;width:40px;">
														<?php
														if($value->status == 0){
															$lat = $value['latitude'];
															$lon = $value['longitude'];
															echo $callresult->getDistance($lat, $lon) . "米";		
														}															
														?>
												  </td>
												  <td style="text-align:center;vertical-align: middle;width:70px;">
													  <select id="select_status_<?php echo $value['stu_num'];?>" style="width:70px;">
														<?php
															switch($value['status']){
																case 0:
																	echo '<option value="0" selected>到课</option>
																			<option value="1">缺席</option>
																			<option value="2">请假</option>';
																	break;
																case 1:
																	echo '<option value="0" >到课</option>
																			<option value="1" selected>缺席</option>
																			<option value="2">请假</option>';
																	break;
															}
														?>
													  </select>
												  </td>
												  <td style="text-align:center;vertical-align: middle;width:60px;">
													  <select id="select_praise_<?php echo $value['stu_num'];?>" style="width:40px;">
													  <option value="0" selected>0</option>
														<option value="5">5</option>
														<option value="10">10</option>														
													  </select>
												  </td>
												  <td style="text-align:center;vertical-align: middle;width:100px;">
													  <input type="text" id="edt_remark_<?php echo $value['stu_num'];?>" style="width:80px">											
												  </td>

												</tr>
											
											<?php
											  }
											?>

											<tr>
												<td style="text-align:center;width:35px;height:35px;vertical-align: middle;">
													<img src="test.jpg"/>
												</td>
											
											  <td style="text-align:center;vertical-align: middle;">
													123
											  </td>
											  <td  align="center">
													姓名
											  </td>
											  <td  align="center">
													10米
											  </td>
											  <td align="center">
												  到课
											  </td>
											  <td align="center">
												  10
											  </td>
											  <td align="center">
												  saddas												
											  </td>

											</tr>

											<tr>
												<td style="text-align:center;width:35px;height:35px;vertical-align: middle;">
													<img src="test.jpg"/>
												</td>
											  <td align="center">
													123
											  </td>
											  <td  align="center">
													姓名
											  </td>
											  <td  align="center">
													10米
											  </td>
											  <td align="center">
												  到课
											  </td>
											  <td align="center">
												  10
											  </td>
											  <td align="center">
												  saddas												
											  </td>

											</tr>
										

									</tbody>

								</table>

							</div>

						</div>
							
							

						<!-- END INLINE NOTIFICATIONS PORTLET-->


						
				
				
					
				
				
		

						<!-- END EXAMPLE TABLE PORTLET-->


							

							<!-- END PORTLET-->

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

			2016 &copy; based on Bootstrap. Designed by JohnsonYe_cn,HEU.<?php $callresult->test()[0]->name;?>

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

	<script src="media/js/jquery-1.10.1.min.js" type="text/javascript"></script>

	<script src="media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

	<script src="media/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      

	<script src="media/js/bootstrap.min.js" type="text/javascript"></script>

	<!--[if lt IE 9]>

	<script src="media/js/excanvas.min.js"></script>

	<script src="media/js/respond.min.js"></script>  

	<![endif]-->   

	<script src="media/js/jquery.slimscroll.min.js" type="text/javascript"></script>

	<script src="media/js/jquery.blockui.min.js" type="text/javascript"></script>  

	<script src="media/js/jquery.cookie.min.js" type="text/javascript"></script>

	<script src="media/js/jquery.uniform.min.js" type="text/javascript" ></script>
	
	

	
	
</script>

	<!-- END CORE PLUGINS -->

	<!-- BEGIN PAGE LEVEL PLUGINS -->

	<script type="text/javascript" src="media/js/select2.min.js"></script>

	<script type="text/javascript" src="media/js/jquery.dataTables.js"></script>

	<script type="text/javascript" src="media/js/DT_bootstrap.js"></script>

	<!-- END PAGE LEVEL PLUGINS -->

	<!-- BEGIN PAGE LEVEL SCRIPTS -->

	<script src="media/js/app.js"></script>

	<script src="media/js/table-managed-tempresult.js"></script>     
	
	<script src="media/js/callhold.js"></script>   

	<script>

		jQuery(document).ready(function() {       

		   App.init();

		   TableManaged.init();

		});

	</script>

	

	
</body>

<!-- END BODY -->

</html>