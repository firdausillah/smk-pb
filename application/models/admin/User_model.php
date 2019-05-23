<?php

class User_model  extends CI_model {
  public function getAllUser()
  {
    return $this->db->get('user')->result_array();
  }

  public function tambahUser()
  {
    $data =[
      "username" => $this->input->post('username'),
      "password" => $this->input->post('password'),
      "level" => $this->input->post('level')
    ];

    $this->db->insert('user', $data);
  }

  public function hapusUser($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('user');
  }

  public function getUserById($id)
  {
    return $this->db->get_where('user', ['id' => $id])->row_array();
  }

  public function ubahUser()
  {
    $data =[
      "username" => $this->input->post('username'),
      "password" => $this->input->post('password'),
      "level" => $this->input->post('level')
    ];
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('user', $data);
  }

  public function cariUser()
  {
    $keyword = $this->input->post('keyword', true);
    $this->db->like('username', $keyword);
    $this->db->or_like('level', $keyword);
    $this->db->or_like('status', $keyword);
    return $this->db->get('user')->result_array();
  }
}
