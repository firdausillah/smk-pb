<?php

class Jurusan_model  extends CI_model {
  public function getAllJurusan()
  {
    return $this->db->get('Jurusan')->result_array();
  }

  public function tambahJurusan()
  {
    $data =[
      "jurusan" => $this->input->post('jurusan'),
      "ket_jurusan" => $this->input->post('ket_jurusan'),
      
    ];

    $this->db->insert('jurusan', $data);
  }

  public function hapusJurusan($id_jurusan)
  {
    $this->db->where('id_jurusan', $id_jurusan);
    $this->db->delete('jurusan');
  }

  public function getJurusanByid_jurusan($id_jurusan)
  {
    return $this->db->get_where('jurusan', ['id_jurusan' => $id_jurusan])->row_array();
  }

  public function ubahJurusan()
  {
    $data =[
      "jurusan" => $this->input->post('jurusan'),
      "ket_jurusan" => $this->input->post('ket_jurusan'),
    ];
    $this->db->where('id_jurusan', $this->input->post('id_jurusan'));
    $this->db->update('jurusan', $data);
  }

  public function cariJurusan()
  {
    $keyword = $this->input->post('keyword', true);
    $this->db->like('jurusan', $keyword);
    $this->db->or_like('ket_jurusan', $keyword);
    
    return $this->db->get('jurusan')->result_array();
  }
}
