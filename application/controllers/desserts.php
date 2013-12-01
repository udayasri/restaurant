<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Desserts extends CI_Controller 
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
			$this->view_data['foodDetails'] = $this->foodmenu_model->getFoodDetailsForCart( 5 ); // 5 -> category id of desserts
			
			$this->load->view( 'desserts_view.php' , $this->view_data );	
	}
}