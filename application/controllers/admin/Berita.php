<?php

class Berita extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('admin/Berita_model');
    $this->load->model('admin/Siswa_model');
    $this->load->helper(array('url'));
    $this->load->database();
    $this->load->helper('form');
    $this->load->model('Berita_model','brt_mdl');
  }

  public function index()
  {
    $data['judul'] = 'Data Berita | Admin';
    $data['berita'] = $this->Berita_model->getAll();
    $data['jurusan'] = $this->Siswa_model->getAllJurusan();
    $data['kelas'] = $this->Siswa_model->getAllKelas();
    $data['menu'] = $this->Siswa_model->menu();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/berita/index', $data);
    $this->load->view('admin/templates/footer');
  }

  public function delete($id)
  {
    $data = $this->brt_mdl->getToDelete(['id'=>$id])->row();
    @unlink(FCPATH.'uploads/img/berita'.$data->gambar);
    if($this->brt_mdl->delete(['id'=>$id])){
      $this->session->set_flashdata('info','Data Behasil Dihapus !');
      redirect('admin/berita');
    } else{
       exit("Delete Data Error.");
    }
  }

  public function tambah()
  {
    $data['judul'] = 'Tambah Berita | Admin';
    $data['jurusan'] = $this->Siswa_model->getAllJurusan();
    $data['kelas'] = $this->Siswa_model->getAllKelas();
    $data['menu'] = $this->Siswa_model->menu();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/berita/tambah', $data);
    $this->load->view('admin/templates/footer');
  }

  function save()
  {
    $pos = $_POST;
    if(!empty($_FILES['gambar']['name'])){
      $cfg = [
        'upload_path' => './uploads/img/berita',
  			'allowed_types' => 'gif|jpg|png',
  			'overwrite' => (empty($pos['gambar'])?FALSE:TRUE)
      ];
      if(!empty($pos['gambar'])) $cfg['file_name'] = $pos['gambar'];
      $this->load->library('upload',$cfg);

      if($this->upload->do_upload('gambar')) $pos['gambar'] = $this->upload->data('file_name');
      else exit('Error : '.$this->upload->display_errors());
    }

    if($this->brt_mdl->tambah($pos)){
      $this->session->set_flashdata('info','Data Behasil Ditambah !');
      redirect('admin/berita');
    }else {
      exit('Insert Data Error.');
    }
  }

  public function detail($id)
  {
    $data['judul'] = 'Detail Data Berita | Admin';
    $data['berita'] = $this->Berita_model->getBy($id);
    $data['jurusan'] = $this->Siswa_model->getAllJurusan();
    $data['kelas'] = $this->Siswa_model->getAllKelas();
    $data['menu'] = $this->Siswa_model->menu();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/berita/detail', $data);
    $this->load->view('admin/templates/footer');
  }

  public function edit($id)
  {
    $data['judul'] = 'Edit Data Berita | Admin';
    $data['berita'] = $this->Berita_model->getBy($id);
    if(empty($data)) redirect('admin/berita');
    $data['jurusan'] = $this->Siswa_model->getAllJurusan();
    $data['kelas'] = $this->Siswa_model->getAllKelas();
    $data['menu'] = $this->Siswa_model->menu();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/berita/edit', $data);
    $this->load->view('admin/templates/footer');
  }

  public function save_edit($id)
  {
    $id	= $this->input->post('id');
    $data = array (
      'id'	            => $this->input->post('id'),
      'judul_berita'  	=> $this->input->post('judul_berita'),
      'isi'  	=> $this->input->post('isi')
    );
    $this->db->where('id',$id);
    $this->db->update('berita',$data);
    if ($this->db->affected_rows()){
      $this->session->set_flashdata('info','Data Behasil Diupdate !');
      redirect('admin/berita');
    }
  }
}
