<?php

class Payment extends CI_Controller
{
	public function index()
		{
			$this->load->view("templates/header");
            $this->load->view("payment/payment");
            $this->load->view("templates/footer");
		}
}
