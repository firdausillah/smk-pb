<?php

class Home_model extends CI_model{
  public function countdata($tb)
  {
     $this->db->select_sum('jml');
     $query = $this->db->get($tb);
     if($query->num_rows()>0)
     {
       return $query->row()->jml;
     }
     else
     {
       return 0;
     }
  }
}
