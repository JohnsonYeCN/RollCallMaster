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

class Recordbycourse extends CI_Controller {


	public function index()
	{
		if($_SESSION['objectId'] == null){
			$this->load->view('login');
		}else{$this->load->view('record_by_course');}
		
	}
	
	public function getcourses(){
		$objectId = $_SESSION['objectId'];
		$bmobObj_course = new BmobObject("Course");
		$res=$bmobObj_course->get("",array('where={"userID":"' .$objectId .'"}','limit=100'));
		return $res;
	}
	
	public function getrecordnum($objid){
		$bmobObj_record = new BmobObject("Record");
		$res=$bmobObj_record->get("",array('where={"courseID":"' .$objid .'"}','limit=0','count=1'));
		return $res->count;
	}
	
}
