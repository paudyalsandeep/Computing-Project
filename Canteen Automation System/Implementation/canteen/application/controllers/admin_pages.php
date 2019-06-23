<?php

class Admin_pages extends CI_Controller
{
    public function view($page='index')
    {
        if(!file_exists(APPPATH.'views/admin/'.$page.'.php'))
        {
            show_404();
        }
        
        /*canteen page loading canteen_model and passing to view*/
        
        
        /*loading different pages*/
        $data['title']=ucfirst($page);
        $this->load->view('templates/header_admin');
        $this->load->view('admin/'.$page,$data);
        
    }
}



?>