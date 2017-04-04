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

class Dormcallprepare extends CI_Controller {


	public function index()
	{
		if($_SESSION['objectId'] == null){
			$this->load->view('login');
		}else{$this->load->view('dormcall_prepare');}
		
	}
	
	public function getcourses(){
		$objectId = $_SESSION['objectId'];
		$bmobObj_dorm = new BmobObject("Dorm");
		$res=$bmobObj_dorm->get("",array('where={"userID":"' .$objectId .'"}','limit=100'));
		return $res;
	}
	
	
}
