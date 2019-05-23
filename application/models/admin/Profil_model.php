<?php

class Profil_model  extends CI_model {
  public function getAllProfil()
  {
    return $this->db->get('profil')->result_array();
  }

  public function tambahProfil()
  {
    $data =[
      "visi" => $this->input->post('visi'),
      "misi" => $this->input->post('misi'),
      "sejarah" => $this->input->post('sejarah'),
      "sambutan" => $this->input->post('sambutan'),
    ];

    $this->db->insert('profil', $data);
  }

  public function hapusProfil($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('profil');
  }

  public function getProfilByid($id)
  {
    return $this->db->get_where('profil', ['id' => $id])->row_array();
  }

  public function ubahProfil()
  {
    $data =[
      "visi" => $this->input->post('visi'),
      "misi" => $this->input->post('misi'),
      "sejarah" => $this->input->post('sejarah'),
      "sambutan" => $this->input->post('sambutan'),
    ];
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('profil', $data);
  }

  public function cariProfil()
  {
    $keyword = $this->input->post('keyword', true);
    $this->db->like('nama', $keyword);
    $this->db->or_like('nuptk', $keyword);
    $this->db->or_like('alamat', $keyword);
    $this->db->or_like('email', $keyword);
    $this->db->or_like('pendidikan', $keyword);
    return $this->db->get('profil')->result_array();
  }
}
