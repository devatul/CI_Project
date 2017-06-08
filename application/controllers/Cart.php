<?php
	class Cart extends CI_Controller
	{
	 
		public function addtocart()
		{
			$cart_series_id		=	$this->input->get('cart_series_id');			
			 
			$array			=	array(									 
									'cart_series_id'		=>		$cart_series_id,								 
									'cart_user_id'			=>		$_SESSION['logged_id'],								 
								);
			$this->load->model('insert');
			$this->load->model('select');
			if($this->select->checkcart($array))
			{
				echo"3";
			}
			else
			{				 
				if($this->insert->insert_table($array,'cart'))
				{
					echo"1";
				}
				else
				{
					echo"2";
				}	
			}
				
			
		}
		
		public function index()
		{
			echo "hello";
		}
		
		
	
	
	
	
	
	
	
	
	
	}
	
	

?>