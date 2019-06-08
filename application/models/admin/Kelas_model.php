<?php

class Kelas_model extends CI_Model{
  var $k="kelas";
  public function getAllKelas()
  {
    $this->db->select('*');
    $this->db->from('kelas');
    $this->db->join('jurusan', 'kelas.id_jurusan = jurusan.id_jurusan');

    $query = $this->db->get();
    return $query->result_array();
  }
  public function getById($kd_kelas)
  {
    return $this->db->get_where('kelas', ['kd_kelas' => $kd_kelas])->row_array();
  }
  function delete($kd_kelas){
    $this->db->where('kd_kelas', $kd_kelas);
    $this->db->delete('kelas');
  }
  public function tambah($data)
  {
    return $this->db->insert($this->k,$data);
  }
  function update($kd_kelas,$data){
    $this->db->where($kd_kelas);
    return $this->db->update($this->k,$data);
  }
}
