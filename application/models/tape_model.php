<?php
class Tape_model extends Model
{
	function Tape_model()
	{
		parent::Model();
	}
	
	function get()
	{
		$query = $this->db->get('tapes');
		
		if ($query->num_rows() == 0)
		{
			return "Nothing here!";
		} else
		{
			return $query->result();
		}
	}
	
	function create($data)
	{
		$query = $this->db->insert('tapes', $data);
	}
	
	function update($data)
	{
		$this->db->where('tape_id', $data['tape_id']);
		$query = $this->db->update('tapes', $data);
	}
}
?>