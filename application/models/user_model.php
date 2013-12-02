<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	function __construct()
	{
		parent:: __construct();
	}
	
##################################################################################################################################
//check username and password

	function veryfy_user($username, $password)
	{
		
		$params = array('iterationCount'=>'8', 'portableHashes'=>'false');
		$this->load->library('PasswordHash', $params);
		
		
		$query = "SELECT * FROM customers where username=?";
		
		$q = $this->db->query($query,$username);
		
		

		if ($q->num_rows >0)
		{
			
			//check password 
			
			$ok = 0;
			
			$row =  $q->row();
			 
			$enc_password_check = $this->passwordhash->CheckPassword($password, $row->password);
			
			if ($enc_password_check == 1)
			{
				
				return $q;

			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	
	}
	
	function user_register( $username, $firstname, $lastname, $email, $password){
		
	$data = array(
			'username' => $username,
			'password' => $password,
			'firstname'=>$firstname,
			'email'=>$email,
			'lastname'=>$lastname
	);
	
			$this->db->insert('customers', $data);
	
			return true;
	}
	
	
}
?>