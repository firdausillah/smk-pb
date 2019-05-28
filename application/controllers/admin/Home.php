<?php

class Home extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('admin/Home_model');

  }
  public function index()
  {
    $data['judul'] = 'Home | Admin';
    $data['tabel'] = 'Home';
    

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/home');
    $this->load->view('admin/templates/footer');
  }
}
