<?php

class Cart_model extends CI_Model
{
	public function get_cart()
    {
        $query=$this->db->get('cart');
        return $query->result();
    }

    public function order_payment($data)
    {
        $this->db->insert("orders", $data);
    }
}