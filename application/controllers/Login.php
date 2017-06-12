<?php
	class login extends CI_Controller
	{
		public function checklogin()
		{
			$user_email		=	$this->input->get('user_email');
			$user_password	=	$this->input->get('user_password');
			$array			=	array(
									'user_email'		=>		$user_email,
									'user_password'		=>		md5($user_password),
								);
			$this->load->model('select');
			if($user_id		=		$this->select->checkuser($array))
			{
				$_SESSION['logged_id']		=	$user_id;
				echo "1";
			}
			else
			{
				echo "2";
			}
		}









	}



?>
