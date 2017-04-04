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
	
	session_start(); 
	?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Loading</title>
<style type="text/css">

::selection { background-color: #E13300; color: white; }
::-moz-selection { background-color: #E13300; color: white; }

body {
	background-color: #fff;
	margin: 40px;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #444;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 19px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

#container {
	margin: 10px;
	border: 1px solid #D0D0D0;
	box-shadow: 0 0 8px #D0D0D0;
}

p {
	margin: 12px 15px 12px 15px;
}
</style>
</head>
<body>
	<?php
	error_reporting(E_ALL^E_NOTICE^E_WARNING);
	
	$username = $_POST[username];
	$password = $_POST[password];
	if($_POST[remember] == 9){
		setcookie("username", $username, time()+ 3600*24*7);
		setcookie("password", $password, time()+ 3600*24*7);
	}
	try{
		$bmobUser = new BmobUser();
		$res = $bmobUser->login($username,$password); //用户登录, 第一个参数为用户名,第二个参数为密码
	}catch (Exception $e) {
		//重定向浏览器 
		$location = "/default/";
		echo "<script language=\"JavaScript\">alert(\"用户名或密码错误\");
		window.location.href=\"$location\";</script>"; 
	}
	
	$_SESSION['objectId'] = $res->objectId;
	$_SESSION['username'] = $res->username;
	$_SESSION['name'] 	  = $res->name;
	$type = $res->type;
	
	echo "<div id=\"container\">
		<h1>登录成功,$res->username</h1>
		<p>请稍等，正在载入相关文件。</p></div>";
		
	if($type == 1){
		$location = "index.php?/student";
		echo "<script language=\"JavaScript\">window.location.href=\"$location\";</script>";
	}else{
		$location = "index.php?/user";
		echo "<script language=\"JavaScript\">window.location.href=\"$location\";</script>";
	}
?>
	
</body>
</html>