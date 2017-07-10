<?php
	class Adminlogin extends CI_Controller
	{
		public function index()
		{
			$this->load->view('admin/login');
		}
		
		public function __construct()
		{
			parent::__construct();
			if($this->session->userdata('admin_id'))
            {
				return redirect('admin');
            } 
		}
		
		public function login()
		{
			$array	=	$this->input->post();
			 
			 
			$this->load->model('select');
			if($admin_id	=	$this->select->checkadminlogin($array))
			{
				$this->session->set_userdata('admin_id',$admin_id);
				return redirect('admin');
			}
			else
			{
				$this->session->set_flashdata('errmsg','<div class="alert alert-warning"><h4 class="text text-center">Wrong Credentials</h4></div>');
				return redirect('adminlogin');
			} 
			echo $admin_id;
		}
	}
	
	

?>