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

class Callprepare extends CI_Controller {
	
	public $checkcode = "0000";
	public $callholdId ;


	public function index()
	{
		if($_SESSION['objectId'] == null){
			$this->load->view('login');
		}else{$this->load->view('call_prepare');}
		
	}
	
	public function getcourses(){
		$objectId = $_SESSION['objectId'];
		$bmobObj_course = new BmobObject("Course");
		$res=$bmobObj_course->get("",array('where={"userID":"' .$objectId .'"}','limit=100'));
		return $res;
	}
	
	public function getRandstr($len){ 
		$chars = array( 
			"a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k",  
			"l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v",  
			"w", "x", "y", "z", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9" 
		); 
		$charsLen = count($chars) - 1; 
		shuffle($chars);   
		$output = ""; 
		for ($i=0; $i<$len; $i++){ 
			$output .= $chars[mt_rand(0, $charsLen)]; 
		}  
		$this->checkcode = $output;
		return $output;  
	} 
	
	public function getCode(){
		return $this->checkcode;
	}
	
	public function callhold()
	{
		$userId = $_SESSION['objectId'];
		
		$testCode = $this->uri->segment(3);
		$courseId = $this->uri->segment(4);
		
#		$courseId = $_POST['courseId'];
		
#		$testCode = $_POST['testCode'];
		$bmobObj = new BmobObject("CallHold");
		$res=$bmobObj->create(array("testCode"=>$testCode,"userId"=>$userId,"courseId"=>$courseId)); //添加对象
		$this->callholdId = $res->objectId;	
		//返回AJAX请求的响应
		echo "$res->objectId";
	}
	
	public function getCallholdId(){
		return $this->callholdId;
	}
	
	public function showresult(){
		$this->load->view('call_tempresult');
	}
	
}
