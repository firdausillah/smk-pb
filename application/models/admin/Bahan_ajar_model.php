<?php

class Bahan_ajar_model  extends CI_model {
  public function getAllBahan_ajar()
  {
    return $this->db->get('Bahan_ajar')->result_array();
  }

  public function tambahBahan_ajar()
  {
    $data =[
      "judul_bahan" => $this->input->post('judul_bahan'),
      "link" => $this->input->post('link'),
      
    ];

    $this->db->insert('bahan_ajar', $data);
  }

  public function hapusBahan_ajar($id_bahan)
  {
    $this->db->where('id_bahan', $id_bahan);
    $this->db->delete('bahan_ajar');
  }

  public function getBahan_ajarByid_bahan($id_bahan)
  {
    return $this->db->get_where('bahan_ajar', ['id_bahan' => $id_bahan])->row_array();
  }

  public function ubahBahan_ajar()
  {
    $data =[
      "judul_bahan" => $this->input->post('judul_bahan'),
      "link" => $this->input->post('link'),
    ];
    $this->db->where('id_bahan', $this->input->post('id_bahan'));
    $this->db->update('bahan_ajar', $data);
  }

  public function cariJurusan()
  {
    $keyword = $this->input->post('keyword', true);
    $this->db->like('jurusan', $keyword);
    $this->db->or_like('ket_jurusan', $keyword);
    
    return $this->db->get('jurusan')->result_array();
  }
}
