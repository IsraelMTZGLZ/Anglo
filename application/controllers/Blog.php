<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends MY_RootController {

	public function index()
	{
		$this->_initialPage();
		$this->load->view('blog_view');
		$this->_footerPage();
		//$this->load->view('homejs');
	}

}
