<?php

class Kelas_model extends CI_Model{

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
}
