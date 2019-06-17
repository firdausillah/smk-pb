<?php

class Pengumuman extends CI_Controller{
  public function __construct(){
    parent::__construct();
    if(strtolower($this->session->userdata('level'))!='wali_kelas'){
      redirect('login/logout');
    }
    $this->load->helper(array('url'));
    $this->load->database();
    $this->load->model('admin/Pengumuman_model');
    $this->load->model('admin/Siswa_model');
    $this->load->helper('form');
    $this->load->model('Pengumuman_model','pg');
  }

  public function index()
  {
    $data['judul'] = 'Data Pengumuman | Admin';
    $data['pengumuman'] = $this->Pengumuman_model->getAll();
    $data['jurusan'] = $this->Siswa_model->getAllJurusan();
    $data['kelas'] = $this->Siswa_model->getAllKelas();
    $data['menu'] = $this->Siswa_model->menu();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/pengumuman/index', $data);
    $this->load->view('admin/templates/footer');
  }
  public function edit($id)
  {
    $data['judul'] = 'Edit Data Pengumuman | Admin';
    $data['pengumuman'] = $this->Pengumuman_model->getById($id);
    $data['jurusan'] = $this->Siswa_model->getAllJurusan();
    $data['kelas'] = $this->Siswa_model->getAllKelas();
    $data['menu'] = $this->Siswa_model->menu();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/pengumuman/edit', $data);
    $this->load->view('admin/templates/footer');
  }
  public function tambah()
  {
    $data['judul'] = 'Tambah Data Pengumuman | Admin';
    $data['pengumuman'] = $this->Pengumuman_model->getAll();
    $data['jurusan'] = $this->Siswa_model->getAllJurusan();
    $data['kelas'] = $this->Siswa_model->getAllKelas();
    $data['menu'] = $this->Siswa_model->menu();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/pengumuman/tambah', $data);
    $this->load->view('admin/templates/footer');
  }
  public function save()
  {
    $pos = $_POST;
    if($this->pg->tambah($pos)){
      $this->session->set_flashdata('info','Data Behasil Ditambah !');
      redirect('admin/pengumuman');
    }else {
      exit('Insert Data Error.');
    }
  }
  public function save_edit($id)
  {
    $id	= $this->input->post('id');
    $data = $_POST;
    $this->db->where('id',$id);
    $this->db->update('pengumuman',$data);
    if ($this->db->affected_rows()){
      $this->session->set_flashdata('info','Data Behasil Diupdate !');
      redirect('admin/pengumuman');
    }
  }
  public function delete($id)
  {
    $this->Pengumuman_model->delete($id);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('admin/pengumuman');
  }
}
