<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shoppingcart extends CI_Controller 
{	
	public function __construct() 
	{
        parent::__construct();
		
    }

	public function index()
	{
		
		$this->load->view( 'shoppingcart_view.php' );		
		
	}
	
	public function addorder()
	{
		// if( $this->uri->segment(3) != null )
			// {
				//$this->view_data['foodDetails'] = $this->foodmenu_model->getEditFoodDetails( $this->uri->segment(3) );
				$this->load->view( 'shoppingcart_view.php' );
			// }
			// else
			// {
				// redirect('home');
			// }
	}
	
}