<?php

class Login extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->model('Login_model');
    $this->load->library('session');

  }

  public function index()
  {
    $data['judul'] = 'Login | SMK Puspabangsa 2 Siliragung';

    $this->load->view('templates/header',$data);
    $this->load->view('login',$data);
    $this->load->view('templates/footer',$data);
  }

  function proses_login(){
    $user=$this->input->post('username');
    $pass=$this->input->post('password');

    $ceklogin= $this->Login_model->login($user,$pass);
    $ceklog= $this->Login_model->log($user,$pass);
    // print_r($ceklog); exit();

    if($ceklogin){
      foreach ($ceklogin as $row);
      $this->session->set_userdata('username', $row->username);
      $this->session->set_userdata('level', $row->level);
      $this->session->set_userdata('gambar', $row->gambar);
      $this->session->set_userdata('nama', $row->nama);
      // print_r($row);
      // print_r($this->session->userdata()); exit();
      if($this->session->userdata('level')=='admin'){
        redirect('admin/home');
      }elseif($this->session->userdata('level')=='wali_kelas'){
        redirect('admin/home');
      }
    }elseif($ceklog){
      foreach ($ceklog as $row);
      $this->session->set_userdata('username', $row->username);
      $this->session->set_userdata('level', $row->level);
      $this->session->set_userdata('gambar', $row->gambar);
      $this->session->set_userdata('nama', $row->nama);
      // print_r($row);
      // print_r($this->session->userdata()); exit();
      if($this->session->userdata('level')=='siswa'){
        redirect('siswa/siswa');
      }
    }else{
        $data['judul'] = 'Login | SMK Puspabangsa 2 Siliragung';
        $data['pesan'] = 'Username atau password tidak sesuai.';

        $this->load->view('templates/header',$data);
        $this->load->view('login',$data);
        $this->load->view('templates/footer',$data);
      }
    }

    function logout(){
      $this->session->sess_destroy();
			redirect(base_url('login'));
    }

}
