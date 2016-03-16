<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$data = array(
			'title' =>  '::: DELOITTE :::',
			'assets_url' => base_url(). 'assets/'
			);

		$this->load->view('login',$data);
	}

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */