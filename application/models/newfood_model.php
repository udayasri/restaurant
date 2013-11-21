<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Newfood_model extends CI_Model {

	function __construct()
	{
		parent:: __construct();
	}
	
	/*This will save the food info */
	function imageUpload($query,$params){
			
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