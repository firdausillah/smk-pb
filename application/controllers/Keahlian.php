<?php

class Keahlian extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->database();

  }

  public function multimedia()
  {
    $data['judul'] = 'Multimedia | SMK Puspabangsa 2 Siliragung';

    $this->load->view('templates/header',$data);
    $this->load->view('keahlian/multimedia',$data);
    $this->load->view('templates/footer',$data);
  }
}
