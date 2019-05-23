<?php

class Kalender_model extends CI_model {
	public $gambar = "default.jpg";
	public function getAllKalender()
	{
			return $this->db->get('Kalender')->result_array();
	}

	public function tambahDataBeranda ()
	{
		$data = [
			
			"gambar" => $this->_uploadImage(),
			
		];

		$this->db->insert('kalender', $data);
	}
	private function _uploadImage()
	{
	    $config['upload_path']          = './upload/gambar/';
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

	public function hapusBeranda($id)
	  {
	    $this->db->where('id', $id);
	    $this->db->delete('dt_beranda');
	  }

	  public function getData_beranda($id)
	  {
	  		return $this->db->get_where('dt_beranda', ['id => $id'])->row_array();
	  }

	  	public function ubahDataBeranda ()
	{
		$data = [
			"judul_gambar" => $this->input->post('judul_gambar', true),
			"gambar" => $this->input->post('gambar', true),
			"deskripsi" => $this->input->post('deskripsi', true),
			"status" => $this->input->post('status', true),
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('dt_beranda', $data);
	}


	public function cariData_beranda()
	{
		$keyword = $this->input->post('keyword', true);
		 $this->db->like('judul_gambar', $keyword);
		 $this->db->or_like('deskripsi', $keyword);
		 $this->db->or_like('gambar', $keyword);


		return $this->db->get('dt_beranda')->result_array();
	}

}
