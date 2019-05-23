<?php


class Profil extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->helper('form');
    $this->load->model('Profil_model');
    $this->load->database();
  }
  public function index()
  {
    $data['judul'] = 'Visi, Misi dan Tujuan | SMK Puspabangsa 2 Siliragung';
    $data['profil'] = $this->Profil_model->getAllInfo(1);
    $data['berita'] = $this->Profil_model->getAllBerita();

    $this->load->view('templates/header', $data);
    $this->load->view('profil/index', $data);
    $this->load->view('templates/right', $data);
    $this->load->view('templates/footer');
  }
  public function guru()
  {
    $data['judul'] = 'Guru dan Tenaga Kependidikan | SMK Puspabangsa 2 Siliragung';
    $data['guru'] = $this->Profil_model->getAllGuru();
    $data['berita'] = $this->Profil_model->getAllBerita();
    $data['detail'] = $this->Profil_model->getDetail('$nuptk');

    $this->load->view('templates/header', $data);
    $this->load->view('profil/guru', $data);
    $this->load->view('templates/right', $data);
    $this->load->view('templates/footer');
  }
  public function struktur()
  {
    $data['judul'] = 'Guru dan Tenaga Kependidikan | SMK Puspabangsa 2 Siliragung';
    $data['guru'] = $this->Profil_model->getAllGuru();
    $data['berita'] = $this->Profil_model->getAllBerita();
    $data['detail'] = $this->Profil_model->getDetail('$nuptk');

    $this->load->view('templates/header', $data);
    $this->load->view('profil/struktur', $data);
    // $this->load->view('templates/right', $data);
    $this->load->view('templates/footer');
  }

  public function detail()
  {
    // echo $_POST['nuptk'];
    echo json_encode($this->Profil_model->getDetail($_POST['nuptk']));

  }

}
