<?php


class Beranda extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->helper('form');
    $this->load->model('Beranda_model');
    $this->load->database();
  }
  public function index()
  {
    $data['judul'] = 'Beranda | SMK Puspabangsa 2 Siliragung';
    $data['dt_beranda'] = $this->Beranda_model->getAllBeranda ();
    $data['berita'] = $this->Beranda_model->getAllBerita ();

    $this->load->view('templates/header', $data);
    $this->load->view('beranda/index.php', $data);
    $this->load->view('templates/footer');
  }

}
