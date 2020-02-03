<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OfertaCondicional extends MY_RootController {

	public function index()
	{
		$this->_initialDashboard();
		$this->load->view('OfertaCondicional_view');
		$this->_footerDashboard();
		$this->load->view('ofertaCondiconaljs');
	}

}
