<?php

class Login_model extends CI_model{

  function login($user,$pass){

    $this->db->select('username, password, level');
    $this->db->from('user');
    $this->db->where('username',$user);
    $this->db->where('password',$pass);
    $this->db->limit(1);

    $query = $this->db->get();

    if($query->num_rows()==1){
      return $query->result();
    }else {
      return false;
    }
  }
}
