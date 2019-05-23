<?php


class Ppdb extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->helper('form');
    $this->load->model('Ppdb_model');
    $this->load->model('Berita_model');
    $this->load->model('Siswa_model');
    $this->load->database();
    $this->load->model('Siswa_model','ssw');
  }
  public function index()
  {
    $data['judul'] = 'Penerimaan Peserta Didik Baru | SMK Puspabangsa 2 Siliragung';
    $data['jurusan'] = $this->Ppdb_model->getAllJurusan ();
    $data['berita'] = $this->Berita_model->getAllBerita ();

    $this->load->view('templates/header', $data);
    $this->load->view('ppdb/index', $data);
    $this->load->view('templates/footer');
  }
  function save(){
		$pos = $_POST; // ambil semua data yang di kirim kecuali data file
		if(!empty($_FILES['gambar']['name'])){ // $_FILES untuk mengambil data gambar
			$cfg = [
				'upload_path' => './admin/upload/siswa',
				'allowed_types' => 'gif|jpg|png',
				'overwrite' => (empty($pos['gambar'])?FALSE:TRUE)
			];
			if(!empty($pos['gambar'])) $cfg['file_name'] = $pos['gambar'];
			$this->load->library('upload',$cfg);

			if($this->upload->do_upload('gambar')) $pos['gambar'] = $this->upload->data('file_name');
			else exit('Error : '.$this->upload->display_errors());
		}

    if ($this->ssw->add($pos)){
      $this->session->set_flashdata('info','Selamat Pendaftaran berhasil. Silahkan cetak bukti pendaftaran !');
      redirect('informasi/r_siswabaru/'.$pos['nipd']);
    } else {
      exit('Insert Data Error.');
    }
    // $this->ssw->add($pos);
    // var_dump($pos); exit();

	}
}
