<?php

class Siswa_model  extends CI_model {
  public function getAllSiswa()
  {
    return $this->db->get('siswa')->result_array();
  }
  public function getAllKelas()
  {
    return $this->db->get('kelas')->result_array();
  }

  public function getKelas($id_jurusan)
  {
      return $this->db->get_where('kelas', ['id_jurusan => $id_jurusan'])->row_array();
  }

  public function getAllJurusan()
  {
    return $this->db->get('jurusan')->result_array();
  }
  function menu(){
    $menu=array();
    foreach ($this->db->get('jurusan')->result() as $jurusan) {
      $submenu=array();
      foreach ($this->db->where('id_jurusan',$jurusan->id_jurusan)
                        ->get('kelas')->result() as $kelas) {
        $submenu[$kelas->kd_kelas] = "$kelas->kelas $kelas->golongan";
      }
      $menu[$jurusan->id_jurusan] = [
        'name' => $jurusan->jurusan,
        'submenu' => $submenu
      ];
    }
    return $menu;
  }
}
