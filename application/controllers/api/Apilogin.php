<?php
class Apilogin extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->database();
  }

  public function index(){
    $data = $this->db->where(['username'=>$_POST['username'],'password'=>$_POST['password'],'status'=>'aktif','level'=>'siswa'])->get('user')->row();
    $response = ['status'=>500,'message'=>'Internal Server Errors.'];
    $bio = $this->db->where('nipd',$_POST['username'])->get('siswa')->row();
    if(!empty($bio)){
      $response=['status'=>200,'message'=>'Selamat Datang '.$bio->nama,'biodata'=>$bio];
    }else{
      $response=['status'=>303,'message'=>'Username Tidak ditemukan. Mohon Periksa kembali. '];
    }
    echo json_encode($response);
  }

}
