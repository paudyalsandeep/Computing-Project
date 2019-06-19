<?php

class Registration_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    public function insert($data)
    {

        $condition = "InstituteID =" . "'" . $data['InstituteID'] . "'";
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 0) 
		{
		$this->db->insert('users',$data);
		if ($this->db->affected_rows() > 0) //from here affected data can be known
		{
			return true;
		}
    }
    
    /*public function register($user)
    {
        return $this->db->insert('users', $user);
    }*/
    
}
}
