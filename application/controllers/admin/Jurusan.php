<?php

class Jurusan extends CI_Controller {
  public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
    $this->load->model('Siswa_model');
		$this->load->library('grocery_CRUD');
	}

	function index(){
		try {
			$gr = new grocery_CRUD();

			$gr->set_table('jurusan');
			$data['judul'] = 'Jurusan';
      $data['jurusan'] = $this->Siswa_model->getAllJurusan();
      $data['kelas'] = $this->Siswa_model->getAllKelas();
      $data['menu'] = $this->Siswa_model->menu();

			$grocery = $gr->render();

			$this->load->view('templates/header', $data);
			$this->load->view('jurusan/index', compact('grocery'));
			$this->load->view('templates/footer', $data);

		} catch (Exception $e) {
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}

	}
}
