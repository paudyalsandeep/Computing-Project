<?php

class Item extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('admin_model');
		$this->load->database();
		$this->load->library('session');
	}

	public function insert_item()
	{
		$this->load->library('session');

		$this->form_validation->set_rules('item', 'Item', 'required|alpha');
		$this->form_validation->set_rules('price', 'Price', 'required|numeric');
		
		
		if ($this->form_validation->run() == FALSE) 
        { 
            $data=array('errors'=> validation_errors());
            $this->session->set_flashdata($data);
			redirect('item/get_item');
		}
			
		else
		{
			$data=array(
			"item"=>$this->input->post("item"),
			"price"=>$this->input->post("price")
		);
			$this->admin_model->insert_item($data);
			redirect('item/get_item');

			$data=array(
            'successful'=>'Added Role Successfully');
            $this->session->set_flashdata($data);
            
            redirect('item/get_item');
		}

		
	}

	public function get_item()
	{
		$this->load->view('templates/header_admin');
		$data['items']=$this->admin_model->get_item();
		$this->load->view('admin/items',$data);
	}
}

?>