<?php

class Dt_guru extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('admin/Dt_guru_model');
    $this->load->model('admin/Siswa_model');
    $this->load->helper(array('url'));
    $this->load->database();
    $this->load->helper('form');
    $this->load->model('Dt_guru_model','gru_mdl');
  }

  public function index()
  {
    $data['judul'] = 'Data Guru | Admin';
    $data['guru'] = $this->Dt_guru_model->getAllGuru();
    $data['jurusan'] = $this->Siswa_model->getAllJurusan();
    $data['kelas'] = $this->Siswa_model->getAllKelas();
    $data['menu'] = $this->Siswa_model->menu();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/dt_guru/index', $data);
    $this->load->view('admin/templates/footer');
  }

  public function delete($nuptk)
  {
    $data = $this->gru_mdl->getToDelete(['nuptk'=>$nuptk])->row();
    @unlink(FCPATH.'uploads/img'.$data->gambar);
    if($this->gru_mdl->delete(['nuptk'=>$nuptk])){
      $this->session->set_flashdata('info','Data Behasil Dihapus !');
      redirect('admin/dt_guru');
    } else{
       exit("Delete Data Error.");
    }
  }

  public function tambah()
  {
    $data['judul'] = 'Tambah Guru | Admin';
    $data['jurusan'] = $this->Siswa_model->getAllJurusan();
    $data['kelas'] = $this->Siswa_model->getAllKelas();
    $data['menu'] = $this->Siswa_model->menu();

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

    if($this->gru_mdl->tambah($pos)){
      $this->session->set_flashdata('info','Data Behasil Ditambah !');
      redirect('admin/dt_guru');
    }else {
      exit('Insert Data Error.');
    }
  }

  public function detail($nuptk)
  {
    $data['judul'] = 'Detail Data Guru | Admin';
    $data['guru'] = $this->Dt_guru_model->getGuruByNuptk($nuptk);
    $data['jurusan'] = $this->Siswa_model->getAllJurusan();
    $data['kelas'] = $this->Siswa_model->getAllKelas();
    $data['menu'] = $this->Siswa_model->menu();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/dt_guru/detail', $data);
    $this->load->view('admin/templates/footer');
  }

  public function edit($nuptk)
  {
    $data['judul'] = 'Edit Data Guru | Admin';
    $data['guru'] = $this->Dt_guru_model->getGuruByNuptk($nuptk);
    $data['jurusan'] = $this->Siswa_model->getAllJurusan();
    $data['kelas'] = $this->Siswa_model->getAllKelas();
    $data['menu'] = $this->Siswa_model->menu();
    if(empty($data)) redirect('admin/dt_guru');

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/dt_guru/edit', $data);
    $this->load->view('admin/templates/footer');
  }

  public function save_edit($nuptk)
  {
    $nuptk	= $this->input->post('nuptk');
    $data = array (
      'nuptk'	            => $this->input->post('nuptk'),
      'nama'  	=> $this->input->post('nama'),
      'no_hp'	  	=> $this->input->post('no_hp'),
      'email'	  	=> $this->input->post('email'),
      'alamat'		=> $this->input->post('alamat'),
      'pendidikan'		=> $this->input->post('pendidikan'),
      'tgl_lahir'		=> $this->input->post('tgl_lahir')
    );
    $this->db->where('nuptk',$nuptk);
    $this->db->update('guru',$data);
    if ($this->db->affected_rows()){
      $this->session->set_flashdata('info','Data Behasil Diupdate !');
      redirect('admin/dt_guru');
    }
  }
}
