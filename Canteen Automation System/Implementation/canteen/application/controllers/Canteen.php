<?php

class Canteen extends CI_Controller
{
	public function __construct()
		{
			parent::__construct();
			$this->load->model('canteen_model');
			$this->load->database();
            $this->load->library('form_validation');
			$this->load->library('session');
		}

    public function index()
    {
        if (null==$this->session->userdata('uid')) 
        {
        	$this->load->view('templates/header');
        }

        else{
        	$this->load->view('templates/header1');
        }
        
        //$this->load->view('templates/header1');
        
        $data['items']=$this->canteen_model->get_item();

        
        $this->load->view('canteens/canteens',$data);
        $this->load->view('templates/footer');
    }

    public function insertCart()
    {
        $this->load->library('session');
        $this->form_validation->set_rules('qty', 'Quantity', 'required|numeric');
        if ($this->form_validation->run() == FALSE) 
            { 
                $data=array('errors'=> validation_errors());
                $this->session->set_flashdata($data);
                redirect('Canteen/index');
            }
        else
            {
                $data=array(
                "item"=>$this->input->post("item"),
                "price"=>$this->input->post("price"),
                "quantity"=>$this->input->post("qty")
            );

        $this->canteen_model->insert_cart($data);
                redirect('Canteen/index');

                $data=array(
                'successful'=>'Added to cart');
                $this->session->set_flashdata($data);
                
                redirect('Canteen/Cart');
    }
}
}
?>