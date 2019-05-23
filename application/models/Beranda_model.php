<?php

class Beranda_model extends CI_model{
  public function getAllBeranda()
  {
    return $this->db->get('dt_beranda')->result_array();
  }
  public function getAllBerita()
  {
    return $this->db->get('berita')->result_array();
  }

}
