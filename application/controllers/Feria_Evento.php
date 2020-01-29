<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feria_Evento extends MY_RootController {

	public function index()
	{

		$this->load->view('feria_evento_view');
	}

}
