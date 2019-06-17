<?php

class Nilai extends CI_Controller {

  public function __construct(){
    parent::__construct();

    $this->load->helper(array('url'));
    $this->load->database();
    $this->load->model('admin/Nilai_model');
    $this->load->helper('form');
    $this->load->model('Nilai_model','n_mdl');
  }

  public function index($kd_kelas){
    $data['judul'] = 'Data Nilai | Admin';
    $data['nilai'] = $this->Nilai_model->getNilaiByKelas($kd_kelas);
    $data['siswa'] = $this->Nilai_model->getSiswaBykd($kd_kelas);
    $data['jurusan'] = $this->Nilai_model->getAllJurusan();
    $data['kelas'] = $this->Nilai_model->getAllKelas();
    $data['menu'] = $this->Nilai_model->menu();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/nilai/index', $data);
    $this->load->view('admin/templates/footer');
  }


    public function delete($nipd)
    {
      $data = $this->n_mdl->getToDelete(['nipd'=>$nipd])->row();
      @unlink(FCPATH.'uploads/file/nilai'.$data->nilai);
      if($this->n_mdl->delete(['nipd'=>$nipd])){
        $this->session->set_flashdata('info','Data Behasil Dihapus !');
        redirect(@$_GET['url']);
      } else{
         exit("Delete Data Error.");
      }
    }

    public function tambah()
    {
      $data['judul'] = 'Tambah Nilai | Admin';
      $data['kelas'] = $this->Nilai_model->getAllKelas ();
      $data['jurusan'] = $this->Nilai_model->getAllJurusan();
      $data['kelas'] = $this->Nilai_model->getAllKelas();
      $data['menu'] = $this->Nilai_model->menu();

      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/nilai/tambah', $data);
      $this->load->view('admin/templates/footer');
    }

    function save()
    {
      $pos = $_POST;
      if(!empty($_FILES['nilai']['name'])){
        $cfg = [
          'file_name'=>"Nilai_$pos[nipd].pdf",
          'upload_path' => './uploads/file/nilai',
    			'allowed_types' => 'pdf|doc',
    			'overwrite' => true
        ];
        // if(!empty($pos['file_kurikulum'])) $cfg['file_name'] = $pos['file_kurikulum'];
        $this->load->library('upload',$cfg);

        if($this->upload->do_upload('nilai')) $pos['nilai'] = $this->upload->data('file_name');
        else exit('Error : '.$this->upload->display_errors());

        $pos['nuptk'] = $this->session->userdata('username');
        if($this->n_mdl->update($pos['nipd'],$pos)){
          $this->session->set_flashdata('info','Data Behasil Ditambah !');
          redirect(@$_GET['url']);
        }else {
          exit('Insert Data Error.');
        }
      }
    }

    public function detail($nipd)
    {
      $data['judul'] = 'Detail Data Nilai | Admin';
      $data['nilai'] = $this->Nilai_model->getNilaiBy($nipd);
      $data['jurusan'] = $this->Nilai_model->getAllJurusan();
      $data['kelas'] = $this->Nilai_model->getAllKelas();
      $data['menu'] = $this->Nilai_model->menu();

      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/nilai/detail', $data);
      $this->load->view('admin/templates/footer');
    }

    public function edit($nipd)
    {
      $data['judul'] = 'Edit Data Nilai | Admin';
      $data['nilai'] = $this->Nilai_model->getNilaiBy($nipd);
      $data['kelas'] = $this->Nilai_model->getAllKelas();
      $data['jurusan'] = $this->Nilai_model->getAllJurusan();
      $data['kelas'] = $this->Nilai_model->getAllKelas();
      $data['menu'] = $this->Nilai_model->menu();
      if(empty($data)) redirect('admin/nilai');

      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/nilai/edit', $data);
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
      $this->db->update('nilai',$data);
      if ($this->db->affected_rows()){
        $this->session->set_flashdata('info','Data Behasil Diupdate !');
        redirect('admin/nilai');
      }
    }
  }
