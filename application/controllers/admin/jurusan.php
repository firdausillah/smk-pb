<?php

class Jurusan extends CI_Controller{
  public function __construct(){
    parent::__construct();

    $this->load->helper(array('url'));
    $this->load->database();
    $this->load->model('admin/Jurusan_model');
    $this->load->helper('form');
    $this->load->model('Jurusan_model','jr_mdl');
  }

  public function index()
  {
    $data['judul'] = 'Data Jurusan | Admin';
    $data['jurusan'] = $this->Jurusan_model->getAll();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/jurusan/index', $data);
    $this->load->view('admin/templates/footer');
  }
  public function edit($id_jurusan)
  {
    $data['judul'] = 'Edit Data Jurusan | Admin';
    $data['jurusan'] = $this->Jurusan_model->getById($id_jurusan);

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/jurusan/edit', $data);
    $this->load->view('admin/templates/footer');
  }
  public function tambah()
  {
    $data['judul'] = 'Tambah Data Jurusan | Admin';
    $data['jurusan'] = $this->Jurusan_model->getAll();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/jurusan/tambah', $data);
    $this->load->view('admin/templates/footer');
  }
  public function save()
  {
    $pos = $_POST;
    if($this->jr_mdl->tambah($pos)){
      $this->session->set_flashdata('info','Data Behasil Ditambah !');
      redirect('admin/jurusan');
    }else {
      exit('Insert Data Error.');
    }
  }
  public function save_edit($id_jurusan)
  {
    $id_jurusan	= $this->input->post('id_jurusan');
    $data = $_POST;
    $this->db->where('id_jurusan',$id_jurusan);
    $this->db->update('jurusan',$data);
    if ($this->db->affected_rows()){
      $this->session->set_flashdata('info','Data Behasil Diupdate !');
      redirect('admin/jurusan');
    }
  }
  public function delete($id_jurusan)
  {
    $this->Jurusan_model->delete($id_jurusan);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('admin/jurusan');
  }
}
