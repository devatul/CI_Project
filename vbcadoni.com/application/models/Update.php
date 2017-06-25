<?php
	class Update extends CI_Model
	{
		public function update_course($course_id,$array)
		{
			if($this->db->where('course_id',$course_id) 
					->update('courses', $array))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		public function update_series($series_id,$array)
		{
			if($this->db->where('series_id',$series_id) 
					->update('test_series', $array))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		public function update_daily_update($update_id,$array)
		{
			if($this->db->where('update_id',$update_id) 
					->update('daily_updates', $array))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		public function update_table($table_name,$column_name,$column_data,$array)
		{
			if($this->db->where($column_name,$column_data) 
					->update($table_name, $array))
			{
				return true;
			}
			else
			{
				return false;
			}		 
		}
	}
?>