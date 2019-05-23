<?php

class Siswa_model extends CI_model{
  	var $ssw="siswa";

  public function getAllInfo($id)
	{
    return $this->db->get_where('profil', ['id' => $id])->row_array();
	}
  public function getAllKelas()
  {
    return $this->db->query('select kd_kelas, kelas, golongan, jurusan from kelas inner join jurusan on kelas.id_jurusan=jurusan.id_jurusan')->result_array();
  }
  function add($data){
 		return $this->db->insert($this->ssw,$data);
 	}
  function update($w,$data){
    $this->db->where($w);
    return $this->db->update($this->ssw,$data);
  }
  function siswa($nipd){
    return $this->db->get_where('siswa',array('nipd' => $nipd));
  }
}
