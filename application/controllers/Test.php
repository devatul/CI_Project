<?php
	class Test extends CI_Controller
	{
	public function __construct()
		{
			parent ::__construct();
			if(!isset($_SESSION['logged_id']))
			{
				return redirect (base_url());
			}
			$this->load->model('select');
			$this->load->model('update');
			$this->load->model('insert');
			date_default_timezone_set('Asia/kolkata');
		}
		public function mytestseries()
		{

			$array	=	array('series_type'	=>	'PRACTISE');
			$free	=	$this->select->get_all_series($array);
			//echo "<pre>";
			//print_r($free);
			$array	=	array('free'	=>	$free);
			$this->load->view('user/mytestseries',['array'	=>	$array]);
		}

		public function viewpapers()
		{
			$series_slug	=	$this->uri->segment(3);
			$array			=	array('series_slug'	=>	$series_slug);
			if(!$series_id	=	$this->select->checkseries($array))
			{
				return redirect(base_url(''));
			}
			$array			=	array('paper_series_id'	=>	$series_id);


			$this->load->library('pagination');
			$config		=	[
								'base_url'		=>		base_url('test/viewpapers/'.$series_slug),
								'per_page'		=>		'10',
								'total_rows'	=>		$this->select->count_some_paper($array),
								'full_tag_open'	=>		"<ul class='pagination pull-right'>",
								'full_tag_close'=>		"</ul>",
								'next_tag_open'=>		"<li>",
								'next_tag_close'=>		"</li>",
								'prev_tag_open'=>		"<li>",
								'prev_tag_close'=>		"</li>",
								'num_tag_open'=>		"<li>",
								'num_tag_close'=>		"</li>",
								'cur_tag_open'=>		"<li class='active'><a>",
								'cur_tag_close'=>		"</a></li>",


							];
			$this->pagination->initialize($config);
			$paper	=	$this->select->get_series_paper($config['per_page'],$this->uri->segment(4),$array);
			$array	=	array('paper'	=>	$paper);
			$this->load->view('user/viewpapers',['array'	=>	$array]);
		}
		public function startTest() {
			$paperId	=	$this->input->post('paperId');
			$array = array(
				'paper_id'	=>	$paperId,
				'user_id'		=>	$_SESSION['logged_id'],
				'completed' =>	true
			);
			$testTaken	=	$this->select->checkTestTaken($array);
			if(!$testTaken) {
				$array		=	array('paper_id'	=>	$paperId);
				$paper		=	$this->select->get_one_paper($array);
				echo $paper['paper_instruction'];
			} else {
				echo false;
			}
		}
	}

?>
