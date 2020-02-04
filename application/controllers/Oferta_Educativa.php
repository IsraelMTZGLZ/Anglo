<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Oferta_Educativa extends MY_RootController {

	public function index()
	{
		$this->session->set_flashdata('activo','ofertaEducativa');
		$this->_initialPage();
		$this->load->view('oferta_educativa_view');
		$this->_footerPage();
		$this->load->view('oferta_educativajs');
	}

}
