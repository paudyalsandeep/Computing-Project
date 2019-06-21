<?php

class Canteen extends CI_Controller
{
	public function __construct()
		{
			parent::__construct();
			$this->load->model('canteen_model');
			$this->load->database();
			$this->load->library('session');
		}

    public function index()
    {
        
        $this->load->view('templates/header');
        
        $data['items']=$this->canteen_model->get_item();

        
        $this->load->view('canteens/canteens',$data);
        $this->load->view('templates/footer');
}
}
?>