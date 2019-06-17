<?php

class Pengumuman_model extends CI_Model{
  var $p="pengumuman";
  public function getAll()
  {
    return $this->db->get('pengumuman')->result_array();
  }
  public function getById($id)
  {
    return $this->db->get_where('pengumuman', ['id' => $id])->row_array();
  }
  public function delete($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('pengumuman');
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
