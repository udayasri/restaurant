<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orders extends CI_Controller 
{
	private $view_data = array();
		
	public function __construct() 
	{
        parent::__construct();
		$this->load->model('order_model');
    }
	
	// This will load newfood_view
	public function index()
	{
		if( $this->session->userdata('username') != null )
		{
			$this->view_data['orderDetails'] = $this->order_model->getOrderDetails();
			
			$this->load->view( 'orders_view.php',$this->view_data );
		}
		else
		{
			redirect('login');
		}
	}
	
	public function delivered()
	{
		if( $this->uri->segment(3) != null )
			{
				$params = array( 0 , $this->uri->segment(3) ) ;
					
				$query = 'UPDATE orders SET status = ?  WHERE order_id = ? ;';
				
				$result = $this->order_model->updateOrders( $query,$params ); 
				
				redirect('orders');
			}
		else
		{
			redirect('orders');
		}
	}
	
	public function deleteOrder()
	{
		if( $this->uri->segment(3) != null )
		{
			$query = 'DELETE FROM orders  WHERE order_id = ?';
		
			$this->order_model->deleteOrder( $query, $this->uri->segment(3) );
			
			redirect('orders');
		}
		else
		{
			redirect('orders');
		}
	}
	
}