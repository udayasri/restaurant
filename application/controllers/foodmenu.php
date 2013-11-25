<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Foodmenu extends CI_Controller 
{
	private $view_data = array();
		
	public function __construct() 
	{
        parent::__construct();
		$this->load->model('foodmenu_model');
    }
	
	// This will food menu table page
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

	// This will load newfood_view
	public function editfood()
	{
		if( $this->session->userdata('username') != null )
		{	
			if( $this->uri->segment(3) != null )
			{
				$this->view_data['foodDetails'] = $this->foodmenu_model->getEditFoodDetails( $this->uri->segment(3) );
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
		$this->load->model('deletedata_model');
		$id = $this->input->post('id');
	
		$query = 'DELETE FROM sales_search_option WHERE sale_id =?';
		
		$this->deletedata_model->deletedata($query,$id);
	}
	
}