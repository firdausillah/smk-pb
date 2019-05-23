<?php

class Siswa extends CI_Controller {
  public function __construct()
  {
    parent::__construct();

    $this->load->database();
    $this->load->helper('url');
		$this->load->model('Siswa_model');
    $this->load->library('grocery_CRUD');
  }

  function index($kelas){
    // print_r($_GET['kelas']);exit();
    try {
      $data['judul'] = 'Siswa';
      $data['jurusan'] = $this->Siswa_model->getAllJurusan();
      $data['kelas'] = $this->Siswa_model->getAllkelas();
      $data['menu'] = $this->Siswa_model->menu();
      $gr = new grocery_CRUD();

      $gr->set_table('siswa');
      $gr->set_field_upload('gambar','upload/siswa');
      $gr->where('kd_kelas', $kelas);

      $grocery = $gr->render();

      $this->load->view('templates/header', $data);
      $this->load->view('siswa/index', compact('grocery'));
      $this->load->view('templates/footer', $data);

    } catch (Exception $e) {
      show_error($e->getMessage().' --- '.$e->getTraceAsString());
    }

  }

  function siswa(){
    // print_r($_GET['kelas']);exit();
    try {
      $gr = new grocery_CRUD();

      $gr->set_table('siswa');
      $gr->set_field_upload('gambar','upload/siswa');
      $data['judul'] = 'Siswa';
      $data['jurusan'] = $this->Siswa_model->getAllJurusan();
      $data['kelas'] = $this->Siswa_model->getAllkelas();
        $data['menu'] = $this->Siswa_model->menu();
      $grocery = $gr->render();

      $this->load->view('templates/header', $data);
      $this->load->view('siswa/index', compact('grocery'));
      $this->load->view('templates/footer', $data);

    } catch (Exception $e) {
      show_error($e->getMessage().' --- '.$e->getTraceAsString());
    }

  }
}
