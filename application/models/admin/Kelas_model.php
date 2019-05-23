<?php

class Kelas_model  extends CI_model {
  public function getAllKelas()
  {
    return $this->db->get('Kelas')->result_array();
  }

  public function tambahKelas()
  {
    $data =[
      "kd_kelas" => $this->input->post('kd_kelas'),
      "kelas" => $this->input->post('kelas'),
      "golongan" => $this->input->post('golongan'),
     
    ];

    $this->db->insert('kelas', $data);
  }

  public function hapusKelas($kd_kelas)
  {
    $this->db->where('kd_kelas', $kd_kelas);
    $this->db->delete('kelas');
  }

  public function getKelasBykd_kelas($kd_kelas)
  {
     return $this->db->get_where('kelas', ['kd_kelas' => $kd_kelas])->row_array();
  }

  public function ubahKelas()
  {
    $data =[
      "kd_kelas" => $this->input->post('kd_kelas'),
      "kelas" => $this->input->post('kelas'),
      "golongan" => $this->input->post('golongan'),
      
    ];
    $this->db->where('kd_kelas', $this->input->post('kd_kelas'));
    $this->db->update('kelas', $data);
  }

  public function cariKelas()
  {
    $keyword = $this->input->post('keyword', true);
    $this->db->like('kd_kelas', $keyword);
    $this->db->or_like('kelas', $keyword);
    $this->db->or_like('golongan', $keyword);
   
    return $this->db->get('kelas')->result_array();
  }
}
