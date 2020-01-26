<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_RootController {

	public function index()
	{
		$this->_initialPage();
		$this->load->view('welcome_message');
		$this->_footerPage();
	}
	
}
