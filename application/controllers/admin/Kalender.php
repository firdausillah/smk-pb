<?php

class Kalender extends CI_Controller{

  public function __construct(){
    parent::__construct();
    if(strtolower($this->session->userdata('level'))!='wali_kelas'){
      redirect('login/logout');
    }
    $this->load->model('admin/Kalender_model');
    $this->load->model('admin/Siswa_model');
    // $this->load->library('ftp');
    // $this->load->library('upload');
    $this->load->helper(array('url'));
    $this->load->database();
    $this->load->helper('form');
    $this->load->model('Kalender_model','kldr_mdl');
  }

  public function index()
  {
    $data['judul'] = 'Data Kalender | Admin';
    $data['kalender'] = $this->Kalender_model->getAll();
    $data['jurusan'] = $this->Siswa_model->getAllJurusan();
    $data['kelas'] = $this->Siswa_model->getAllKelas();
    $data['menu'] = $this->Siswa_model->menu();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/kalender/index', $data);
    $this->load->view('admin/templates/footer');
  }

  public function delete($id)
  {
    $data = $this->kldr_mdl->getToDelete(['id'=>$id])->row();
    @unlink(FCPATH.'uploads/file/kalender'.$data->file_kalender);
    if($this->kldr_mdl->delete(['id'=>$id])){
      $this->session->set_flashdata('info','Data Behasil Dihapus !');
      redirect('admin/kalender');
    } else{
       exit("Delete Data Error.");
    }
  }

  public function tambah()
  {
    $data['judul'] = 'Tambah kalender | Admin';
    $data['jurusan'] = $this->Siswa_model->getAllJurusan();
    $data['kelas'] = $this->Siswa_model->getAllKelas();
    $data['menu'] = $this->Siswa_model->menu();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/kalender/tambah', $data);
    $this->load->view('admin/templates/footer');
  }

  function save()
  {
    $pos = $_POST;
    if(!empty($_FILES['file_kalender']['name'])){
      $cfg = [
        'upload_path' => './uploads/file/kalender',
  			'allowed_types' => 'pdf|doc',
  			'overwrite' => (empty($pos['file_kalender'])?FALSE:TRUE)
      ];
      if(!empty($pos['file_kalender'])) $cfg['file_name'] = $pos['file_kalender'];
      $this->load->library('upload',$cfg);

      if($this->upload->do_upload('file_kalender')) $pos['file_kalender'] = $this->upload->data('file_name');
      else exit('Error : '.$this->upload->display_errors());
    }

    if($this->kldr_mdl->tambah($pos)){
      $this->session->set_flashdata('info','Data Behasil Ditambah !');
      redirect('admin/kalender');
    }else {
      exit('Insert Data Error.');
    }
  }

  public function detail($id)
  {
    $data['judul'] = 'Detail Data kalender | Admin';
    $data['kalender'] = $this->Kalender_model->getBy($id);
    $data['jurusan'] = $this->Siswa_model->getAllJurusan();
    $data['kelas'] = $this->Siswa_model->getAllKelas();
    $data['menu'] = $this->Siswa_model->menu();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/kalender/detail', $data);
    $this->load->view('admin/templates/footer');
  }

  public function edit($id)
  {
    $data['judul'] = 'Edit Data kalender | Admin';
    $data['kalender'] = $this->Kalender_model->getBy($id);
    if(empty($data)) redirect('admin/kalender');
    $data['jurusan'] = $this->Siswa_model->getAllJurusan();
    $data['kelas'] = $this->Siswa_model->getAllKelas();
    $data['menu'] = $this->Siswa_model->menu();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/kalender/edit', $data);
    $this->load->view('admin/templates/footer');
  }

  public function save_edit($id)
  {
    $id	= $this->input->post('id');
    $data = array (
      'id' => $this->input->post('id'),
      'tahun_kalender' => $this->input->post('tahun_kalender')
    );
    $this->db->where('id',$id);
    $this->db->update('kalender',$data);
    if ($this->db->affected_rows()){
      $this->session->set_flashdata('info','Data Behasil Diupdate !');
      redirect('admin/kalender');
    }
  }
}
