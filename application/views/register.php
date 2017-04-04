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
	?>
<?php
	error_reporting(E_ALL^E_NOTICE);
	
	$user = $_POST[user];
	$password = $_POST[passwd];
	$name = $_POST[realname];
	$email = $_POST[email];
	$type = (int)$_POST[usertype];
	try{
		$bmobUser = new BmobUser();
		$res = $bmobUser->register(array( "username"=>$user, "password"=>$password, "name"=>$name, "email"=>$email, "type"=>$type));
	}catch (Exception $e) {
		//重定向浏览器 
		$location = "/default/";
		echo "<script language=\"JavaScript\">alert(\"注册失败\");
		window.location.href=\"$location\";</script>"; 
	}
		$location ="/ci.com/";
		echo "<script language=\"JavaScript\">alert(\"注册成功,".$name."\\n请及时通过邮件验证\");
		window.location.href=\"$location\";</script>"; 
?>