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

    if($ceklogin){
      foreach ($ceklogin as $row);
      $this->session->set_userdata('username', $row->username);
      $this->session->set_userdata('level', $row->level);

      if($this->session->userdata('level')=='Admin'){
        redirect('admin');
      }elseif($this->session->userdata('level')=='Siswa'){
        redirect('siswa/index');
      }
    }else{
        $data['judul'] = 'Login | SMK Puspabangsa 2 Siliragung';
        $data['pesan'] = 'Username atau password tidak sesuai.';

        $this->load->view('templates/header',$data);
        $this->load->view('login',$data);
        $this->load->view('templates/footer',$data);
      }
    }
}
