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
        print_r($data);
        exit;
        $condition = "InstituteID =" . "'" . $data['insID'] . "'";
		$this->db->select('*');
		$this->db->from('registration');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 0) 
		{
		$this->db->insert('registration',$data);
		if ($this->db->affected_rows() > 0) //from here affected data can be known
		{
			return true;
		}
        /*$query = $this->db->get('users');
        return $query->result();*/
    }
    
    /*public function register($user)
    {
        return $this->db->insert('users', $user);
    }*/
    
}
}
