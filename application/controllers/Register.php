<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_RootController {

	public function index()
	{
		$this->_initialPage();
		$this->load->view('register_view');
		$this->_footerPage();
	}

}
