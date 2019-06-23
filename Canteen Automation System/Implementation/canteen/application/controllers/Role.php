<?php

class Role extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('admin_model');
		$this->load->database();
		$this->load->library('session');
	}

	public function insert_role()
	{
		$this->load->library('session');

		$this->form_validation->set_rules('role', 'Role', 'required|alpha');
		
		
		if ($this->form_validation->run() == FALSE) 
        { 
            $data=array('errors'=> validation_errors());
            $this->session->set_flashdata($data);
			redirect('role/get_role');
		}
			
		else
		{
			$data=array(
			"Role"=>$this->input->post("role")
		);
			$this->admin_model->insert_role($data);
			redirect('role/get_role');

			$data=array(
            'successful'=>'Added Role Successfully');
            $this->session->set_flashdata($data);
            
            redirect('role/get_role');
		}

		
	}

	public function get_role()
	{
		$this->load->view('templates/header_admin');
		$data['roles']=$this->admin_model->get_role();
		$this->load->view('admin/roles',$data);
	}
}

?>