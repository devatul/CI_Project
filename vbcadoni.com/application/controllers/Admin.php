<?php
	class Admin extends CI_Controller
	{
		public function __construct()
		{
			parent ::__construct();
			if(!$this->session->userdata('admin_id'))
			{
				return redirect ('adminlogin');
			}
			$this->load->model('select');
			$this->load->model('update');
			$this->load->model('insert');
			date_default_timezone_set('Asia/kolkata');
		}
		public function index()
		{
			$this->load->view('admin/index');
		}
		
		public function logout()
		{
			 $this->session->unset_userdata('admin_id');		 
			 return redirect ('adminlogin');	 
		}
		public function course()
		{
			$this->load->library('pagination');
			$config		=	[
								'base_url'		=>		base_url('admin/course'),
								'per_page'		=>		'5',
								'total_rows'	=>		$this->select->count_all_course(),
								'full_tag_open'	=>		"<ul class='pagination'>",
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
			$data	=	$this->select->all_course($config['per_page'],$this->uri->segment(3));
			$this->load->view('admin/courses',['data'	=>	$data]);
		}
		public function addcourse()
		{
			$this->load->view('admin/addcourse');
		}
		public function storecourse()
		{
			$array						=	$this->input->post();			 
			$array['course_image']		=	$_FILES['course_image']['name'];			
			$name						=	strtolower($array['course_name']);			 
			$data						=	preg_replace('/[^A-Za-z0-9-]+/','-', trim(strtolower($array['course_name'])," "));
			$baseslug					=	$data;	
			$check						=	array('course_slug'		=>		$data);
			$j=1;
			while($this->select->checkcourse($check))
			{				
				$data	=	$baseslug.'-'.$j;				
				$check	=	array('course_slug'		=>		$data);
				$j++;
			}
			$array['course_slug']		=	$data;
			if($course_id	=	$this->insert->insert_table($array,'courses'))
			{
				mkdir('./img/courses/'.$course_id.'/');
                if (move_uploaded_file($_FILES['course_image']['tmp_name'],"./img/courses/$course_id/".$array['course_image']))
                {
					$this->session->set_flashdata('errmsg','<div class="alert alert-success">Course Added Successfully</div>');				 
                }
                else
                {
					$this->session->set_flashdata('errmsg','<div class="alert alert-danger">Image Upload error</div>');	
                }				
			}
			else
			{
				$this->session->set_flashdata('errmsg','<div class="alert alert-danger">System error</div>');	
			}
			return redirect('admin/addcourse');
			
			
		}
		
		public function editcourse()
		{
			$course_id	=	 $this->uri->segment(3);
			$array		=	array('course_id'	=>		$course_id);
			$data	=	$this->select->get_one_course($array);
			$this->load->view('admin/editcourse',['data'	=>	$data]);
		}
		
		public function update_course()
		{
			$array				=	$this->input->post();
			$preimage			=	$array['preimage'];
			$course_id			=	$array['course_id'];
			unset($array['preimage']);
			if($_FILES['course_image']['name'])
			{
				$array['course_image']		=	$_FILES['course_image']['name'];
			}
			$data						=	preg_replace('/[^A-Za-z0-9-]+/','-', trim(strtolower($array['course_name'])," "));
			$baseslug					=	$data;	
			$check						=	array(
													'course_slug'		=>		$data,
													'course_id!='		=>		$array['course_id'],
													
													);
			$j=1;
			while($this->select->checkcourse($check))
			{				
				$data	=	$baseslug.'-'.$j;				
				$check						=	array(
													'course_slug'		=>		$data,
													'course_id!='		=>		$array['course_id'],													
													);
				$j++;
			}
			$array['course_slug']		=	$data;
			echo "<pre>";
			print_r($array);
			if($this->update->update_course($course_id,$array))
			{
				if($_FILES['course_image']['name']!='')
				{
					if(!file_exists('./img/courses/'.$course_id.'/'))
					{
						mkdir('./img/courses/'.$course_id.'/'); 
					}
					unlink("./img/courses/$course_id/".$preimage);
					if (move_uploaded_file($_FILES['course_image']['tmp_name'],"./img/courses/$course_id/".$array['course_image']))
					{
						$this->session->set_flashdata('errmsg','<div class="alert alert-success">Course and Image Updated Successfully</div>');				 
					}
					else
					{
						$this->session->set_flashdata('errmsg','<div class="alert alert-danger">Image Upload error</div>');
					}
				}
				else
				{
					$this->session->set_flashdata('errmsg','<div class="alert alert-success">Course Updated Successfully</div>');	
				}				
			}
			else
			{
				$this->session->set_flashdata('errmsg','<div class="alert alert-danger">System error</div>');	
			}
			return redirect('admin/editcourse/'.$course_id);
			
			
		}
		public function testseries()
		{
			$this->load->library('pagination');
			$config		=	[
								'base_url'		=>		base_url('admin/parent'),
								'per_page'		=>		'10',
								'total_rows'	=>		$this->select->count_all_series(),
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
			$data	=	$this->select->all_series($config['per_page'],$this->uri->segment(3));			
			
			//echo"<pre>";
			//print_r($data);
			$this->load->view('admin/series',['data'	=>	$data]);
		}
		
		public function addseries()
		{
			$course	=	$this->select->get_all_course();
			$array	=	array(
								'course'	=>	$course
							); 
			$this->load->helper('form');
			$this->load->view('admin/addseries',['data'	=>	$array]);
		}
		
		public function storeparent()
		{
			$post	=	$this->input->post();
			//echo "<pre>";
			
			$array		=		array(
										'parent_id'		=>		$post['parent_id']
									);
									
			//print_r($post);
			//print_r($array);
			 
			if(!$this->select->check_parent_id($array))
			{
				if($post['child_name_2']!='')
				{
					if($post['child_school_2']=='' ||	$post['child_class_2']=='' || $post['session_name_2']=='')
					{
						$this->session->set_flashdata('errmsg','<div class="alert alert-danger">Please fill all the details for Second child also or leave the second child name blank.</div>');
						return redirect('admin/addparent');
						//array for child 2
						
					}					
				}
				//array for child 1
				$array_child_1	=	array(
													'child_name'		=>		$post['child_name_1'],
													'child_school'		=>		$post['child_school_1'],
													'child_class'		=>		$post['child_class_1'],
													'child_session'		=>		$post['session_name_1'],
													'child_parent_id'	=>		$post['parent_id'],
												);
				//insert into parent table
				$array	=	array(
									'parent_id'			=>		$post['parent_id'],
									'parent_name'		=>		$post['parent_name']
								);
				if($this->insert->insert_table($array,'parent'))
				{
					if($this->insert->insert_table($array_child_1,'child'))
					{
						$this->session->set_flashdata('errmsg','<div class="alert alert-success">Parent and a Child Data has been saved.</div>');
				 
						if($post['child_name_2']!='')
						{
							
							$array_child_2	=	array(
													'child_name'		=>		$post['child_name_2'],
													'child_school'		=>		$post['child_school_2'],
													'child_class'		=>		$post['child_class_2'],
													'child_session'		=>		$post['session_name_2'],
													'child_parent_id'	=>		$post['parent_id'],
												);
							if($this->insert->insert_table($array_child_2,'child'))
							{
								$this->session->set_flashdata('errmsg','<div class="alert alert-success">Parent and Both Child Data has been saved.</div>');
				 
							}
							echo "success";
						}
						return redirect('admin/parent');
					}
				}
				 				
			}
			else
			{
				$this->session->set_flashdata('errmsg','<div class="alert alert-danger">This parent id is already taken.Please try some other id.</div>');
				return redirect('admin/addparent');
			}
			
		}
		
		public function storeseries()
		{
		 
			$array						=	$this->input->post();			 
			$array['series_image']		=	$_FILES['series_image']['name'];			
			$name						=	strtolower($array['series_name']);			 
			$data						=	preg_replace('/[^A-Za-z0-9-]+/','-', trim(strtolower($array['series_name'])," "));
			$baseslug					=	$data;	
			$check						=	array('series_slug'		=>		$data);
			$j=1;		
			while($this->select->checkseries($check))
			{				
				$data	=	$baseslug.'-'.$j;				
				$check	=	array('series_slug'		=>		$data);
				$j++;
			}
			$array['series_slug']		=	$data;
			//echo "<pre>";
			//print_r($array);			
			if($series_id	=	$this->insert->insert_table($array,'test_series'))
			{
				mkdir('./img/series/'.$series_id.'/');
                if (move_uploaded_file($_FILES['series_image']['tmp_name'],"./img/series/$series_id/".$array['series_image']))
                {
					$this->session->set_flashdata('errmsg','<div class="alert alert-success">Test Added Successfully</div>');				 
                }
                else
                {
					$this->session->set_flashdata('errmsg','<div class="alert alert-danger">Image Upload error</div>');	
                }				
			}
			else
			{
				$this->session->set_flashdata('errmsg','<div class="alert alert-danger">System error</div>');	
			}
			return redirect('admin/testseries');
			
		}
		
		public function editseries()
		{
			$series_id	=	$this->uri->segment(3);
			
			$array		=	array('series_id'	=>	$series_id);
			if($this->select->checkseries($array))
			{
				$series	=	$this->select->get_one_series($array);
				$course	=	$this->select->get_all_course();
				$array	=	array(
								'course'	=>	$course,
								'series'	=>	$series,
							); 
				$this->load->helper('form');
				$this->load->view('admin/editseries',['data'	=>	$array]);
			}
			else
			{
				$this->session->set_flashdata('errmsg','<div class="alert alert-danger">Invalid URL</div>');	
				return redirect('admin/testseries');
			}
			
			
		}
		
		public function updateseries()
		{
			$array				=	$this->input->post();
			$preimage			=	$array['preimage'];
			$series_id			=	$array['series_id'];
			unset($array['preimage']);
			if($_FILES['series_image']['name'])
			{
				$array['series_image']		=	$_FILES['series_image']['name'];
			}
			$data						=	preg_replace('/[^A-Za-z0-9-]+/','-', trim(strtolower($array['series_name'])," "));
			$baseslug					=	$data;	
			$check						=	array(
													'series_slug'		=>		$data,
													'series_id!='		=>		$array['series_id'],													
													);
			$j=1;
			while($this->select->checkseries($check))
			{				
				$data	=	$baseslug.'-'.$j;				
				$check	=	array(
								'series_slug'		=>		$data,
								'series_id!='		=>		$array['series_id'],													
							);
				$j++;
			}
			$array['series_slug']		=	$data;
			echo "<pre>";
			print_r($array);
			if($this->update->update_series($series_id,$array))
			{
				if($_FILES['series_image']['name']!='')
				{
					if(!file_exists('./img/series/'.$series_id.'/'))
					{
						mkdir('./img/series/'.$series_id.'/'); 
					}
					unlink("./img/series/$series_id/".$preimage);
					if (move_uploaded_file($_FILES['series_image']['tmp_name'],"./img/series/$series_id/".$array['series_image']))
					{
						$this->session->set_flashdata('errmsg','<div class="alert alert-success">Test Series and Image Updated Successfully</div>');				 
					}
					else
					{
						$this->session->set_flashdata('errmsg','<div class="alert alert-danger">Image Upload error</div>');
					}
				}
				else
				{
					$this->session->set_flashdata('errmsg','<div class="alert alert-success">Test Series Updated Successfully</div>');	
				}				
			}
			else
			{
				$this->session->set_flashdata('errmsg','<div class="alert alert-danger">System error</div>');	
			}
			return redirect('admin/editseries/'.$series_id);
			
		}
		
		public function testpaper()
		{
			$this->load->library('pagination');
			$config		=	[
								'base_url'		=>		base_url('admin/testpaper'),
								'per_page'		=>		'10',
								'total_rows'	=>		$this->select->count_all_paper(),
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
			$paper	=	$this->select->all_paper($config['per_page'],$this->uri->segment(3));			
			$array	=	array(
								'paper'	=>	$paper,
							);
		//	echo"<pre>";
			//print_r($array);
			$this->load->view('admin/testpaper',['array'	=>	$array]);
			//$this->load->view('admin/testpaper');
		}
		
		public function addtestpaper()
		{
			$course	=	$this->select->get_all_course();
			$array	=	array(
								'course'	=>	$course
							); 
			$this->load->helper('form');
			$this->load->view('admin/addtestpaper',['data'	=>	$array]);
		}
		
		public function ajax_show_test_series()
		{
			$array	=	array('series_course_id'	=>	$_POST['series_course_id'] );
			$data	=	$this->select->get_all_series($array);
			foreach($data as $x)
			{
				?>
					<option value='<?php echo $x['series_id'];?>'><?php echo $x['series_name'];?></option>
				<?php
			}
		}
		
		public function storepaper()
		{
			$array	=	$this->input->post();
			$array['paper_image']=	$_FILES['paper_image']['name'];
			$data						=	preg_replace('/[^A-Za-z0-9-]+/','-', trim(strtolower($array['paper_name'])," "));
			$baseslug					=	$data;	
			$check						=	array('paper_slug'		=>		$data);
			$j=1;		
			while($this->select->checkpaper($check))
			{				
				$data	=	$baseslug.'-'.$j;				
				$check	=	array('paper_slug'		=>		$data);
				$j++;
			}
			$array['paper_slug']	=	$data;
			 echo "<pre>";
			  
			 $i=1;
			 foreach($array['paper_section'] as $x)
			 {				
				$array['paper_section_'.$i]	=$x;
				$i++;
			 }
			 $j=1;
			 foreach($array['paper_section_que'] as $x)
			 {				
				$array['paper_section_'.$j.'_que']	=$x;
				$j++;
			 }
			 
			 unset($array['paper_section']);
			 unset($array['paper_section_que']);
		 
			 print_r($array);
			
			 if($paper_id	=	$this->insert->insert_table($array,'test_paper'))
			{
			
				mkdir('./img/papers/'.$paper_id.'/');
                if (move_uploaded_file($_FILES['paper_image']['tmp_name'],"./img/papers/$paper_id/".$array['paper_image']))
                {
					$this->session->set_flashdata('errmsg','<div class="alert alert-success">Test Paper Added Successfully</div>');				 
                }
                else
                {
					$this->session->set_flashdata('errmsg','<div class="alert alert-danger">Image Upload error</div>');	
                }				
			}
			else
			{
				$this->session->set_flashdata('errmsg','<div class="alert alert-danger">System error</div>');	
			}
			return redirect('admin/testpaper');
			 
		}
		
		public function paperdetails()
		{
			$paper_id	=	$this->uri->segment(3);
			$array		=	array('paper_id'	=>	$paper_id);
			$paper		=	$this->select->get_one_paper($array);
			$array		=	array(
									'q_paper_id'		=>	$paper_id,
									'q_paper_section'	=>	'a',
									);
			$quesa	=	$this->select->get_paper_question($array);
			$array		=	array(
									'q_paper_id'		=>	$paper_id,
									'q_paper_section'	=>	'b',
									);
			$quesb	=	$this->select->get_paper_question($array);
			$array		=	array(
									'q_paper_id'		=>	$paper_id,
									'q_paper_section'	=>	'c',
									);
			$quesc	=	$this->select->get_paper_question($array);
			$array		=	array(
									'q_paper_id'		=>	$paper_id,
									'q_paper_section'	=>	'd',
									);
			$quesd	=	$this->select->get_paper_question($array);
			$array		=	array(
									'q_paper_id'		=>	$paper_id,
									'q_paper_section'	=>	'e',
									);
			$quese	=	$this->select->get_paper_question($array);
			
			
			if(count($paper))
			{
				$array	=	array(
									'paper'		=>		$paper,
									'quesa'		=>		$quesa,
									'quesb'		=>		$quesb,
									'quesc'		=>		$quesc,
									'quesd'		=>		$quesd,
									'quese'		=>		$quese,
								);
				 $this->load->view('admin/paperdetails',['array'	=>	$array]);
			}
			else
			{
				$this->session->set_flashdata('errmsg','<div class="alert alert-danger">Invalid URL.</div>');	
				return redirect('admin/testpaper');
			}			
		}
		
		public function addquestion()
		{
			$q_paper_id		=		$this->uri->segment(3);
			//echo $q_paper_id;
			$array			=		array(	'q_paper_id'	=>	$q_paper_id	);
			//check whether the given paper id does not exists in ques table
			//if the given paper id exists then return to test paper page
			if(!$this->select->checkquestion($array))
			{				 
				$data		=	array('paper_id'	=>	$q_paper_id);
				$paper	=	$this->select->get_one_paper($data);
				if($num=count($paper))
				{
					$array	=	array(
										'paper'		=>		$paper,
									);
					 $this->load->helper('form');
					 
					 $this->load->view('admin/addquestions',['array'	=>	$array]);
				}
				else
				{
					$this->session->set_flashdata('errmsg','<div class="alert alert-danger">Invalid URL.</div>');	
					return redirect('admin/testpaper');
				}
			}
			else
			{
				$this->session->set_flashdata('errmsg','<div class="alert alert-danger">Invalid URL.</div>');	
				return redirect('admin/testpaper');
			}
		}
		
		public function storequestion()
		{
			$row	=	$this->input->post();
			//echo "<pre>";
			$number_of_question	= count($row['q_optiona']);
			for($i=0;$i<$number_of_question;$i++)
			{
				if(!isset($row['q_passage'][$i]))
				{
					$row['q_passage'][$i]='';
				}
				if(!isset($row['q_name'][$i]))
				{
					$row['q_name'][$i]='';
				}
				$array		=	array(
										'q_passage'				=>		$row['q_passage'][$i],
										'q_name'				=>		$row['q_name'][$i],
										'q_optiona'				=>		$row['q_optiona'][$i],
										'q_optionb'				=>		$row['q_optionb'][$i],
										'q_optionc'				=>		$row['q_optionc'][$i],
										'q_optiond'				=>		$row['q_optiond'][$i],
										'q_optione'				=>		$row['q_optione'][$i],										 
										'q_answer'				=>		$row['q_answer'][$i],
										'q_paper_id'			=>		$row['q_paper_id'],										 
									);
				if($this->insert->insert_table($array,'ques'))
				{
					$this->session->set_flashdata('errmsg','<div class="alert alert-success">Questions Added.</div>');						
				}
			}
			return redirect('admin/paperdetails/'.$row['q_paper_id']);
			
		}
			public function dailyupdates()
		{
			$array		=		array('update_id'	=>	1);
			$update		=		$this->select->get_daily_update($array);
			$array		=		array('update'	=>	$update);
			$this->load->view('admin/dailyupdates',['array'	=>	$array]);
		}
		public function update_daily_update()
		{
			$post		=	$this->input->post();
			$update_id	=	$post['update_id'];
			echo $update_id; 
			if($this->update->update_daily_update($update_id,$post))
			{
			}
				$this->session->set_flashdata('dailyupdatesmsg','<div class="alert alert-success">Data Uodated successfully.</div>');		
			 
			return redirect('admin/dailyupdates');			 
		}
		
		public function notifications()
		{
			$array		=		array('update_id'	=>	2);
			$update		=		$this->select->get_daily_update($array);
			$array		=		array('update'	=>	$update);
			$this->load->view('admin/notifications',['array'	=>	$array]);
		}
		public function update_notifications()
		{
			$post		=	$this->input->post();
			$update_id	=	$post['update_id'];
			echo $update_id; 
			if($this->update->update_daily_update($update_id,$post))
			{
			}
			$this->session->set_flashdata('notificationsmsg','<div class="alert alert-success">Data Uodated successfully.</div>');		
			return redirect('admin/notifications');
		}
		 
 
		 
	 
	 
		
		 
	 
	 
		
	 
		
		 
		
 
		
		 
 
		 
 
	}

?>