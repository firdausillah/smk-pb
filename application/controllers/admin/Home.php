<?php

class Home extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('admin/Home_model');
    $this->load->model('admin/Siswa_model');
  }

  public function index()
  {
    $data['judul'] = 'Home | Admin';
    $data['jurusan'] = $this->Siswa_model->getAllJurusan();
    $data['kelas'] = $this->Siswa_model->getAllKelas();
    $data['menu'] = $this->Siswa_model->menu();
    $data['user'] = $this->session->userdata();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/home');
    $this->load->view('admin/templates/footer');
  }
}
