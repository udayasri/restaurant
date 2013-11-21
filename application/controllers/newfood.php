<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Newfood extends CI_Controller 
{	
	public function __construct() 
	{
        parent::__construct();
    }
	
	// This will load newfood_view
	public function index()
	{
		if( $this->session->userdata('username') != null )
		{
			$this->load->view( 'newfood_view.php' );
		}
		else
		{
			redirect('login');
		}
	}
	
}