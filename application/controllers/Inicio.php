<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends MY_RootController {

	public function index()
	{
		$this->_initialDashboard();
		$this->load->view('inicio_view');
		$this->_footerDashboard();
	}

}
