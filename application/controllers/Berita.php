<?php


class Berita extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->helper('form');
    $this->load->model('Berita_model');
    $this->load->database();
    $this->load->library('pagination');

  }
  public function index()
  {
    $data['judul'] = 'Berita | SMK Puspabangsa 2 Siliragung';
    $data['berita'] = $this->Berita_model->getAllBerita();
    // $data['detail'] = $this->Berita_model->getDetail('$id');
    $config['base_url'] = site_url('berita/index');
    $config['total_rows'] = $this->db->count_all('berita');
    $config['per_page']         = 2;
    $config['use_page_numbers'] = true;
    $config['num_links']        = 5;
    $config['full_tag_open']    = '<ul class="pagination">';
    $config['full_tag_close']   = '</ul>';
    $config['first_link']       = 'First';
    $config['last_link']        = 'Last';
    $config['first_tag_open']   = '<li class="page-item page-link">';
    $config['first_tag_close']  = '</li>';
    $config['prev_link']        = '&laquo';
    $config['prev_tag_open']    = '<li class="page-item page-link">';
    $config['prev_tag_close']   = '</li>';
    $config['next_link']        = '&raquo';
    $config['next_tag_open']    = '<li class="page-item page-link">';
    $config['next_tag_close']   = '</li>';
    $config['last_tag_open']    = '<li class="page-item page-link">';
    $config['last_tag_close']   = '</li>';
    $config['cur_tag_open']     = '<li class="active"><a href="" class="page-link">';
    $config['cur_tag_close']    = '</a></li>';
    $config['num_tag_open']     = '<li class="page-item page-link">';
    $config['num_tag_close']    = '</li>';

    $this->pagination->initialize($config);

    $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

    $data['rows'] = $this->db->get('berita',$config["per_page"], $data['page'])->result();

    $data['pagination'] = $this->pagination->create_links();


    $this->load->view('templates/header', $data);
    $this->load->view('berita/index', $data);
    $this->load->view('templates/footer');
  }
  public function detailberita($id)
  {
    $data['judul'] = 'Berita | SMK Puspabangsa 2 Siliragung';
    $data['detail'] = $this->Berita_model->getDetail($id);
    $data['berita'] = $this->Berita_model->getAllBerita();

    $this->load->view('templates/header', $data);
    $this->load->view('berita/detailberita', $data);
    $this->load->view('templates/right', $data);
    $this->load->view('templates/footer');
  }

}
