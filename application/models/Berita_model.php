<?php

class Berita_model extends CI_model{
  public function getAllBeranda()
	{
		return $this->db->get('dt_beranda')->result_array();
	}

  public function getAllBerita()
	{
		return $this->db->get('berita')->result_array();
	}

  public function getDetail($id_berita)
  {
    return $this->db->get_where('berita', ['id_berita' => $id_berita])->row_array();
  }

}
