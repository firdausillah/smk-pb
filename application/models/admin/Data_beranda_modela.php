<?php

class Data_beranda_model extends CI_model {
	var $dtb="dt_beranda";

	function getAllData_beranda(){
		return $this->db->get('dt_beranda')->result_array();
	}

	function findBy($id){
		return $this->db->get_where('dt_beranda', ['id' => $id])->row_array();
	}

	function add($data){
		return $this->db->insert($this->dtb,$data);
	}

	function update($w,$data){
		$this->db->where($w);
		return $this->db->update($this->dtb,$data);
	}

	function delete($w){
		$this->db->where($w);
		return $this->db->delete($this->dtb);
	}
	// public $gambar = "default.jpg";
	// public function getAllData_beranda()
	// {
	// 		return $this->db->get('dt_beranda')->result_array();
	// }
	//
	// public function tambahDataBeranda ()
	// {
	// 	$data = [
	// 		"judul_gambar" => $this->input->post('judul_gambar', true),
	// 		"gambar" => $this->_uploadImage(),
	// 		"deskripsi" => $this->input->post('deskripsi', true),
	// 		"status" => $this->input->post('status', true),
	// 	];
	//
	// 	$this->db->insert('dt_beranda', $data);
	// }
	// private function _uploadImage()
	// {
	//     $config['upload_path']          = './upload/beranda/';
	//     $config['allowed_types']        = 'gif|jpg|png';
	//     $config['file_name']            = $this->new.$id;
	//     $config['overwrite']						= (empty($pos['gambar'])?FALSE:TRUE);
	//     $config['max_size']             = 1024; // 1MB
	//     // $config['max_width']            = 1024;
	//     // $config['max_height']           = 768;
	//
	//     $this->load->library('upload', $config);
	//
	//     if ($this->upload->do_upload('gambar')) {
	//         return $this->upload->data("file_name");
	//     }
	//
	//     return "default.jpg";
	// }
	//
	// public function hapusBeranda($id)
	//   {
	//     $this->db->where('id', $id);
	//     $this->db->delete('dt_beranda');
	//   }
	//
	//   public function getData_beranda($id)
	//   {
	//   		return $this->db->get_where('dt_beranda', ['id' => $id])->row_array();
	//   }
	//
	//
	//   	public function ubahDataBeranda ()
	// {
	// 	$data = [
	// 		"judul_gambar" => $this->input->post('judul_gambar', true),
	// 		"deskripsi" => $this->input->post('deskripsi', true),
	// 		"status" => $this->input->post('status', true),
	//
	// 	];
	//
	// 	$this->db->where('id', $this->input->post('id'));
	// 	$this->db->update('dt_beranda', $data);
	// }
	//
	//
	//
	// public function cariData_beranda()
	// {
	// 	$keyword = $this->input->post('keyword', true);
	// 	 $this->db->like('judul_gambar', $keyword);
	// 	 $this->db->or_like('deskripsi', $keyword);
	// 	 $this->db->or_like('gambar', $keyword);
	//
	//
	// 	return $this->db->get('dt_beranda')->result_array();
	// }

}
