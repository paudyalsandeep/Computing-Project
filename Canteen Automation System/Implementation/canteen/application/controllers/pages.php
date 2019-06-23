<?php

class Pages extends CI_Controller
{
    public function __construct()
        {
            parent::__construct();
            $this->load->library('session');
        }

    public function view($page='dashboard')
    {
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
            show_404();
        }
        
        /*canteen page loading canteen_model and passing to view*/
        
        
        /*loading different pages*/
        $data['title']=ucfirst($page);
        

        if (null==$this->session->userdata('uid')) 
        {
            $this->load->view('templates/header');
        }

        else{
            $this->load->view('templates/header1');
        }

        //$this->load->view('templates/header1');
        $this->load->view('pages/'.$page,$data);
        $this->load->view('templates/footer');
    }
}



?>