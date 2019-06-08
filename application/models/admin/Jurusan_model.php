<?php

class Jurusan_model extends CI_Model{
  var $j="jurusan";
  public function getAll()
  {
    return $this->db->get('jurusan')->result_array();
  }
  public function getById($id_jurusan)
  {
    return $this->db->get_where('jurusan', ['id_jurusan' => $id_jurusan])->row_array();
  }
  public function delete($id_jurusan)
  {
    $this->db->where('id_jurusan', $id_jurusan);
    $this->db->delete('jurusan');
  }
  public function tambah($data)
  {
    return $this->db->insert($this->j,$data);
  }
  function update($id_jurusan,$data){
    $this->db->where($id_jurusan);
    return $this->db->update($this->j,$data);
  }
}
