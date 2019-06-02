<?php

class Dt_guru extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('admin/Dt_guru_model');
    $this->load->helper(array('url'));
    $this->load->database();
    $this->load->helper('form');
    $this->load->model('Dt_guru_model','gru_mdl');
  }

  public function index()
  {
    $data['judul'] = 'Data User | Admin';
    $data['guru'] = $this->Dt_guru_model->getAllGuru();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/dt_guru/index', $data);
    $this->load->view('admin/templates/footer');
  }
