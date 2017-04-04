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
	define("STATE_STUDENT_PRESENT", "0");
	define("STATE_STUDENT_ABSENT", "1");
	
	
	error_reporting(E_ALL^E_NOTICE^E_WARNING);
	
	defined('BASEPATH') OR exit('No direct script access allowed');

class Callresult extends CI_Controller {
	
	
	var $courseId = "undefined";
	var $holdId = "undefined";
	public $latitude;
	public $longitude;
	public $whole_students;
	public $present_students;
	public $resultlist;
	
	 	
	public function toString(){
		return "信息：".$this->courseId.",".$this->holdId.$this->uri->segment(5).$this->uri->segment(6)."\n";
	}

	public function index()
	{
		if($_SESSION['objectId'] == null){
			$this->load->view('login');
		}else{			
			//$this->initResult();			
			//$this->load->view('call_tempresult');
			$this->load->view('call_result');
		}
		
	}
	
	/**
	*	initResult()
	*	
	*
	**/
	public function initResult(){
		
		$this->getParams();
		
	}
	
	
	public function getParams()
	{
		//第一个是课程ID，第二个是CallholdID,在后面俩是经纬度
		//没有只取CallholdID是因为查表耗时，在之前callprepare控制器中已经完成，直接用传参方式给过来
		//但这设计的有问题，到后来其实都一样    懒得改了。
		
		
		
		$this->courseId = $this->uri->segment(3);
		$this->holdId = $this->uri->segment(4);
		$this->longitude = $this->uri->segment(5);
		$this->latitude = $this->uri->segment(6);
	}
	
	/**
	*	getPresent
	*	获取当前已到课学生名单
	*
	**/
	public function getPresents(){
		$bmobObj = new BmobObject("RecordDetailItem");
		$res=$bmobObj->get("",array('where={"holdId":"'.$this->holdId.'"}','limit=200'));
		
#		$thumbUrl
#		$stu_no
#		$stu_name
#		$longitude
#		$latitude
#		获取失败  http://1833.img.pp.sohu.com.cn/images/blog/2009/5/26/15/10/12227c5057cg215.jpg
		return $res->results;

	}
	
	/**
	*	getStudents
	*	获取全部学生名单
	*
	**/
	public function getStudents(){
		$bmobObj = new BmobObject("Course");
		//用这种方式调返回的是对象不是Array
		$res=$bmobObj->get($this->courseId);
		$students_json = $res->student;
		$students = (Array)json_decode($students_json);
		return $students;
	}
	
	
	/**
	*  @desc 根据两点间的经纬度计算距离
	*  @param float $lat 纬度值
	*  @param float $lng 经度值
	*/
 public function getDistance($lat1, $lng1)
 {
	 
	 $lat2 = $this->latitude;
	 $lng2 = $this->longitude;
	  
     $earthRadius = 6367000; //approximate radius of earth in meters

     /*
       Convert these degrees to radians
       to work with the formula
     */

     $lat1 = ($lat1 * pi() ) / 180;
     $lng1 = ($lng1 * pi() ) / 180;

     $lat2 = ($lat2 * pi() ) / 180;
     $lng2 = ($lng2 * pi() ) / 180;

     /*
       Using the
       Haversine formula

       http://en.wikipedia.org/wiki/Haversine_formula

       calculate the distance
     */

     $calcLongitude = $lng2 - $lng1;
     $calcLatitude = $lat2 - $lat1;
     $stepOne = pow(sin($calcLatitude / 2), 2) + cos($lat1) * cos($lat2) * pow(sin($calcLongitude / 2), 2);  $stepTwo = 2 * asin(min(1, sqrt($stepOne)));
     $calculatedDistance = $earthRadius * $stepTwo;

     return round($calculatedDistance);
 }
	
	//生成返回给view的学生列表
	//params from RecordDetailItem: thumbUrl,stu_no,stu_name,longitude,latitude,holdId,code
	//params for RecordItem table: fileUrl,latitude,longitude,praise,recordId,stu_name,stu_num,thumbUrl,courseName,status,remark
	public function buildResult(){
		$this->whole_students = $this->getStudents();
		$this->present_students = $this->getPresents();
		$this->resultlist[] = 1;
		$i = 0;
		foreach($this->whole_students as $value){
			//case:学生到课，构建相关信息
			//仍用数组，不用生成器。因为这里内存用量尚可接受，直接用数组方便后续用户对某条数据添加信息
			if($this->existInPresent($value->number)){
				//去present_students大数组里拿到特定学号对应的学生
				$temp_student = $this->getSpecificStudent($value->number,STATE_STUDENT_PRESENT);
				$this->resultlist[$i++] = array("fileUrl"=>$temp_student->thumbUrl,"thumbUrl"=>$temp_student->thumbUrl,"stu_num"=>$temp_student->stu_no,"stu_name"=>$temp_student->stu_name,"latitude"=>$temp_student->latitude,"longitude"=>$temp_student->longitude,"status"=>"0","praise"=>"0","recordId"=>"","remark"=>"");
				unset($temp_student);
			}else {
				$temp_student = $this->getSpecificStudent($value->number,STATE_STUDENT_ABSENT);
				$this->resultlist[$i++]  = array("fileUrl"=>"failed.jpg","thumbUrl"=>"failed.jpg","stu_num"=>$temp_student->number,"stu_name"=>$temp_student->name,"status"=>"1","praise"=>"","recordId"=>"","remark"=>"");
				unset($temp_student);
			}
		}
		setcookie("result",json_encode((Array)$this->resultlist));
		return $this->resultlist;		
	}
	
