<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Userlogin extends CI_Controller 
{
	private $view_data = array();
		
	public function __construct() 
	{
        parent::__construct();
    }
	
	// This will food menu table page
	public function index()
	{		
			$this->load->view( 'userlogin_view.php' );	
	}
	
	function login_validate()
	{
		$this->load->library('form_validation');
			
		//setting custom validation messages
		$this->form_validation->set_message('required', '%s cannot be empty.');
		$this->form_validation->set_message('alpha_dash', '%s please use / of - only ');
		
		//setting validation rules
		$this->form_validation->set_rules('cutomername', 'Customer Name', 'required|xss_clean|max_length[45]|alpha_dash');
		$this->form_validation->set_rules('custpass','Password', 'required|xss_clean|max_length[45]|alpha_dash');
		
	
		if ($this->form_validation->run() == true)
		{
			
			//asigning post data to variables
			$username = $this->input->post('cutomername');
			$password = $this->input->post('custpass');
			
			$this->load->model('user_model');
			$valideuser = $this->user_model->veryfy_user($username,$password);
			
			//$userinfo = $valideuser->result_array();
			
			if($valideuser == true)
			{
				//$userinfo = $valideuser->result_array();
			 
				// foreach ($userinfo as $row) 
				// {
					 // $userid = $row['customer_id'];
// 					 
				// }
				// $this->session->set_userdata( 'cust_id', $userid );
				$this->session->set_userdata( 'customername', $username );
				
				echo '{"validation_result": "passed"}'; //if user is a valid user send json data to ajax_admin_login.js
				
			}
				
			else
			{
				echo '{"registration" : "falied"}'; //if something happern during the user validation process ,this json data will pass to create error messages.
				//echo "<script>$().toastmessage('showErrorToast', 'You are not a registered user!');<script>";
				$this->session->sess_destroy(); 
			}
			
		}
		else
		{
			
			//if username & passwords are empty or bad inputs these json data will be passed to ajax_admin_login.js.
			//then the error messages will displayed.
		
			$output = '{"cutomername":"'.form_error('cutomername').'",
			"custpass":"'.form_error('custpass').'"}';
	
			echo $output;
			$this->session->sess_destroy();
			
		}
	}
	
	function log_out()
	{	
		$customername = $this->session->userdata('customername');
		
		//destroy the session data
		$this->session->sess_destroy();
	
		redirect(base_url()."home"); 
	}
}