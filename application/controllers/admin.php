<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller 
{
	private $view_data = array();
		
	public function __construct() 
	{
        parent::__construct();
		$this->load->model('foodmenu_model');
    }
	
	public function index()
	{
		if( $this->session->userdata('username') != null )
		{
			$this->view_data['foodDetails'] = $this->foodmenu_model->getFoodDetails();
			
			$this->load->view( 'foodmenu_view.php' , $this->view_data );
		}
		else
		{
			redirect('login'); 
		}
		
	}	
}