<?php
	class Paper extends CI_Controller
	{
		public function taketest()
		{
			$this->load->model('select');
			$paper_slug	=	$this->uri->segment(3);
			$array		=	array('paper_slug'	=>	$paper_slug);
			$paper		=	$this->select->get_one_paper($array);

			$paper_id	=	$paper['paper_id'];
			$array		=	array('paper_id'	=>	$paper_id);
			$paper		=	$this->select->get_one_paper($array);

			$array		=	array('q_paper_id'	=>	$paper_id);
			$ques		=	$this->select->get_paper_question($array);
			$array		=	array('user_id'		=>	$_SESSION['logged_id']);
			$user		=	$this->select->get_one_user($array);

			if(!isset($_COOKIE[$paper['paper_id']]))
			{
				//echo "again";
				setcookie($paper['paper_id'], $paper['paper_duration']*60, time() + (86400 * 1), "/");
			}
			//echo $_COOKIE[$paper['paper_id']];

			if($num=count($paper))
			{
				$array	=	array(
									'paper'		=>		$paper,
									'ques'		=>		$ques,
									'user'		=>		$user,
								);
				$this->load->view('user/taketest',['array'	=>	$array]);
			}
			else
			{
				$this->session->set_flashdata('errmsg','<div class="alert alert-danger">Invalid URL.</div>');
				//return redirect('admin/testpaper');
			}

		}
		public function saveTest()
		{
			$this->load->model('insert');
			$this->load->model('update');
			$data	=	$this->input->post();
			$testKey = $data['testId'];
			// print_r($data);
			// die;
			$config = array(
				'user_id' => $data['user_id'],
				'paper_id' => $data['paper_id'],
				'answer' => $data['answer'],
				'correct_ans' => $data['correct_ans'],
				'wrong_ans' => $data['wrong_ans'],
				'time_taken' => $data['time_taken'],
				'total_que' => $data['total_que'],
				'attempted_que' => $data['attempted_que'],
				'completed' => $data['completed']
			);
			// print_r($config);die;
			// $result = $this->select->get_test_result(['completed' => false])
			// echo $data['testId'].'data--------';
			// if (!$testKey){
			// 	$ab = array(
			// 		'key' => $testKey,
			// 		'done' => FALSE,
			// 		'condi' => $testKey === FALSE
			// 	);
			// 	print_r($ab);
			// }else {
			// 	echo '----';
			// }
			if(!$testKey){
				$res = $this->insert->insert_table($config,'result');
				echo $res;
				// $ab = array(
				// 	'key' => $res,
				// 	'done' => 'insert',
				// 	'condi' => $testKey == false
				// );
			} else if($this->update->update_table('result', 'id', $testKey, $config)){
				echo $testKey;
				// $ab = array(
				// 	'key' => $testKey,
				// 	'done' => 'update',
				// 	'condi' => $testKey == false
				// );
			}

		}
		public function submit()
		{
			$slug	=	$this->uri->segment(3);
			$array	=	array(
								'slug'	=>	$slug,
								);
			$this->load->view('user/submit',['array'	=>	$array]);
		}

















		public function taketest1()
		{
			$this->load->model('select');
			$paper_id	=	15;
			$array		=	array('paper_id'	=>	$paper_id);
			$paper		=	$this->select->get_one_paper($array);
			$array		=	array('q_paper_id'	=>	$paper_id);
			$ques		=	$this->select->get_paper_question($array);
			$array		=	array('user_id'		=>	$_SESSION['logged_id']);
			$user		=	$this->select->get_one_user($array);
			if($num=count($paper))
			{
				$array	=	array(
									'paper'		=>		$paper,
									'ques'		=>		$ques,
									'user'		=>		$user,
								);
				$this->load->view('user/taketest',['array'	=>	$array]);
			}
			else
			{
				$this->session->set_flashdata('errmsg','<div class="alert alert-danger">Invalid URL.</div>');
				//return redirect('admin/testpaper');
			}

		}

		public function taketest2()
		{
			$this->load->model('select');
			$paper_id	=	14;
			$array		=	array('paper_id'	=>	$paper_id);
			$paper		=	$this->select->get_one_paper($array);
			$array		=	array('q_paper_id'	=>	$paper_id);
			$ques	=	$this->select->get_paper_question($array);
			if($num=count($paper))
			{
				$array	=	array(
									'paper'		=>		$paper,
									'ques'		=>		$ques,
								);
				$this->load->view('user/taketest',['array'	=>	$array]);
			}
			else
			{
				$this->session->set_flashdata('errmsg','<div class="alert alert-danger">Invalid URL.</div>');
				//return redirect('admin/testpaper');
			}

		}
		public function taketest3()
		{
			$this->load->model('select');
			$paper_id	=	13;
			$array		=	array('paper_id'	=>	$paper_id);
			$paper		=	$this->select->get_one_paper($array);
			$array		=	array('q_paper_id'	=>	$paper_id);
			$ques	=	$this->select->get_paper_question($array);
			if($num=count($paper))
			{
				$array	=	array(
									'paper'		=>		$paper,
									'ques'		=>		$ques,
								);
				$this->load->view('user/taketest',['array'	=>	$array]);
			}
			else
			{
				$this->session->set_flashdata('errmsg','<div class="alert alert-danger">Invalid URL.</div>');
				//return redirect('admin/testpaper');
			}

		}
	}
?>
