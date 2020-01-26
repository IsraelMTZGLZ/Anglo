<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_RootController {

	public function index()
	{
		$this->_initialPage();
		$this->load->view('home_view');
		$this->_footerPage();
	}

}
