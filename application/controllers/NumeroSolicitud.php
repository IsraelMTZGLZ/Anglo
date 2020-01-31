<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NumeroSolicitud extends MY_RootController {

	public function index()
	{
		$this->_initialDashboard();
		$this->load->view('numeroSolicitud_view');
		$this->_footerDashboard();
	}

}
