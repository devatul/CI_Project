<?php
	class login extends CI_Controller
	{
		public function checklogin()
		{
			// echo 'sssssssssssss';die;
			$user_email		=	$this->input->get('user_email');
			$user_password	=	$this->input->get('user_password');
			$array			=	array(
									'user_email'		=>		$user_email,
									'user_password'		=>		md5($user_password),
								);
			$this->load->model('select');
			$user		=		$this->select->checkuser($array);

			if(!$user)
			{
				echo "OOPS!.. Invalid Credentials";
			}
			else if ($user->user_status == "pending for approval")
			{
				echo "Account pending for approval";
			}
			 else
			 {
				$_SESSION['logged_id']		=	$user->user_id;
				echo TRUE;
			}
		}









	}



?>
