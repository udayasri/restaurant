<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shoppingcart extends CI_Controller 
{
	private $view_data = array();
		
	public function __construct() 
	{
        parent::__construct();
		$this->load->model('foodmenu_model');
		$this->load->model('user_model');
		$this->load->model('shoppingcart_model');
    }

	public function index()
	{
		$abc = $this->session->userdata('shoppingcart_food_id');
			
		if($abc == null)
		{
			$this->view_data['list'] = NULL; 
		}
		else{
			$this->view_data['food_id'] = $this->session->userdata('shoppingcart_food_id');
			
					
			for( $i =0; $i<count( $this->view_data['food_id'] ); $i++ )
			{
				if( count( $this->view_data['food_id'][$i] ) == 0 )
				{
					echo 'vfgfdgdfgdfgdfgdfgdfgdfgfdgddd';
					$this->view_data['list'][$i] = NULL;
					$this->view_data['list'] = NULL;
			
				}
				else
				{
					$this->view_data['list'][$i] = $this->foodmenu_model->getEditFoodDetails( $this->view_data['food_id'][$i] );
					
				}
			}
		}
		
		
		// $this->view_data['foodDetails'] = $this->foodmenu_model->getEditFoodDetails( $this->session->userdata('food_id') );
		$this->load->view( 'shoppingcart_view.php' , $this->view_data );		
		
	}
	
	public function updatecart()
	{
		
	}
	
	public function removefood()
	{
		if( $this->uri->segment(3) != null )
		{
			$id =  $this->uri->segment(3);
			
			$filter = $this->session->userdata( 'shoppingcart_food_id' );
			$index = array_search($id, $filter);
			unset($filter[$index]);
			$this->session->set_userdata( 'shoppingcart_food_id', $filter );
			
			redirect("shoppingcart");
			
		}
		
	}
	
	public function placeorder()
	{
		if( $this->session->userdata('customername') != null )
		{
			
			$count = $this->input->post('count');
			
			if( $count == 0 )
			{
				redirect('home');
			}
			else
			{
				$userdetails  = $this->user_model->getCustomerDetails( $this->session->userdata('customername') ); 
				
				foreach( $userdetails as $row )
				{
					$customername = $row->firstname." ".$row->lastname ;
					$contactnumber = $row->contactnumber;
				}

				$items = null;
				$foodname = null ;
				$foodprice = 0;
				$foodquantity = 0;
				$total = 0;
				
				
				for( $i=0; $i<$count; $i++ )
				{
					$foodname = $this->input->post('food_nametopass'.$i);
					$foodprice = $this->input->post('food_pricetopass'.$i);
					$foodquantity = $this->input->post('food_quntitytopass'.$i);
					
					$total += intval( $foodprice );
					$items = $foodname.$i."-".$foodquantity.$i.",";
					
				}
				$status = 1 ;
				$order_date = date("y_m_d") ;
				
					$params = array( $customername, $contactnumber, $items, $order_date, $status, $total );
					
					$query = 'INSERT INTO orders ( ordered_by, contact, items, ordered_date, status , order_price ) 
					VALUES( ?,?,?,?,?,? )';
					
					$result = $this->shoppingcart_model->insertorder( $query, $params );
					
					redirect('ordersuccess');
			}
			
		}
		else
		{
			redirect('userlogin');
		}
	}
	
}