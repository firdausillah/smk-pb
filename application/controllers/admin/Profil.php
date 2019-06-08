<?php

class Profil extends CI_Controller{
  public function __construct(){
    parent::__construct();

    $this->load->helper(array('url'));
    $this->load->database();
    $this->load->model('admin/Profil_model');
    $this->load->helper('form');
    $this->load->model('Profil_model','prfl');
  }

  public function index()
  {
    $data['judul'] = 'Data Profil | Admin';
    $data['profil'] = $this->Profil_model->getById(1);

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/profil/index', $data);
    $this->load->view('admin/templates/footer');
  }
  public function edit($id)
  {
    $data['judul'] = 'Edit Data Profil | Admin';
    $data['profil'] = $this->Profil_model->getById($id);

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/profil/edit', $data);
    $this->load->view('admin/templates/footer');
  }
  public function tambah()
  {
    $data['judul'] = 'Tambah Data Profil | Admin';
    $data['profil'] = $this->Profil_model->getAll();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/profil/tambah', $data);
    $this->load->view('admin/templates/footer');
  }
  public function save()
  {
    $pos = $_POST;
    if($this->prfl->tambah($pos)){
      $this->session->set_flashdata('info','Data Behasil Ditambah !');
      redirect('admin/profil');
    }else {
      exit('Insert Data Error.');
    }
  }
  public function save_edit($id)
  {
    $id	= $this->input->post('id');
    $data = $_POST;
    $this->db->where('id',$id);
    $this->db->update('profil',$data);
    if ($this->db->affected_rows()){
      $this->session->set_flashdata('info','Data Behasil Diupdate !');
      redirect('admin/profil');
    }
  }
  public function delete($id)
  {
    $this->Profil_model->delete($id);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('admin/profil');
  }
}
