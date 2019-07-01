<?php

class Nilai_model extends CI_Model{
  var $u="nilai";
  public function getAllJurusan()
  {
    return $this->db->get('Jurusan')->result_array();
  }
  public function getNilaiSiswaBy($nipd)
  {
    return $this->db->get_where('nilai', ['nipd' => $nipd])->row_array();
  }
  public function getSiswaBykd($kd_kelas)
  {
    return $this->db->get_where('siswa', ['kd_kelas' => $kd_kelas])->result_array();
  }
  public function getNilaiByKelas($kd_kelas)
  {
    $this->db->select('siswa.nipd,siswa.gambar,siswa.nama,
      ,nilai.nilai,kelas.kelas,kelas.golongan,jurusan.jurusan')
    ->join('nilai','nilai.nipd=siswa.nipd','left')
    ->join('kelas','kelas.kd_kelas=siswa.kd_kelas')
    ->join('jurusan','jurusan.id_jurusan=kelas.id_jurusan');
    // $this->db->where('kd_kelas',$kd_kelas);
    return $this->db->get_where('siswa', ['kelas.kd_kelas' => $kd_kelas])->result_array();
  }
  public function getAllKelas()
  {
    $this->db->select('siswa.nipd,siswa.gambar,siswa.nama,
      ,nilai.nilai,kelas.kelas,kelas.golongan,jurusan.jurusan')
    ->join('nilai','nilai.nipd=siswa.nipd','left')
    ->join('kelas','kelas.kd_kelas=siswa.kd_kelas')
    ->join('jurusan','jurusan.id_jurusan=kelas.id_jurusan');
    return $this->db->get('siswa')->result_array();
    // return $this->db->get('kelas')->result_array();
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
  public function tambah($nipd,$data)
  {
    $this->db->where($nipd);
    return $this->db->insert($this->u,$data);
  }
  function update($nipd,$data){
    $this->db->where($nipd);
    return $this->db->update($this->u,$data);
  }
}
