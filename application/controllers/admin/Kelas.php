<?php

class Kelas extends CI_Controller{
  public function __construct(){
    parent::__construct();
    if(strtolower($this->session->userdata('level'))!='wali_kelas'){
      redirect('login/logout');
    }
    $this->load->helper(array('url'));
    $this->load->database();
    $this->load->model('admin/Kelas_model');
    $this->load->model('admin/Siswa_model');
    $this->load->helper('form');
    $this->load->model('Kelas_model','kls_mdl');
  }

  public function index()
  {
    $data['judul'] = 'Data Kelas | Admin';
    $data['kelas'] = $this->Kelas_model->getAllKelas();
    $data['jurusan'] = $this->Siswa_model->getAllJurusan();
    $data['menu'] = $this->Siswa_model->menu();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/kelas/index', $data);
    $this->load->view('admin/templates/footer');
  }
  public function edit($kd_kelas)
  {
    $data['judul'] = 'Edit Data Kelas | Admin';
    $data['kelas1'] = $this->Kelas_model->getById($kd_kelas);
    $data['jurusan'] = $this->Siswa_model->getAllJurusan();
    $data['kelas'] = $this->Siswa_model->getAllKelas();
    $data['menu'] = $this->Siswa_model->menu();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/kelas/edit', $data);
    $this->load->view('admin/templates/footer');
  }
  public function tambah()
  {
    $data['judul'] = 'Tambah Data Kelas | Admin';
    $data['kelas'] = $this->Kelas_model->getAllKelas();
    $data['jurusan'] = $this->Siswa_model->getAllJurusan();
    $data['menu'] = $this->Siswa_model->menu();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/kelas/tambah', $data);
    $this->load->view('admin/templates/footer');
  }
  public function save()
  {
    $pos = $_POST;
    if($this->kls_mdl->tambah($pos)){
      $this->session->set_flashdata('info','Data Behasil Ditambah !');
      redirect('admin/kelas');
    }else {
      exit('Insert Data Error.');
    }
  }
  public function save_edit($kd_kelas)
  {
    $kd_kelas	= $this->input->post('kd_kelas');
    $data = $_POST;
    $this->db->where('kd_kelas',$kd_kelas);
    $this->db->update('kelas',$data);
    if ($this->db->affected_rows()){
      $this->session->set_flashdata('info','Data Behasil Diupdate !');
      redirect('admin/kelas');
    }
  }
  public function delete($kd_kelas)
  {
    $this->Kelas_model->delete($kd_kelas);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('admin/kelas');
  }
}
