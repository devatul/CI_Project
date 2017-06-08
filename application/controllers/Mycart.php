<?php
	class Mycart extends CI_Controller
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
		public function index()
		{
			$array	=	array(
								'cart_user_id'	=>	$_SESSION['logged_id']
							);
			
			$mycart	=	$this->select->getcart($array);
			//echo "<pre>";
			//print_r($mycart);
			$array	=	array('mycart'	=>	$mycart);
			$this->load->view('user/mycart',['array'=>$array]);
		}
		public function removeitem()
		{
			extract($_GET);
			echo $this->delete->removecart($cart_id);
		 
		}
	}
?>