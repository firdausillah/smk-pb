<?php
class Apipengumuman extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->database();
  }

  public function index(){
    $data = $this->db->order_by('tanggal','DESC')->get('pengumuman')->result();
    $response = ['status'=>500,'message'=>'Internal Server Errors.'];
    if(!empty($data)){
      $response=['status'=>200,'message'=>'OK','data'=>$data];
    }else{
      $response=['status'=>303,'message'=>'Tidak ada pengumuman'];
    }
    echo json_encode($response);
  }

}
