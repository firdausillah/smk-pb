<?php

class Informasi_model extends CI_model{
  public function getAllPengumuman()
	{
		return $this->db->get('pengumuman')->result_array();
	}

  public function getAllBerita()
	{
		return $this->db->get('berita')->result_array();
	}
  public function getKurikulum()
	{
		return $this->db->get('kurikulum')->result_array();
	}
	public function getProfil_umum()
	{
		return $this->db->get('profil_umum')->result_array();
	}
  // public function getKemitraan()
	// {
	// 	return $this->db->get('kemitraan')->result_array();
	// }
}
