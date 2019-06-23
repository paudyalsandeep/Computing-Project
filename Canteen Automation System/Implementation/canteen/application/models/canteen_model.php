<?php

class Canteen_model extends CI_Model
{
    public function get_item()
    {
        $query=$this->db->get('item');
        return $query->result();
    }

    public function insert_cart($data)
    {
        $this->db->insert("cart", $data);
    }
}

?>