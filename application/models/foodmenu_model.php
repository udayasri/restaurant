<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Foodmenu_model extends CI_Model {

	function __construct()
	{
		parent:: __construct();
	}
	
	//get all the food details to foodmenu table
	function getFoodDetails()
	{
		$query ="SELECT food_id, food_name,food_image,food_price,food_category, category_name
		FROM foods 
		LEFT JOIN category ON foods.food_category = category.category_id ; ";
		
		$query_result = $this->db->query($query);
		$data = array();
	  	foreach($query_result->result() as $row){
	  		$data[] = $row;
	  	}
	  	return $data;
	}
	
	// This will get the foods according to the category to show them in the fron web site ( shopping cart )
	public function getFoodDetailsForCart( $category )
	{
		$query ="SELECT food_id, food_name,food_image,food_price
		FROM foods WHERE food_category = ".$category." ; ";
		
		$query_result = $this->db->query($query);
		$data = array();
	  	foreach($query_result->result() as $row){
	  		$data[] = $row;
	  	}
	  	return $data;
		
	}
	
	public function getEditFoodDetails( $id )
	{
		$query ="SELECT food_id, food_name,food_image,food_price,food_category, category_name
		FROM foods 
		LEFT JOIN category ON foods.food_category = category.category_id WHERE food_id = '".$id."'; ";
		
		$query_result = $this->db->query($query);
		$data = array();
	  	foreach($query_result->result() as $row){
	  		$data[] = $row;
	  	}
	  	return $data;
		
	}
	
	
	
	public function deleteFood( $query, $params )
	{
		$result = $this->db->query($query,$params);
			if($result != false){
				return true;
			}
			else{
				return false;
			}
	}
	
	
	
	
}