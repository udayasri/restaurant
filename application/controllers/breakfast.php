<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Breakfast extends CI_Controller 
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
			$this->view_data['foodDetails'] = $this->foodmenu_model->getFoodDetailsForCart( 2 ); // 2 -> category id of desserts
			
			$this->load->view( 'breakfast_view.php' , $this->view_data );	
	}
}