<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Userregister extends CI_Controller 
{
	private $view_data = array();
		
	public function __construct() 
	{
        parent::__construct();
		$this->load->library('form_validation');
    }
	
	// This will food menu table page
	public function index()
	{		
			$this->load->view( 'userregister_view.php' );	
	}
	
	public function registerUser()
	{
		//setting custom validation messages
		$this->form_validation->set_message('required', '%s cannot be empty..');
		$this->form_validation->set_message('valid_email', '%s should be a valid email..');
		$this->form_validation->set_message('recaptcha_matches', 'Wrong code.');	
		
		
		//setting validation rules
		$this->form_validation->set_rules('firstname', 'First Name', 'required|xss_clean');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required|xss_clean');
		$this->form_validation->set_rules('username', 'User Name', 'required|xss_clean');
		$this->form_validation->set_rules('email','Email', 'required|xss_clean');
		$this->form_validation->set_rules('password',' password ', 'required|xss_clean|email');
		$this->form_validation->set_rules('contactnumber','Contact Number', 'required|xss_clean|numeric');
		$this->form_validation->set_rules('creditcardnum','Credit Card Number', 'required|xss_clean|numeric');
		$this->form_validation->set_rules('csv','CSV', 'required|xss_clean|numeric');
		
	
		if ($this->form_validation->run() == true)
		{
			//asigning post data to variables
			$firstname = $this->input->post('firstname');
			$lastname = $this->input->post('lastname');
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$contactnumber = $this->input->post('contactnumber');
			$creditcardnum = $this->input->post('creditcardnum');
			$csv = $this->input->post('csv');
			

				$this->load->model('user_model');
				$params = array('iterationCount'=>'8', 'portableHashes'=>'false');
				$this->load->library('PasswordHash', $params);
				
			
				$valideuser = $this
				->user_model
				->user_register(
						$username,$firstname,$lastname,$email,$contactnumber,$creditcardnum ,$csv,
						$this->passwordhash->HashPassword($password)
					
				);
				
				$this->session->set_userdata('customername', $username );
				//redirect('home');
				
				echo '{"validation_result": "passed"}';
		}
		else
		{
			$output = '{"firstname":"'.form_error('firstname').'","username":"'.form_error('username').'",
			"password":"'.form_error('password').'", "lastname":"'.form_error('lastname').'" ,"email":"'.form_error('email').'" ,
			}';
	
			echo $output;
			
		}
	}

}