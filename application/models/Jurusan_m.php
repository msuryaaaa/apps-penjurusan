<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Jurusan_m extends CI_Model
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
		$this->db->from('tbl_datajurusan');
		if ($id != null) {
			$this->db->where('id_jurusan', $id);
		}

		$query = $this->db->get();
		return $query;
	}

	public function add($post)
	{
		$params['id_jurusan'] = $post['idJurusan'];
		$params['nama_jurusan'] = $post['namaJurusan'];
		$this->db->insert('tbl_datajurusan', $params);
	}

	public function edit($post)
	{
		$params['id_jurusan'] = $post['idJurusan'];
		$params['nama_jurusan'] = $post['namaJurusan'];
		$this->db->where('id_jurusan', $post['idJurusan']);
		$this->db->update('tbl_datajurusan', $params);
	}

	public function delete($id)
	{
		$this->db->where('id_jurusan', $id);
		$this->db->delete('tbl_datajurusan');
	}
}

/* End of file Jurusan_m.php */
