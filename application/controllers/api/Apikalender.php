<?php
class Apikalender extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->database();
  }

  public function index(){
    $data = file_get_contents('uploads/file/kalender/COBAPDF.pdf');
    echo base64_encode($data);
  }
  function nilai($nipd){
    $data = file_get_contents("uploads/file/nilai/Nilai_$nipd.pdf");
    echo base64_encode($data);
  }

}