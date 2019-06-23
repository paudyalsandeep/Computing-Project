<?php

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->database();
		$this->load->library('session');
	}

	public function get_users()
	{
		$this->load->view('templates/header_admin');
		$data['users']=$this->admin_model->get_users();
		$this->load->view('admin/users',$data);
	}

	

	
}

?>