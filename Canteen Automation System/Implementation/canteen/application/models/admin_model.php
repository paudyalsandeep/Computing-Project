<?php

class Admin_model extends CI_Model
{
	public function get_users()
    {
        $query=$this->db->get('users');
        return $query->result();
    }

    public function insert_college($data)
    {
        $this->db->insert("college", $data);
    }

    public function get_college()
    {
        $query=$this->db->get('college');
        return $query->result();
    }

    public function insert_role($data)
    {
        $this->db->insert("role", $data);
    }

    public function get_role()
    {
        $query=$this->db->get('role');
        return $query->result();
    }

    public function insert_item($data)
    {
        $this->db->insert("item", $data);
    }

    public function get_item()
    {
    	$query=$this->db->get('item');
        return $query->result();
    }
}


?>