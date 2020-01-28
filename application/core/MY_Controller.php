<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );

class MY_RootController extends CI_Controller {
	
  public function __construct() {
	parent::__construct();
	$this->lang->load('general_messages','english');
  }

  public function _initialPage() {
		$this->load->view('init/initial');
		$this->load->view('init/header');
	}
		
	public function _footerPage()
	{
		$this->load->view('init/footer');
	}
	
}
