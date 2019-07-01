<?php

class Siswa extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('admin/Siswa_model');
    $this->load->model('admin/Nilai_model');
    if(strtolower($this->session->userdata('level'))!='siswa'){
      redirect('login/logout');
    }
  }

  public function index(){
    $data['judul'] = 'Biodata Siswa';
    $data['siswa'] = $this->Siswa_model->getSiswaBy($this->session->userdata('username'));

    $this->load->view('admin/templates/header', $data);
    $this->load->view('siswa/index', $data);
    $this->load->view('admin/templates/footer');
  }
}
