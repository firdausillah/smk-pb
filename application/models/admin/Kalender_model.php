<?php

class Kalender_model extends CI_model{
  var $b="kalender";
  public function getAll()
  {
    return $this->db->get('kalender')->result_array();
  }
  public function getBy($id)
  {
    return $this->db->get_where('kalender', ['id' => $id])->row_array();
  }
  public function getToDelete($id)
  {
    $this->db->where($id);
    return $this->db->get($this->b);
  }
  function delete($id){
 		$this->db->where($id);
 		return $this->db->delete($this->b);
 	}
  public function tambah($data)
  {
    return $this->db->insert($this->b,$data);
  }
  function update($id,$data){
    $this->db->where($id);
    return $this->db->update($this->b,$data);
  }
}
