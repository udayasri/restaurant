<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shoppingcart_model extends CI_Model {

	function __construct()
	{
		parent:: __construct();
	}
	
	function insertorder($query,$params){
			
			$result = $this->db->query($query,$params);
			if($result != false){
				
				$id = mysql_insert_id();
				
				//echo $id;
				return true;
			}
			else{
				return false;
			}
		
	} 	
}