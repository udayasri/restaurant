<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shoppingcart extends CI_Controller 
{
	private $view_data = array();
		
	public function __construct() 
	{
        parent::__construct();
		$this->load->model('foodmenu_model');
    }

	public function index()
	{
		$this->view_data['food_id'] = $this->session->userdata('shoppingcart_food_id');
				
		for( $i =0; $i<count( $this->view_data['food_id'] ); $i++ )
		{
			if( count( $this->view_data['food_id'][$i] ) == 0 )
			{
				$this->view_data['list'][$i] = NULL;
		
			}
			else
			{
				$this->view_data['list'][$i] = $this->foodmenu_model->getEditFoodDetails( $this->view_data['food_id'][$i] );
				
			}
		}
		
		
		// $this->view_data['foodDetails'] = $this->foodmenu_model->getEditFoodDetails( $this->session->userdata('food_id') );
		$this->load->view( 'shoppingcart_view.php' , $this->view_data );		
		
	}
	
	public function addorder()
	{
		// if( $this->uri->segment(3) != null )
			// {
				//$this->view_data['foodDetails'] = $this->foodmenu_model->getEditFoodDetails( $this->uri->segment(3) );
				//$this->load->view( 'shoppingcart_view.php' );
			// }
			// else
			// {
				// redirect('home');
			// }
	}
	
}