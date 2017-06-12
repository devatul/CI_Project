<?php
	class Delete extends CI_Model
	{
		public function removecart($cart_id)
		{
			if($this->db->where('cart_id', $cart_id)
					->delete('cart'))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		public function deletequestion($q_id)
		{
			if($this->db->where('q_id', $q_id)
					->delete('ques'))
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
