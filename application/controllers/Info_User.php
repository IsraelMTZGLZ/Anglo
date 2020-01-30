<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info_User extends MY_RootController {

	public function index()
	{

		$this->load->view('info_user_view');
	}

}
