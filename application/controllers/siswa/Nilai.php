<?php

class Nilai extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('admin/Siswa_model');
    $this->load->model('admin/Nilai_model');
    if(strtolower($this->session->userdata('level'))!='siswa'){
      redirect('login/logout');
    }
  }

  public function index(){
    $data['judul'] = 'Nilai Siswa';
    $data['nilai'] = $this->Nilai_model->getNilaiSiswaBy($this->session->userdata('username'));
    // print_r($data['nilai']); exit();
    $data['siswa'] = $this->Siswa_model->getSiswaBy($this->session->userdata('username'));


    $this->load->view('admin/templates/header', $data);
    $this->load->view('siswa/nilai', $data);
    $this->load->view('admin/templates/footer');
  }
}
