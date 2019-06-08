<?php

class Profil_model extends CI_Model{
  var $p="profil";
  public function getAll()
  {
    return $this->db->get('profil')->result_array();
  }
  public function getById($id)
  {
    return $this->db->get_where('profil', ['id' => $id])->row_array();
  }
  public function delete($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('profil');
  }
  public function tambah($data)
  {
    return $this->db->insert($this->p,$data);
  }
  function update($id,$data){
    $this->db->where($id);
    return $this->db->update($this->p,$data);
  }
}