	//学生名单里的某一名学生是否已经存在于出勤学生名单
	public function existInPresent($stu_no){
		foreach($this->present_students as $val){
			if($stu_no == $val->stu_no)
				return true;
		}
		return false;
	}
	
	public function getSpecificStudent($stu_no,$state){
		switch($state){
			case STATE_STUDENT_PRESENT:
				foreach($this->present_students as $val){
					if($stu_no == $val->stu_no)
						return $val;
				}
				break;
			case STATE_STUDENT_ABSENT:
				foreach($this->whole_students as $val){
					if($stu_no == $val->number)
						return $val;
				}
				break;
		}
		
		return NULL;
	}
	
	
	
	
	
	/**	
	*	更新数据，直接更新数组就可以
	*
	*	
	**/
	public function detailsUpdate(){
		
		
		$get_stu_no = $this->uri->segment(3);
		$get_stu_status = $this->uri->segment(4);
		$get_stu_remark = $this->uri->segment(5);
		$get_stu_praise = $this->uri->segment(6);
		
		
		//从COOKIES里取出待存储数组，修改完原样存回去
		$mresultlist = $_COOKIE["result"];
		
		$tempresultlist = (Array)json_decode($mresultlist);
		
		foreach($tempresultlist as $val){
			if($get_stu_no == $val->stu_num){						
				$val->status = $get_stu_status;
				$val->praise = $get_stu_praise;
				$val->remark = $get_stu_remark;
			}
		}
		setcookie("result",json_encode($tempresultlist));		
	
	}
	
	
	/**	
	*	更新数据，直接更新数组就可以
	*
	*	展示给用户：总人数、到课人数、旷课人数、请假人数
	*	用户在dialog中确认后执行存数据库操作
	**/
	public function saveprepare(){
		$total = 0;
		$status0 = 0;
		$status1 = 0;
		$status2 = 0;
		
		$mresultlist = $_COOKIE["result"];
		
		$tempresultlist = (Array)json_decode($mresultlist);
		
		foreach($tempresultlist as $val){
			switch($val->status){
				case 0:$total++;$status0++;break;
				case 1:$total++;$status1++;break;
				case 2:$total++;$status2++;break;
			}				
		}
		
		echo "总人数：".$total."\n";
		echo "<br />";
		echo "到&nbsp;&nbsp;&nbsp;&nbsp;课：".$status0."\n";
		echo "<br />";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;缺&nbsp;&nbsp;&nbsp;&nbsp;席：".$status1."\n";
		echo "<br />";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;请&nbsp;&nbsp;&nbsp;&nbsp;假：".$status2."\n";
		echo "<br />";
		echo "<br />";
		echo "点击确认将上传数据。";
	}
	
	
	
	/**	
	*	更新数据到数据库
	*
	*	注意：先更新到Result表，再更新到ResultItem表
	*	
	**/
	public function saveresult(){		
		$cou_id = $this->uri->segment(3);
		//取到COOKIES里存的当次课程点名记录
		$mresultlist = $_COOKIE["result"];		
		$tempresultlist = (Array)json_decode($mresultlist);
		//遍历课程计算各种情况的总人数
		$total = 0;
		$status0 = 0;
		$status1 = 0;
		$status2 = 0;		
		foreach($tempresultlist as $val){
			switch($val->status){
				case 0:$total++;$status0++;break;
				case 1:$total++;$status1++;break;
				case 2:$total++;$status2++;break;
			}				
		}
		//params:courseClass	date	courseName	courseID	cstatu0		cstatu1		cstatu2 	total	teacherName		time
		$bmobObj_record = new BmobObject("Record");
		$bmobObj_course = new BmobObject("Course");
		$bmobUser = new BmobUser();
		$bmobObj_recorditem = new BmobObject("RecordItem");
		$res_course=$bmobObj_course->get($cou_id);
		$user_no = $bmobUser->get($_SESSION['objectId'])->username;
		$courseName = $res_course->course_name;
		$courseID = $cou_id;
		$courseClass = $res_course->course_class;
		$teacherName = $res_course->teacher_name;
		$time = date("m月d日 h:i",time());
		$date = array(
				"__type"=>"Date",
				"iso"=>date("Y-m-d h:i:s", time())
			);
		try{
			$result_add_res = $bmobObj_record->create(array("cstatu0"=>$status0,"cstatu1"=>$status1,"cstatu2"=>$status2,"total"=>$total,"teacherName"=>$user_no,"courseClass"=>$courseClass,"time"=>$time,"date"=>$date,"courseName"=>$courseName,"courseID"=>$courseID)); 
			//存result表到此写完，下一步存resultitem
			foreach($tempresultlist as $val){
				$array = $this->object2array($val);
				$array["status"] =  (int)$array["status"];
				$array["praise"] =  (int)$array["praise"];
				$array["recordId"] = $result_add_res->objectId;
				$resultitem_add_res = $bmobObj_recorditem->create($array);
			}
		}catch(Exception $e){
			echo 'Message: ' .$e->getMessage();
		}
		echo "保存成功";
		try{
			$this->load->helper('url');
			redirect('/showrecordbydate/index/', 'refresh');
		}catch(Exception $e){
			echo 'Message: ' .$e->getMessage();
		}
	}
	
	public function object2array($object) {
	  if (is_object($object)) {
		foreach ($object as $key => $value) {
		  $array[$key] = $value;
		}
	  }
	  else {
		$array = $object;
	  }
	  return $array;
	}
	
	
}
	

