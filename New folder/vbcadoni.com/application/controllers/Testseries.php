<?php
	class Testseries extends CI_Controller
	{
		public function index()
		{
			$this->load->model('select');
			$array	=	array('series_type'	=>	'PAID');			
			$series		=	$this->select->get_all_series($array);
			$course		=	$this->select->get_all_course();
			//echo "<pre>";
			//print_r($course);
			$array	=	array(
								'course'	=>	$course,
								'series'	=>	$series,
							);
			$this->load->view('user/testseries',['array'	=>	$array]);
		}
		
		public function description()
		{
			$series_slug	=	 $this->uri->segment(3);
			$array			=	array('series_slug'	=>	$series_slug);
			$this->load->model('select');
			$series	=	$this->select->get_one_series($array);
			if(!count($series))
			{
				return redirect('testseries');
			}
			//echo"<pre>";
			//print_r($series);
			$array	=	array(
								 
								'series'	=>	$series,
							);
			$this->load->view('user/seriesdescription',['array'	=>	$array]);
		}
		 
	}

?>