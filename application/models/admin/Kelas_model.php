<?php

class Kelas_model extends CI_Model{
  var $k="kelas";
  public function getAllKelas()
  {
    $this->db->select('kelas.kelas,kelas.golongan,jurusan.id_jurusan,jurusan.jurusan,')
    ->join('jurusan','jurusan.id_jurusan=kelas.id_jurusan');
    return $this->db->get('kelas')->result_array();
    // return $this->db->get('kelas')->result_array();
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
