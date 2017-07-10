<?php
	class Notifications extends CI_Controller
	{
		public function index()
		{
			$this->load->model('select');
			$array		=		array('update_id'	=>	2);
			$update		=		$this->select->get_daily_update($array);
			$array		=		array('update'	=>	$update);
			$this->load->view('user/notifications',['array'	=>	$array]);
		}
	}
?>