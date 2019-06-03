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
    $data['judul'] = 'Data Guru | Admin';
    $data['guru'] = $this->Dt_guru_model->getAllGuru();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/dt_guru/index', $data);
    $this->load->view('admin/templates/footer');
  }

  public function delete($id)
  {
    $data = $this->gru_mdl->getGuruByNuptk(['nupt'=>$nuptk])->row();
    @unlink(FCPATH.'uploads/img'.$data->gambar);
    if(!$this->gru_mdl->deleteGuru(['nupt'=>$nuptk])) exit("Delete Data Error.");
    redirect('admin/dt_user');
  }

  public function tambah()
  {
    $data['judul'] = 'Tambah Guru | Admin';

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/dt_guru/tambah', $data);
    $this->load->view('admin/templates/footer');
  }

  function save()
  {
    $pos = $_POST;
    if(!empty($_FILES['gambar']['name'])){
      $cfg = [
        'upload_path' => './uploads/img',
  			'allowed_types' => 'gif|jpg|png',
  			'overwrite' => (empty($pos['gambar'])?FALSE:TRUE)
      ];
      if(!empty($pos['gambar'])) $cfg['file_name'] = $pos['gambar'];
      $this->load->library('upload',$cfg);

      if($this->upload->do_upload('gambar')) $pos['gambar'] = $this->upload->data('file_name');
      else exit('Error : '.$this->upload->display_errors());
    }

    if(!$this->gru_mdl->tambah($pos)) exit('Insert Data Error.');

    redirect('admin/dt_guru');
  }

  public function detail($nuptk)
  {
    $data['judul'] = 'Detail Data Guru | Admin';
    $data['guru'] = $this->Dt_guru_model->getGuruByNuptk($nuptk);

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/dt_guru/detail', $data);
    $this->load->view('admin/templates/footer');
  }

  public function edit($nuptk)
  {
    $data['judul'] = 'Edit Data Guru | Admin';
    $data['guru'] = $this->Dt_guru_model->getGuruByNuptk($nuptk);
    if(empty($data)) redirect('admin/dt_guru');

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/dt_guru/edit', $data);
    $this->load->view('admin/templates/footer');
  }
}
