<?php
	class Logout extends CI_Controller
	{
		 
		public function index()
		{
			unset($_SESSION['logged_id']);
			return redirect('home');
		}
	}
?>