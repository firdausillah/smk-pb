<?php

class Dt_guru_model extends CI_model{
  var $u="guru";
  public function getAllGuru()
  {
    return $this->db->get('guru')->result_array();
  }
  public function getGuruByNuptk($nuptk)
  {
    return $this->db->get_where('guru', ['nuptk' => $nuptk])->row_array();
  }
  public function deleteGuru($nuptk)
  {
    $this->db->where('nuptk', $nuptk);
    $this->db->delete('guru');
  }
  public function tambah($data)
  {
    return $this->db->insert($this->u,$data);
  }
  function update($nuptk,$data){
    $this->db->where($nuptk);
    return $this->db->update($this->u,$data);
  }
}
