<?php
class M_user extends CI_Model
{
   public function cek_login($username, $password)
   {
       $data = array(
           'username' => $username,
           'password' => $password
       );
       return $this->db->get_where('user', $data);
   }

   public function regis($data)
   {
    return $this->db->insert('user', $data);
   }
}
