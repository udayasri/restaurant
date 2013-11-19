<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orders extends CI_Controller 
{
	private $view_data = array();
		
	public function __construct() 
	{
        parent::__construct();
    }
	
	// This will load newfood_view
	public function index()
	{
		if( $this->session->userdata('username') != null )
		{
			$this->load->model('order_model');
		
			$this->view_data['orderDetails'] = $this->order_model->getOrderDetails();
			
			$this->load->view( 'orders_view.php',$this->view_data );
		}
		else
		{
			redirect('login');
		}
	}
	
}