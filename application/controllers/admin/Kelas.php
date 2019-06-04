<?php

class Kelas extends CI_Controller{
  public function __construct(){
    parent::__construct();

    $this->load->helper(array('url'));
    $this->load->database();
    $this->load->model('admin/Kelas_model');
    $this->load->helper('form');
    $this->load->model('Kelas_model','kls_mdl');
  }

  public function index()
  {
    $data['judul'] = 'Data Kelas | Admin';
    $data['kelas'] = $this->Kelas_model->getAllKelas();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/kelas/index', $data);
    $this->load->view('admin/templates/footer');
  }
  public function edit($kd_kelas)
  {
    $data['judul'] = 'Edit Data Kelas | Admin';
    $data['kelas'] = $this->Kelas_model->getById($kd_kelas);

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/kelas/edit', $data);
    $this->load->view('admin/templates/footer');
  }
}
