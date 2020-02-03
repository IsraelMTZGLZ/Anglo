<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Becas extends MY_RootController {

	public function index()
	{
		$this->_initialDashboard();
		$this->load->view('becas_view');
		$this->_footerDashboard();
		$this->load->view('becasjs');
	}

}
