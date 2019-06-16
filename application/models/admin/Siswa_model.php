<?php

class Siswa_model extends CI_Model{
  var $u="siswa";
  public function getAllJurusan()
  {
    return $this->db->get('Jurusan')->result_array();
  }
  public function getAllSiswa()
  {
    return $this->db->get('siswa')->result_array();
  }
  public function getSiswaBy($nipd)
  {
    return $this->db->get_where('siswa', ['nipd' => $nipd])->row_array();
  }
  public function getSiswaByKelas($kd_kelas)
  {
    return $this->db->get_where('siswa', ['kd_kelas' => $kd_kelas])->result_array();
  }
  public function getAllKelas()
  {
    return $this->db->get('kelas')->result_array();
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
  public function getToDelete($nipd)
  {
    $this->db->where($nipd);
    return $this->db->get($this->u);
  }
  function delete($nipd){
    $this->db->where($nipd);
    return $this->db->delete($this->u);
  }
  public function tambah($data)
  {
    return $this->db->insert($this->u,$data);
  }
  function update($nipd,$data){
    $this->db->where($nipd);
    return $this->db->update($this->u,$data);
  }
}
