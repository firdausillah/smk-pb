<?php

class Dt_user_model extends CI_model{
  public function getAllUser()
  {
    return $this->db->get('user')->result_array();
  }

  public function getUserById($id)
  {
    return $this->db->get_where('user', ['id' => $id])->row_array();
  }

  public function deleteUser($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('user');
  }
}
