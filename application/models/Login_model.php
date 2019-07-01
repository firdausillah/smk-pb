<?php

class Login_model extends CI_model{

  function login($user,$pass){

    $this->db->select('user.username,user.password,user.level,user.gambar,guru.nama')
    ->join('guru','guru.nuptk=user.username');
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
  function log($user,$pass){

    $this->db->select('user.username,user.password,user.level,user.gambar,siswa.nama')
    ->join('siswa','siswa.nipd=user.username');
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
