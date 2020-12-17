<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if(!$this->session->userdata('logged_in')) {redirect('login','refresh');}//user harus login
		

	}

	public function index() {
		$data['judul']="Apps Invoice";
		$this->template->display('welcome_message',$data);
	}

}