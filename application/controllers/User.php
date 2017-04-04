<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(E_ALL^E_NOTICE^E_WARNING);

class User extends CI_Controller {


	public function index()
	{
		if($_SESSION['objectId'] == null){
			$this->load->view('login');
		}else{$this->load->view('user_main');}
		
	}
}
