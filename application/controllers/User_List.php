<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_List extends MY_RootController {

	public function index()
	{

		$this->load->view('user_list_view');
	}

}
