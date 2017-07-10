<?php
	class Myaccount extends CI_Controller
	{
		public function __construct()
		{
			parent ::__construct();
			if(!$this->session->userdata('logged_id'))
			{
				return redirect ('home');
			}
			$this->load->model('select');
			$this->load->model('update');
			$this->load->model('insert');
			$this->load->model('delete');
			date_default_timezone_set('Asia/kolkata');
		}
		
		public function accountinfo()
		{
			$array	=	array('user_id'	=>	$_SESSION['logged_id']);
			$user	=	$this->select->get_one_user($array);
			//echo "<pre>";
			//print_r($user);
			$array		=	array('user'	=>	$user);
			$this->load->view('user/accountinfo',['array'	=>	$array]);
		}
		
		public function updateaccountinfo()
		{
			$post	=	$this->input->post();
			echo	"<pre>";
			print_r($post);
			if($this->update->update_table('users','user_id',$post['user_id'],$post))
			{
				$this->session->set_flashdata('infomsg','<div class="alert alert-success" style="background:green;color:white;"><b>Account Info updated Successfully.</b></div>');
			}
			else
			{
				$this->session->set_flashdata('infomsg','<div class="alert alert-danger">System Failure.</div>');

			}
			return redirect(base_url('myaccount/accountinfo'));
		}
		
		public function changepassword()
		{
			$this->load->view('user/changepassword');
		}
		public function resetpassword()
		{
			$post	=	$this->input->post();
			echo	"<pre>";
			print_r($post);
			if($post['user_password2']	==	$post['user_password'])
			{
				unset($post['user_password2']);
				$post['user_password']=		md5($post['user_password']);
				if($this->update->update_table('users','user_id',$post['user_id'],$post))
				{
					$this->session->set_flashdata('passwordmsg','<div class="alert alert-success" style="background:green;color:white;"><b>Password updated Successfully.</b></div>');
				}
				else
				{
					$this->session->set_flashdata('passwordmsg','<div class="alert alert-danger">System Failure.</div>');

				}
				
			}
			else
			{
				$this->session->set_flashdata('passwordmsg','<div class="alert alert-danger" style="background:red;color:white;"><b>Passwords do not match.</b></div>');
			}
			return redirect(base_url('myaccount/changepassword'));
		}
	}
?>