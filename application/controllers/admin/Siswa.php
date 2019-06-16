<?php

class Siswa extends CI_Controller {

  public function __construct(){
    parent::__construct();

    $this->load->helper(array('url'));
    $this->load->database();
    $this->load->model('admin/Siswa_model');
    $this->load->helper('form');
    $this->load->model('Siswa_model','sw_mdl');
  }

  public function index($kd_kelas){
    $data['judul'] = 'Data Siswa | Admin';
    $data['siswa'] = $this->Siswa_model->getSiswaByKelas($kd_kelas);
    $data['jurusan'] = $this->Siswa_model->getAllJurusan();
    $data['kelas'] = $this->Siswa_model->getAllKelas();
    $data['menu'] = $this->Siswa_model->menu();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/siswa/index', $data);
    $this->load->view('admin/templates/footer');
  }


    public function delete($nipd)
    {
      $data = $this->sw_mdl->getToDelete(['nipd'=>$nipd])->row();
      @unlink(FCPATH.'uploads/img'.$data->gambar);
      if($this->sw_mdl->delete(['nipd'=>$nipd])){
        $this->session->set_flashdata('info','Data Behasil Dihapus !');
        redirect('admin/siswa');
      } else{
         exit("Delete Data Error.");
      }
    }

    public function tambah()
    {
      $data['judul'] = 'Tambah Siswa | Admin';
      $data['kelas'] = $this->Siswa_model->getAllKelas ();
      $data['jurusan'] = $this->Siswa_model->getAllJurusan();
      $data['kelas'] = $this->Siswa_model->getAllKelas();
      $data['menu'] = $this->Siswa_model->menu();

      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/siswa/tambah', $data);
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

      if($this->sw_mdl->tambah($pos)){
        $this->session->set_flashdata('info','Data Behasil Ditambah !');
        redirect('admin/siswa');
      }else {
        exit('Insert Data Error.');
      }
    }

    public function detail($nipd)
    {
      $data['judul'] = 'Detail Data Siswa | Admin';
      $data['siswa'] = $this->Siswa_model->getSiswaBy($nipd);
      $data['jurusan'] = $this->Siswa_model->getAllJurusan();
      $data['kelas'] = $this->Siswa_model->getAllKelas();
      $data['menu'] = $this->Siswa_model->menu();

      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/siswa/detail', $data);
      $this->load->view('admin/templates/footer');
    }

    public function edit($nipd)
    {
      $data['judul'] = 'Edit Data Siswa | Admin';
      $data['siswa'] = $this->Siswa_model->getSiswaBy($nipd);
      $data['kelas'] = $this->Siswa_model->getAllKelas();
      $data['jurusan'] = $this->Siswa_model->getAllJurusan();
      $data['kelas'] = $this->Siswa_model->getAllKelas();
      $data['menu'] = $this->Siswa_model->menu();
      if(empty($data)) redirect('admin/siswa');

      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/siswa/edit', $data);
      $this->load->view('admin/templates/footer');
    }

    public function save_edit($nipd)
    {
      $nipd	= $this->input->post('nipd');
      $data = array (
        'nipd'	            => $this->input->post('nipd'),
        'nama'  	=> $this->input->post('nama'),
        'no_hp'	  	=> $this->input->post('no_hp'),
        'agama'	  	=> $this->input->post('agama'),
        'kelamin'	  	=> $this->input->post('kelamin'),
        'alamat'		=> $this->input->post('alamat'),
        'kd_kelas'		=> $this->input->post('kd_kelas'),
        'tgl_lahir'		=> $this->input->post('tgl_lahir'),
        'ayah'		=> $this->input->post('ayah'),
        'ibu'		=> $this->input->post('ibu')
      );
      $this->db->where('nipd',$nipd);
      $this->db->update('siswa',$data);
      if ($this->db->affected_rows()){
        $this->session->set_flashdata('info','Data Behasil Diupdate !');
        redirect('admin/siswa');
      }
    }
  }
