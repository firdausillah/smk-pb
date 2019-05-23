<?php

class Profil_model extends CI_model{
  public function getAllInfo($id)
	{
    return $this->db->get_where('profil', ['id' => $id])->row_array();
	}
  public function getAllBerita()
  {
    return $this->db->get('berita')->result_array();
  }
  public function getAllGuru()
  {
    return $this->db->get('guru')->result_array();
  }
  public function getDetail($nuptk)
  {
    return $this->db->get_where('guru', ['nuptk' => $nuptk])->row_array();
  }
}
