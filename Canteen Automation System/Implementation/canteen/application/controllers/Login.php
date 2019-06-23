<?php 


Class Login extends CI_Controller
{	
	public function __construct()
		{
			parent::__construct();
			$this->load->model('Login_model');
			$this->load->database();
			$this->load->library('session');
		}

		public function index()
		{
			$this->load->view("templates/header");
            $this->load->view("login/login");
            $this->load->view("templates/footer");
		}

		public function check()
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('email', 'email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if ($this->form_validation->run()==False) 
			{
				$data=array(
				'errors'=> validation_errors()

			);
				$this->session->set_flashdata($data);
				redirect('login');
			} //for if 

			else
			{
				$email= $this->input->post('email');
				$password= $this->input->post('password');
				$count=$this->Login_model->login($email,$password); //for counting if user exists
				$result=$this->Login_model->getid($email,$password)->row();
				print_r($result);
				$id=$result->userID;

				//$getname=$this->Login_model->getname($email,$password)->row();
				//$name=$getname->fname;
			

			if ($count==True) 
			{
				$this->session->set_userdata('uid',$id); //set user id
				//$this->session->set_userdata('uname',$name);//for fname  
				 echo "Session is".$this->session->userdata('uid');
				 exit;
				$this->session->set_flashdata('login_success','You are now logged in');
       			 redirect(base_url('profile'));




			
			}//else if bhitra if ko bracket

			else
			{
				$this->session->set_flashdata('login_fail', 'Incorrect username or password');
				redirect('login');
			}//else bhitra ko else ko bracket
			}//for else
			

		} //for function closure

	}//for class