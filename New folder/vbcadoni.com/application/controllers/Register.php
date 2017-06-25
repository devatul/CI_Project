<?php
	class Register extends CI_Controller
	{
	 
		public function storeuser()
		{
			$user_name		=	$this->input->get('user_name');			
			$user_email		=	$this->input->get('user_email');
			$user_mobile	=	$this->input->get('user_mobile');
			$user_password	=	$this->input->get('user_password');
			$array			=	array(									 
									'user_email'		=>		$user_email,								 
								);
			$this->load->model('insert');
			$this->load->model('select');
			if($this->select->checkuser($array))
			{
				echo"<div class='alert alert-danger'>This email is already registered.Please Login.</div>";
			}
			else
			{
				$array			=	array(
									'user_name'			=>		$user_name,
									'user_email'		=>		$user_email,
									'user_mobile'		=>		$user_mobile,
									'user_password'		=>		md5($user_password),
								);
				if($this->insert->insert_table($array,'users'))
				{
					echo"<div class='alert alert-success'><h5>Congratulations! You are now registered with us</h5></div>";
				}
				else
				{
					echo"<div class='alert alert-danger'>System Error.</div>";
				}	
			}
				
			
		}
		
		
	
	
	
	
	
	
	
	
	
	}
	
	

?>