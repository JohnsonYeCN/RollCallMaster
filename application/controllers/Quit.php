<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(E_ALL^E_NOTICE^E_WARNING);

class Quit extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		unset($_SESSION['objectId']);
		unset($_SESSION['username']);
		unset($_SESSION['name']);
		$this->load->view('login');
	}
}
