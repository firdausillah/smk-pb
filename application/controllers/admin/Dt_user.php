<?php

class Dt_user extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('admin/Dt_user_model');
    $this->load->helper(array('url'));
    $this->load->database();
    $this->load->helper('form');
    $this->load->model('Dt_user_model','usr_mdl');
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
    $data = $this->usr_mdl->getUserById(['id'=>$id])->row();
    @unlink(FCPATH.'uploads/img'.$data->gambar);
    if(!$this->usr_mdl->deleteUser(['id'=>$id])) exit("Delete Data Error.");
    redirect('admin/dt_user');
  }

  public function tambah()
  {
    $data['judul'] = 'Tambah User | Admin';

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/dt_user/tambah', $data);
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

    if(empty($pos['id'])){
      unset($pos['id']);
      if(!$this->usr_mdl->tambah($pos)) exit('Insert Data Error.');
    }else{
      if(!$this->usr_mdl->update(['id'=>$pos['id']],$pos)) exit("Update Data Error.");
    }
    redirect('admin/dt_user');
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
