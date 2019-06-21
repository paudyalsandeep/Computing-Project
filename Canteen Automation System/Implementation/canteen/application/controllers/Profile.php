<?php

class Profile extends CI_Controller
{
	function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    public function index()
    {
    		$this->load->view("templates/header");
            $this->load->view("profile/profile");
            $this->load->view("templates/footer");
    }
}

?>