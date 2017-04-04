<?php
	error_reporting(E_ALL^E_NOTICE^E_WARNING);
?>
<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="cn"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>点名系统</title>

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

	<link href="/default/media/css/login-soft.css" rel="stylesheet" type="text/css"/>

	<!-- END PAGE LEVEL STYLES -->

	<link rel="shortcut icon" href="/default/media/image/favicon.ico" />

</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="login">

	<!-- BEGIN LOGO -->

	<div class="logo">

		<img src="/default/media/image/logo-big.png" alt="" /> 

	</div>

	<!-- END LOGO -->

	<!-- BEGIN LOGIN -->

	<div class="content">

		<!-- BEGIN LOGIN FORM -->

		<form class="form-vertical login-form" action="index.php?/login" method="post">

			<h3 class="form-title" style="font-family:黑体">登录您的账号</h3>

			<div class="alert alert-error hide">

				<button class="close" data-dismiss="alert"></button>

				<span>Enter any username and password.</span>

			</div>

			<div class="control-group">

				<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->

				<label class="control-label visible-ie8 visible-ie9">用户名</label>

				<div class="controls">

					<div class="input-icon left">

						<i class="icon-user"></i>

						<input class="m-wrap placeholder-no-fix" type="text" placeholder="用户名" name="username"/>

					</div>

				</div>

			</div>

			<div class="control-group">

				<label class="control-label visible-ie8 visible-ie9">密码</label>

				<div class="controls">

					<div class="input-icon left">

						<i class="icon-lock"></i>

						<input class="m-wrap placeholder-no-fix" type="password" placeholder="密码" name="password"/>

					</div>

				</div>

			</div>

			<div class="form-actions">

				<label class="checkbox">

				<input type="checkbox" name="remember" value="9"/> 记住此账号

				</label>

				<button type="submit" class="btn blue pull-right">

				登录 <i class="m-icon-swapright m-icon-white"></i>

				</button>            

			</div>


			<div class="create-account">

				<p>

					尚未拥有对应的账户?&nbsp; 

					<a href="javascript:;" id="register-btn" class="pull-right">创建</a>

				</p>

			</div>

		</form>

		<!-- END LOGIN FORM -->        

		

		<!-- BEGIN REGISTRATION FORM -->

		<form id="registerformid" class="form-vertical register-form" action="index.php?/register" method="post" >

			<h3 class="" style="font-family:黑体;">注册</h3>

			<p>在下方输入您的详细信息:</p>
			
			<div class="control-group" align="center" >

				<label class="control-label visible-ie8 visible-ie9">用户类别</label>

				<div class="control-group">

					<div class="controls">

						<label class="radio">

							<input type="radio" name="usertype" value="1" checked /> 

							学生

						</label>

														

						<label class="radio">

							<input type="radio" name="usertype" value="0" />

							教师

						</label>  

						</div>

				</div>


			</div>

			<div class="control-group">

				<label class="control-label visible-ie8 visible-ie9">学号</label>

				<div class="controls">

					<div class="input-icon left">

						<i class="icon-tasks"></i>

						<input class="m-wrap placeholder-no-fix" type="text" placeholder="学号" name="user"/>

					</div>

				</div>

			</div>
			<div class="control-group">

				<label class="control-label visible-ie8 visible-ie9">姓名</label>

				<div class="controls">

					<div class="input-icon left">

						<i class="icon-user"></i>

						<input class="m-wrap placeholder-no-fix" type="text" placeholder="姓名" name="realname"/>

					</div>

				</div>

			</div>


			<div class="control-group">

				<label class="control-label visible-ie8 visible-ie9">密码</label>

				<div class="controls">

					<div class="input-icon left">

						<i class="icon-lock"></i>

						<input class="m-wrap placeholder-no-fix" type="password" id="register_password" placeholder="密码" name="passwd"/>

					</div>

				</div>

			</div>

			<div class="control-group">

				<label class="control-label visible-ie8 visible-ie9">确认密码</label>

				<div class="controls">

					<div class="input-icon left">

						<i class="icon-ok"></i>

						<input class="m-wrap placeholder-no-fix" type="password" placeholder="确认密码" name="rpassword"/>

					</div>

				</div>

			</div>

			<div class="control-group">

				<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->

				<label class="control-label visible-ie8 visible-ie9">Email</label>

				<div class="controls">

					<div class="input-icon left">

						<i class="icon-envelope"></i>

						<input class="m-wrap placeholder-no-fix" type="text" placeholder="Email" name="email"/>

					</div>

				</div>

			</div>

			<div class="control-group">

				<div class="controls">

					<label class="checkbox">

					<input type="checkbox" name="tnc"/> 我已阅读并同意 <a href="#">用户协议</a>

					</label>  

					<div id="register_tnc_error"></div>

				</div>

			</div>

			<div class="form-actions">

				<button id="register-back-btn" type="button" class="btn">

				<i class="m-icon-swapleft"></i>  返回

				</button>

				<button type="submit" id="register-submit-btn" class="btn blue pull-right">

				注册 <i class="m-icon-swapright m-icon-white"></i>

				</button>            

			</div>

		</form>

		<!-- END REGISTRATION FORM -->

	</div>

	<!-- END LOGIN -->

	<!-- BEGIN COPYRIGHT -->

	<div class="copyright">

		2013 &copy; Metronic - Admin Dashboard Template.

	</div>

	<!-- END COPYRIGHT -->

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

	<script src="/default/media/js/jquery.validate.min.js" type="text/javascript"></script>

	<script src="/default/media/js/jquery.backstretch.min.js" type="text/javascript"></script>

	<!-- END PAGE LEVEL PLUGINS -->

	<!-- BEGIN PAGE LEVEL SCRIPTS -->

	<script src="/default/media/js/app.js" type="text/javascript"></script>

	<script src="/default/media/js/login-soft.js" type="text/javascript"></script>      

	<!-- END PAGE LEVEL SCRIPTS --> 

	<script>

		jQuery(document).ready(function() {     

		  App.init();

		  Login.init();

		});

	</script>

	<!-- END JAVASCRIPTS -->
	

</body>

<!-- END BODY -->

</html>