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
		$this->session->unset_userdata( 'shoppingcart_food_id' );	
		
		$this->view_data['order_id'] = $this->session->userdata( 'order_id' );;
		
		$this->session->unset_userdata( 'order_id' );;
		
		$this->load->view( 'ordersuccess_view.php',$this->view_data );	
		
		
	}
}