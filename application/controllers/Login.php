<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(E_ALL^E_NOTICE^E_WARNING);

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('main');
	}
	
}
