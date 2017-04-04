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
	
	defined('BASEPATH') OR exit('No direct script access allowed');

class Callhold extends CI_Controller {
	
	private $callholdId ;
	
	public function index()
	{
		$userId = $_SESSION['objectId'];
		$courseId = $_POST['courseId'];
		$testCode = $_POST['testCode'];
		$this->load->view($courseId.$testCode);
		$bmobObj = new BmobObject("CallHold");
		$res=$bmobObj->create(array("testCode"=>$testCode,"userId"=>$userId,"courseId"=>$courseId)); //添加对象
		$this->callholdId = $res->objectId;		
	}
	
	public function getCallholdId(){
		return $this->callholdId;
	}
	
}
