<?php 

Class Login_model extends CI_Model
{

public function login($username,$password) 

{
        $sql="select * from users where
         email = '$username' && password = '$password' ";
         $result =$this->db->query($sql);
         $count=$result->num_rows();

         if ($count>0) 
         {
         	return True;
         }

         else
         {
         	return False;
         }

	}
	public function getid($username,$password)
	{

  	 	 $this->db->select('email');
    	$this->db->where('email',$username);
    		$this->db->where('password',$password);
   		 return $this->db->get('users');
	}

/*	public function getname($username,$password)
	{

  	 	 $this->db->select('fname');
    	$this->db->where('username',$username);
    		$this->db->where('password',$password);
   		 return $this->db->get('registration');

   		 
	}*/
	
}



