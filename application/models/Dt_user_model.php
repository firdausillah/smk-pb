<?php

class Dt_user_model extends CI_model{
  public function getAllUser()
  {
    return $this->db->get('user')->result_array();
  }
}
