<?php

class Cart extends CI_Controller
{
	public function __construct()
		{
			parent::__construct();
			$this->load->model('cart_model');
			$this->load->database();
			$this->load->library('session');
			$this->load->library('form_validation');
		}

	public function index()
    {
        if (null==$this->session->userdata('uid')) 
        {
        	redirect('login');
        }

        else{
        	$this->load->view('templates/header1');
        }
        
        
        $data['cart']=$this->cart_model->get_cart();

        
        $this->load->view('cart/cart',$data);
        $this->load->view('templates/footer');
    }

    public function order_payment()
    {
    	$this->load->library('session');
        $this->form_validation->set_rules('room', 'Room', 'required');
        $this->form_validation->set_rules('table', 'Table', 'required');
        if ($this->form_validation->run() == FALSE) 
            { 
                $data=array('errors'=> validation_errors());
                $this->session->set_flashdata($data);
                redirect('Cart/index');
            }
        else
        {
        	$data=array(
                "item"=>$this->input->post("item"),
                "price"=>$this->input->post("price"),
                "quantity"=>$this->input->post("qty"),
                "total"=>$this->input->post("total"),
                "grandtotal"=>$this->input->post("grandtotal"),
                "room"=>$this->input->post("room"),
                "tables"=>$this->input->post("table"),
                "payment_type"=>$this->input->post("optradio"),
            );
            $this->cart_model->order_payment($data);
                redirect('Cart/index');

                $data=array(
                'successful'=>'Order Completed');
                $this->session->set_flashdata($data);
                
                redirect('Cart/index');
        }

    }
}