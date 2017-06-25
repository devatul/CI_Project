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
		public function submittest()
		{
			$this->load->model('insert');
			$post	=	$this->input->post();
			$paper_slug	=	$post['paper_slug'];
			unset($post['paper_slug']);
			echo "<pre>";
			 
			$i=0;
			foreach($post['ans_q_id'] as $x)
			{
				$array [$i]['ans_q_id']=$post['ans_q_id'][$i];
				$array [$i]['ans_answer']=$post['ans_answer'][$i];
				$array [$i]['ans_user_id']=$post['ans_user_id'];
				$i++;
			}
			if($this->insert->insert_batch($array,'answer'))
			{
				return redirect(base_url('paper/submit/'.$paper_slug));
			}
			else
			{
					 return redirect(base_url());
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