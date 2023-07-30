<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Training_m extends CI_Model
{
	// public function login($post)
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('tbl_users');
	// 	$this->db->where('username', $post['username']);
	// 	$this->db->where('password', sha1($post['password']));
	// 	$query = $this->db->get();
	// 	return $query;
	// }

	public function get($id = null)
	{
		$this->db->from('tbl_datatraining');
		if ($id != null) {
			$this->db->where('nis_training', $id);
		}

		$query = $this->db->get();
		return $query;
	}

	public function add($post)
	{
		$params['nis_training'] = $post['nisTraining'];
		$params['nama_training'] = $post['namaTraining'];
		$params['aga_training'] = $post['pai'];
		$params['pkn_training'] = $post['pkn'];
		$params['bindo_training'] = $post['bindo'];
		$params['mtk_training'] = $post['mtk'];
		$params['sej_training'] = $post['sejarah'];
		$params['bing_training'] = $post['bing'];
		$params['sbk_training'] = $post['sbk'];
		$params['pjok_training'] = $post['pjok'];
		$params['pkwu_training'] = $post['kwu'];
		$params['bsun_training'] = $post['bsun'];
		$params['jurusan_training'] = $post['jurusan'];
		$this->db->insert('tbl_datatraining', $params);
	}

	public function edit($post)
	{
		$params['nis_training'] = $post['nisTraining'];
		$params['nama_training'] = $post['namaTraining'];
		$params['aga_training'] = $post['pai'];
		$params['pkn_training'] = $post['pkn'];
		$params['bindo_training'] = $post['bindo'];
		$params['mtk_training'] = $post['mtk'];
		$params['sej_training'] = $post['sejarah'];
		$params['bing_training'] = $post['bing'];
		$params['sbk_training'] = $post['sbk'];
		$params['pjok_training'] = $post['pjok'];
		$params['pkwu_training'] = $post['kwu'];
		$params['bsun_training'] = $post['bsun'];
		$params['jurusan_training'] = $post['jurusan'];
		$this->db->where('nis_training', $post['nisTraining']);
		$this->db->update('tbl_datatraining', $params);
	}

	public function delete($id)
	{
		$this->db->where('nis_training', $id);
		$this->db->delete('tbl_datatraining');
	}
}

/* End of file Training_m.php */
