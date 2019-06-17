<?php

class Kurikulum extends CI_Controller{

  public function __construct(){
    parent::__construct();
    if(strtolower($this->session->userdata('level'))!='wali_kelas'){
      redirect('login/logout');
    }
    $this->load->model('admin/Kurikulum_model');
    $this->load->model('admin/Siswa_model');
    // $this->load->library('ftp');
    // $this->load->library('upload');
    $this->load->helper(array('url'));
    $this->load->database();
    $this->load->helper('form');
    $this->load->model('Kurikulum_model','krl_mdl');
  }

  public function index()
  {
    $data['judul'] = 'Data Kurikulum | Admin';
    $data['kurikulum'] = $this->Kurikulum_model->getAll();
    $data['jurusan'] = $this->Siswa_model->getAllJurusan();
    $data['kelas'] = $this->Siswa_model->getAllKelas();
    $data['menu'] = $this->Siswa_model->menu();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/kurikulum/index', $data);
    $this->load->view('admin/templates/footer');
  }

  public function delete($id)
  {
    $data = $this->krl_mdl->getToDelete(['id'=>$id])->row();
    @unlink(FCPATH.'uploads/file/kurikulum'.$data->file_kurikulum);
    if($this->krl_mdl->delete(['id'=>$id])){
      $this->session->set_flashdata('info','Data Behasil Dihapus !');
      redirect('admin/kurikulum');
    } else{
       exit("Delete Data Error.");
    }
  }

  public function tambah()
  {
    $data['judul'] = 'Tambah Kurikulum | Admin';
    $data['jurusan'] = $this->Siswa_model->getAllJurusan();
    $data['kelas'] = $this->Siswa_model->getAllKelas();
    $data['menu'] = $this->Siswa_model->menu();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/kurikulum/tambah', $data);
    $this->load->view('admin/templates/footer');
  }

  function save()
  {
    $pos = $_POST;
    if(!empty($_FILES['file_kurikulum']['name'])){
      $cfg = [
        'upload_path' => './uploads/file/kurikulum',
  			'allowed_types' => 'pdf|doc',
  			'overwrite' => (empty($pos['file_kurikulum'])?FALSE:TRUE)
      ];
      if(!empty($pos['file_kurikulum'])) $cfg['file_name'] = $pos['file_kurikulum'];
      $this->load->library('upload',$cfg);

      if($this->upload->do_upload('file_kurikulum')) $pos['file_kurikulum'] = $this->upload->data('file_name');
      else exit('Error : '.$this->upload->display_errors());
    }

    if($this->krl_mdl->tambah($pos)){
      $this->session->set_flashdata('info','Data Behasil Ditambah !');
      redirect('admin/kurikulum');
    }else {
      exit('Insert Data Error.');
    }
  }

  public function detail($id)
  {
    $data['judul'] = 'Detail Data Kurikulum | Admin';
    $data['kurikulum'] = $this->Kurikulum_model->getBy($id);
    $data['jurusan'] = $this->Siswa_model->getAllJurusan();
    $data['kelas'] = $this->Siswa_model->getAllKelas();
    $data['menu'] = $this->Siswa_model->menu();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/kurikulum/detail', $data);
    $this->load->view('admin/templates/footer');
  }

  public function edit($id)
  {
    $data['judul'] = 'Edit Data Kurikulum | Admin';
    $data['kurikulum'] = $this->Kurikulum_model->getBy($id);
    if(empty($data)) redirect('admin/kurikulum');
    $data['jurusan'] = $this->Siswa_model->getAllJurusan();
    $data['kelas'] = $this->Siswa_model->getAllKelas();
    $data['menu'] = $this->Siswa_model->menu();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/kurikulum/edit', $data);
    $this->load->view('admin/templates/footer');
  }

  public function save_edit($id)
  {
    $id	= $this->input->post('id');
    $data = array (
      'id'	            => $this->input->post('id'),
      'judul_kurikulum'  	=> $this->input->post('judul_kurikulum'),
      'isi'  	=> $this->input->post('isi')
    );
    $this->db->where('id',$id);
    $this->db->update('kurikulum',$data);
    if ($this->db->affected_rows()){
      $this->session->set_flashdata('info','Data Behasil Diupdate !');
      redirect('admin/kurikulum');
    }
  }
}
