<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Archivos extends MY_RootController {

	public function index()
	{
		$this->_initialDashboard();
		$this->load->view('archivos_view');
		$this->_footerDashboard();
		$this->load->view('archivosjs');
	}

}
