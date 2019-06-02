<?php

class Dt_user extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('admin/Dt_user_model');
    $this->load->helper(array('url'));
    $this->load->database();
  }

  public function index()
  {
    $data['judul'] = 'Data User | Admin';
    $data['users'] = $this->Dt_user_model->getAllUser();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/dt_user/index', $data);
    $this->load->view('admin/templates/footer');
  }

  public function delete($id)
  {
    $this->Dt_user_model->deleteUser($id);
    redirect('admin/dt_user');
  }

  public function tambah()
  {
    $data['judul'] = 'Tambah User | Admin';
    $data['users'] = $this->Dt_user_model->getAllUser();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/dt_user/tambah', $data);
    $this->load->view('admin/templates/footer');
  }

  public function detail($id)
  {
    $data['judul'] = 'Detail Data User | Admin';
    $data['users'] = $this->Dt_user_model->getUserById($id);

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/dt_user/detail', $data);
    $this->load->view('admin/templates/footer');
  }
}
