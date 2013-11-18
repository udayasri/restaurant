<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order_model extends CI_Model {

	function __construct()
	{
		parent:: __construct();
	}
	
	function getOrderDetails()
	{
		$query ="SELECT * FROM orders ; ";
		$query_result = $this->db->query($query);
		$data = array();
	  	foreach($query_result->result() as $row){
	  		$data[] = $row;
	  	}
	  	return $data;
	}
}