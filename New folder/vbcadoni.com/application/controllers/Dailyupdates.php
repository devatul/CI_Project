<?php
	class Dailyupdates extends CI_Controller
	{
		public function index()
		{
			$this->load->model('select');
			$array		=		array('update_id'	=>	1);
			$update		=		$this->select->get_daily_update($array);
			$array		=		array('update'	=>	$update);
			$this->load->view('user/dailyupdates',['array'	=>	$array]);
		}
	}
?>