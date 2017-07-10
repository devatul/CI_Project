<?php
	class Select extends CI_Model
	{
		public function checkadminlogin($array)
		{
			$q	=	$this->db->select('*')
								->where($array)
								->get('admin');
			if($row=$q->unbuffered_row())
			{
				return $row->admin_id;
			}
			else
			{
				return false;
			}
		}
		
		//count the number of schools
		public function count_all_course()
		{
			$q	=	$this->db->select('course_id')
							->get('courses');
			return $q->num_rows();
			
		}
		//count the number of tetseries
		public function count_all_series()
		{
			$q	=	$this->db->select('series_id')
							->get('test_series');
			return $q->num_rows();			
		}
		//count the number of test paper
		public function count_all_paper()
		{
			$q	=	$this->db->select('paper_id')
							->get('test_paper');
			return $q->num_rows();			
		}
		public function count_some_paper($array)
		{
			$q	=	$this->db->select('paper_id')
							->where($array)
							->get('test_paper');
			return $q->num_rows();			
		}
			
		public function all_course($limit,$offset)
		{	
			$q		=	$this->db->select('*')
									->limit($limit,$offset)
									->get('courses');
			return $q->result_array();
		}
		
		public function get_all_course()
		{	
			$q		=	$this->db->select('*')								 
									->get('courses');
			return $q->result_array();
		}
		
		public function all_series($limit,$offset)
		{	
			$q		=	$this->db->select('*')
									->limit($limit,$offset)
									->join('courses', 'courses.course_id = test_series.series_course_id')
									->order_by('series_id','DESC')
									->get('test_series');
			return $q->result_array();
		}
		public function all_paper($limit,$offset)
		{	
			$q		=	$this->db->select('*')
									->limit($limit,$offset)
									->join('courses', 'courses.course_id = test_paper.paper_course_id')
									->join('test_series', 'test_series.series_id = test_paper.paper_series_id')
									->order_by('paper_id','DESC')
									->get('test_paper');
			return $q->result_array();
		}
		public function get_one_paper($array)
		{	
			$q		=	$this->db->select('*')	
									->where($array)
									->join('courses', 'courses.course_id = test_paper.paper_course_id')
									->join('test_series', 'test_series.series_id = test_paper.paper_series_id')									 
									->get('test_paper');
			return $q->row_array();
		}
		
		public function get_all_series($array)
		{	
			$q		=	$this->db->select('*')
									->where($array)	
									->get('test_series');
			return $q->result_array();
		}
		
		public function checkcourse($array)
		{
			$q	=	$this->db->select('course_id')
							->where($array)
							->get('courses');
			if($row=$q->unbuffered_row())
			{
				return $row->course_id;
			}
			else
			{
				return false;
			}
		}
		public function checkseries($array)
		{
			$q	=	$this->db->select('series_id')
							->where($array)
							->get('test_series');
			if($row=$q->unbuffered_row())
			{
				return $row->series_id;
			}
			else
			{
				return false;
			}
		}
		public function checkpaper($array)
		{
			$q	=	$this->db->select('paper_id')
							->where($array)
							->get('test_paper');
			if($row=$q->unbuffered_row())
			{
				return $row->paper_id;
			}
			else
			{
				return false;
			}
		}
		
		public function checkquestion($array)
		{
			$q	=	$this->db->select('q_paper_id')
							->where($array)
							->get('ques');
			if($row=$q->unbuffered_row())
			{
				return $row->q_paper_id;
			}
			else
			{
				return false;
			}
		}
		
		public function list_of_series()
		{	
			$q		=	$this->db->select('*')									 
									->get('test_series');
			return $q->result_array();
		}
		 
		 
		
		public function get_one_course($array)
		{
			$q		=	$this->db->select('*')
									->where($array)
									->get('courses');
			return $q->row_array();
		}
		
		public function get_one_series($array)
		{
			$q		=	$this->db->select('*')
									->where($array)
									->get('test_series');
			return $q->row_array();
		}
		
		public function get_paper_question($array)
		{
			$q	=	$this->db->select('*')
							->where($array)
							->get('ques');
			return $q->result_array();
		}	
		
		public function checkuser($array)
		{
			$q	=	$this->db->select('user_id')
							->where($array)
							->get('users');
			if($row=$q->unbuffered_row())
			{
				return $row->user_id;
			}
			else
			{
				return false;
			}
		}
		public function checkcart($array)
		{
			$q	=	$this->db->select('cart_id')
							->where($array)
							->get('cart');
			if($row=$q->unbuffered_row())
			{
				return $row->cart_id;
			}
			else
			{
				return false;
			}
		}
		
		public function getcart($array)
		{
			$q	=	$this->db->select('*')
							->join('test_series', 'test_series.series_id = cart.cart_series_id')
							->order_by('cart_id','DESC')
							->where($array)
							->get('cart');			
			return $q->result_array();			 
		}
		
		public function get_one_user($array)
		{
			$q	=	$this->db->select('*')
							->where($array)
							->get('users');
			return $q->row_array();	
		}
		
		public function get_series_paper($limit,$offset,$array)
		{
			$q	=	$this->db->select('*')
							->limit($limit,$offset)
							->join('test_series', 'test_series.series_id = test_paper.paper_series_id')
							->join('ques', 'ques.q_paper_id = test_paper.paper_id')
							->group_by('paper_id')
							->where($array)
							->get('test_paper');
			return $q->result_array();
		}
		public function get_daily_update($array)
		{
			$q	=	$this->db->select('*')
							->where($array)
							->get('daily_updates');
			return $q->row_array();
		}
		 
		 
	}
?>