<?php

class Guru_model  extends CI_model {
  public function getAllGuru()
  {
    return $this->db->get('guru')->result_array();
  }

  public function tambahGuru()
  {
    $data =[
      "nuptk" => $this->input->post('nuptk'),
      "nama" => $this->input->post('nama'),
      "gambar" => $this->_uploadImage(),
      "tgl_lahir" => $this->input->post('tgl_lahir'),
      "alamat" => $this->input->post('alamat'),
      "no_hp" => $this->input->post('no_hp'),
      "email" => $this->input->post('email'),
      "pendidikan" => $this->input->post('pendidikan'),
    ];

    $this->db->insert('guru', $data);
  }

  private function _uploadImage()
  {
      $config['upload_path']          = './upload/guru/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['file_name']            = $this->new.$nuptk;
      $config['overwrite']						= true;
      $config['max_size']             = 1024; // 1MB
      // $config['max_width']            = 1024;
      // $config['max_height']           = 768;

      $this->load->library('upload', $config);

      if ($this->upload->do_upload('gambar')) {
          return $this->upload->data("file_name");
      }

      return "default.jpg";
  }

  public function hapusGuru($nuptk)
  {
    $this->db->where('nuptk', $nuptk);
    $this->db->delete('guru');
  }

  public function getGuruByNuptk($nuptk)
  {
    return $this->db->get_where('guru', ['nuptk' => $nuptk])->row_array();
  }

  public function ubahGuru()
  {
    $data =[
      "nuptk" => $this->input->post('nuptk'),
      "nama" => $this->input->post('nama'),
      "tgl_lahir" => $this->input->post('tgl_lahir'),
      "alamat" => $this->input->post('alamat'),
      "no_hp" => $this->input->post('no_hp'),
      "email" => $this->input->post('email'),
      "pendidikan" => $this->input->post('pendidikan'),
    ];
    $this->db->where('nuptk', $this->input->post('nuptk'));
    $this->db->update('guru', $data);
  }

  public function cariGuru()
  {
    $keyword = $this->input->post('keyword', true);
    $this->db->like('nama', $keyword);
    $this->db->like('gambar', $keyword);
    $this->db->or_like('nuptk', $keyword);
    $this->db->or_like('alamat', $keyword);
    $this->db->or_like('email', $keyword);
    $this->db->or_like('pendidikan', $keyword);
    return $this->db->get('guru')->result_array();
  }
}
