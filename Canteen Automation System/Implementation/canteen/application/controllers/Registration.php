<?php
class Registration extends CI_Controller
{
    function __construct()
        {
            parent::__construct();
            $this->load->model('registration_model');
            // load form and url helpers
            $this->load->helper(array('form', 'url'));
            // load form_validation library
            $this->load->library('form_validation');
        }
        
        public function index()
        {
            //load session library
            $this->load->library('session');
            $data['users'] = $this->registration_model->getAllUsers();
            $this->load->view('templates/header', $data);
        }
    
    public function register()
    {
        print_r($_POST);
        
        $this->load->library('session');
        //form validation
        $this->form_validation->set_rules('fname', 'Full Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'valid_email|required');
        $this->form_validation->set_rules('phone', 'Mobile Number ', 'required|regex_match[/^[0-9]{10}$/]'); 
        $this->form_validation->set_rules('insID', 'Institute ID', 'required|min_length[8]|max_length[8]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[7]|max_length[30]');
        $this->form_validation->set_rules('confPassword', 'Password Confirmation', 'required|matches[password]');
        
        if ($this->form_validation->run() == FALSE) 
        { 
            echo "error";
            exit;
            $data=array(
		  'errors'=> validation_errors()

		);
		$this->session->set_flashdata($data);
		redirect('dashboard');
        	//$data['users'] = $this->registration_model->getAllUsers();
         	//$this->load->view('templates/header', $data);
        } 
        else
        {
             $this->registration_model->insert([
                 
             
            'fname' => $_POST['fname'],
            'lname' => $_POST['lname'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'CollegeID' => $_POST['selectCollege'],
            'RoleID' => $_POST['selectRole'],
            'InstituteID' => $_POST['insID'],
            'password' => $_POST['password']
                 ]);
            
           
            

        }
        
        
    }
}