<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ordersuccess extends CI_Controller 
{
	private $view_data = array();
		
	public function __construct() 
	{
        parent::__construct();
    }
	
	// This will food menu table page
	public function index()
	{	
		$this->load->view( 'ordersuccess_view.php' );	
	}
}