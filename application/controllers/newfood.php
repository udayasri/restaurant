<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Newfood extends CI_Controller 
{	
	public function __construct() 
	{
        parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('upload');
    }
	
	// This will load newfood_view
	public function index()
	{
		if( $this->session->userdata('username') != null )
		{
			$this->load->view( 'newfood_view.php' );
		}
		else
		{
			redirect('login');
		}
	}
	
	function upload_foodinfo()
	{
		$this->form_validation->set_rules('food_name', 'Food Name', 'xss_clean|required');
		$this->form_validation->set_rules('food_price', 'Food Price', 'xss_clean|required');
		
		$food_name = $this->input->post('food_name');
		$food_price = $this->input->post('food_price');
		$food_category  = $this->input->post('food_category');
		$food_img = $this->input->post('food_img');
		
		if ($this->form_validation->run() != true)
		{
			// $this->session->sess_destroy();
			// $this->session->set_flashdata('mg', 'Image Title can not be empty');
		
			redirect('newfood/index');
		}
		else
		{
				/*------------------- home page image upload ------------*/
			if ($_FILES['food_img']['name']!="") 
			{
				// this is  will upload the image for home page....
				$config['upload_path'] = './assets/img/foods';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['file_name'] = $food_name.'_food_image';
				$config['image_library'] = 'gd2';
				$config['maintain_ratio'] = TRUE;
				$config['width']    = 250;
				$config['height']   = 400;
				// $config['max_size'] = '1500';
				// $config['max_width'] = '180';
				// $config['max_height'] = '113';
				$this->upload->initialize($config); 
				if($this->upload->do_upload('food_img')){
					$img = $this->upload->data();
					
					$foodImageName = $img['file_name'];	
					
					$this->load->model('newfood_model');
					
					$params = array($food_name,$foodImageName,$food_price,$food_category);
					
					$query = 'INSERT INTO foods (food_name,food_image,food_price,food_category) 
					VALUES(?,?,?,?)';
					
					$result = $this->newfood_model->imageUpload($query,$params); 
					
					if($result == true){ redirect('foodmenu/index'); }
					//echo "upload ok ";
									
					}
				else{
					echo "upload error";
					$this->data['error'] = $this->upload->display_errors();
			
					// $this->session->sess_destroy();
					// $this->session->set_flashdata('image',$this->data['error'] );
					// redirect('newfood/index');
			
				}
			}
		}
	}
	
}