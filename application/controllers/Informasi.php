<?php


class Informasi extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->helper('form');
    $this->load->model('Informasi_model');
    $this->load->model('Ppdb_model');
    $this->load->model('Siswa_model');
    $this->load->database();
    $this->load->model('Siswa_model','ssw');
  }
  public function index()
  {
    $data['judul'] = 'Berita | SMK Puspabangsa 2 Siliragung';
    $data['berita'] = $this->Informasi_model->getAllBerita();
    $data['pengumuman'] = $this->Informasi_model->getAllPengumuman();
    // $data['detail'] = $this->Informasi_model->getDetail('$id_berita');

    $this->load->view('templates/header', $data);
    $this->load->view('informasi/index', $data);
    $this->load->view('templates/right', $data);
    $this->load->view('templates/footer');
  }
  public function kurikulum()
  {
  $data['judul'] = 'Kurikulum | SMK Puspabangsa 2 Siliragung';
  $data['kurikulum'] = $this->Informasi_model->getKurikulum();
  $data['berita'] = $this->Informasi_model->getAllBerita();


  $this->load->view('templates/header', $data);
  $this->load->view('informasi/kurikulum', $data);
  $this->load->view('templates/right', $data);
  $this->load->view('templates/footer');
  }
  public function profil_umum()
  {
  $data['judul'] = 'Profil Umum | SMK Puspabangsa 2 Siliragung';
  $data['profil_umum'] = $this->Informasi_model->getProfil_umum();
  $data['berita'] = $this->Informasi_model->getAllBerita();


  $this->load->view('templates/header', $data);
  $this->load->view('informasi/profil_umum', $data);
  $this->load->view('templates/right', $data);
  $this->load->view('templates/footer');
  }
  public function kemitraan()
  {
  $data['judul'] = 'Kemitraan DU/DI | SMK Puspabangsa 2 Siliragung';
  // $data['kemitraan'] = $this->Informasi_model->getKemitraan();
  $data['berita'] = $this->Informasi_model->getAllBerita();


  $this->load->view('templates/header', $data);
  $this->load->view('informasi/kemitraan', $data);
  $this->load->view('templates/right', $data);
  $this->load->view('templates/footer');
  }
  public function pendataan_siswa()
  {
    $data['judul'] = 'Pendataan Siswa | SMK Puspabangsa 2 Siliragung';
    $data['kelas'] = $this->Siswa_model->getAllKelas ();
    $data['berita'] = $this->Informasi_model->getAllBerita ();

    $this->load->view('templates/header', $data);
    $this->load->view('informasi/Pendataan', $data);
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
      redirect('informasi/pendataan_siswa');
      echo "<script>
    		alert('Anda harus login dahulu !');
    	</script>";
    } else {
      exit('Insert Data Error.');
    }
    // $this->ssw->add($pos);
    // var_dump($pos); exit();

	}

  function r_siswabaru(){
    if (empty($this->uri->segment(3))){
      $nipd=$this->input->post('nipd');
    }else{
      $nipd=$this->uri->segment(3);
    }

    $cek = $this->db->get_where('siswa',array('nipd'=>$nipd))->num_rows();
    if ($cek > 0){
      $data['judul'] = 'Cetak Bukti Pndaftaran | SMK Puspabangsa 2 Siliragung';
      $data['siswa']=$this->Siswa_model->siswa($nipd)->row_array();
      $this->load->view('templates/header', $data);
      $this->load->view('informasi/detail_siswa', $data);
      $this->load->view('templates/footer');
    }else{
      echo "Maaf, Nomor pendaftaran yang anda masukkan salah !";
    }
  }
  function l_siswabaru(){
    $nipd=$this->uri->segment(3);
    $data['siswa']=$this->Siswa_model->siswa($nipd)->row_array();
    $this->load->view('bukti_pendaftaran_siswa',$data);
  }

}
