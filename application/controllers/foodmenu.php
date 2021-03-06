<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Foodmenu extends CI_Controller 
{
	private $view_data = array();
		
	public function __construct() 
	{
        parent::__construct();
		$this->load->model('foodmenu_model');
		$this->load->model('order_model');
    }
	
	// This will food menu table page
	public function index()
	{
		if( $this->session->userdata('username') != null )
		{
			$this->view_data['foodDetails'] = $this->foodmenu_model->getFoodDetails();
			$this->view_data['orderDetails'] = $this->order_model->getOrderDetails();
			
			$this->load->view( 'foodmenu_view.php' , $this->view_data );
		}
		else
		{
			redirect('login'); 
		}
		
	}

	// This will load newfood_view
	public function editfood()
	{
		if( $this->session->userdata('username') != null )
		{	
			if( $this->uri->segment(3) != null )
			{
				$this->view_data['foodDetails'] = $this->foodmenu_model->getEditFoodDetails( $this->uri->segment(3) );
				$this->view_data['orderDetails'] = $this->order_model->getOrderDetails();
				
				$this->load->view( 'editfood_view.php', $this->view_data );
			}
			else
			{
				redirect('foodmenu');
			}
			
		}
		else
		{
			redirect('login');
		}
	}
	
	
	public function deleteFood()
	{
		if( $this->uri->segment(3) != null )
		{
			$query = 'DELETE FROM foods  WHERE food_id = ?';
		
			$this->foodmenu_model->deleteFood( $query, $this->uri->segment(3) );
			redirect('foodmenu');
		}
		else
		{
			redirect('foodmenu');
		}
	}
	
}