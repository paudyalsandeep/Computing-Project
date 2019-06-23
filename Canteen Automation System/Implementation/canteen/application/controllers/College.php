<?php

class College extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('admin_model');
		$this->load->database();
		$this->load->library('session');
	}

	public function crudCollege()
	{
		if($_POST['btnAdd']="Add College")
		{
			$this->load->library('session');

			$this->form_validation->set_rules('college', 'College Name', 'required|alpha');
			$this->form_validation->set_rules('address', 'College Address', 'required');
			
			if ($this->form_validation->run() == FALSE) 
	        { 
	            $data=array('errors'=> validation_errors());
	            $this->session->set_flashdata($data);
				redirect('college/get_college');
			}
				
			else
			{
				$data=array(
				"CollegeName"=>$this->input->post("college"),
				"Address"=>$this->input->post("address")
			);
				$this->admin_model->insert_college($data);
				redirect('college/get_college');

				$data=array(
	            'successful'=>'Added College Successfully');
	            $this->session->set_flashdata($data);
	            
	            redirect('college/get_college');
			}
		}
		elseif($_POST['btnUpdate']="Update College")
		{

		}
		else
		{

		}

		
	}

	public function get_college()
	{
		$this->load->view('templates/header_admin');
		$data['users']=$this->admin_model->get_college();
		$this->load->view('admin/college',$data);
	}


}

?>