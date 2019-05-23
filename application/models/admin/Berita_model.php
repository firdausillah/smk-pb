<?php

class Berita_model extends CI_model {
	public $gambar = "default.jpg";
	public function getAllBerita()
	{
			return $this->db->get('berita')->result_array();
	}

	public function tambahDataBerita ()
	{
		$data = [
			"judul_berita" => $this->input->post('judul_berita', true),
			"gambar" => $this->_uploadImage(),
			"isi" => $this->input->post('isi', true),
		];

		$this->db->insert('berita', $data);
	}
	private function _uploadImage()
	{
	    $config['upload_path']          = './upload/berita/';
	    $config['allowed_types']        = 'gif|jpg|png';
	    $config['file_name']            = $this->id;
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

	public function hapusBerita($id_berita)
	  {
	    $this->db->where('id_berita', $id_berita);
	    $this->db->delete('berita');
	  }

	  public function getBerita($id_berita)
	  {
	  		return $this->db->get_where('berita', ['id => $id'])->row_array();
	  }

	  	public function ubahDataBerita ($id_berita)
	{
		$data = [
			"judul_berita" => $this->input->post('judul_berita', true),
			// "gambar" => $this->input->post('gambar', true),
			"isi" => $this->input->post('isi', true),

		];

		$this->db->where('id_berita', $this->input->post('id_berita'));
		$this->db->update('berita', $data);
	}


	public function cariBerita()
	{
		$keyword = $this->input->post('keyword', true);
		 $this->db->like('judul_berita', $keyword);
		 $this->db->or_like('deskripsi', $keyword);
		 $this->db->or_like('gambar', $keyword);


		return $this->db->get('berita')->result_array();
	}

}
