<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Jurusan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		notLogin();
		notAdmin();
		$this->load->model('jurusan_m');
		$this->load->library('form_validation');
	}

	public function index()
	{

		$data['title'] = 'Jurusan';
		$data['row'] = $this->jurusan_m->get();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('jurusan/jurusan_data');
		$this->load->view('templates/footer');
	}

	public function add()
	{
		$data['title'] = 'Jurusan';

		$this->form_validation->set_rules('idJurusan', 'ID Jurusan', 'required|min_length[3]|is_unique[tbl_datajurusan.id_jurusan]');
		$this->form_validation->set_rules('namaJurusan', 'Nama Jurusan', 'required');

		$this->form_validation->set_message('required', '%s masih kosong, silakan isi.');
		$this->form_validation->set_message('min_length', '%s minimal 3 karakter.');
		$this->form_validation->set_message('is_unique', '%s ini sudah dipakai.');

		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('jurusan/jurusan_form_add');
			$this->load->view('templates/footer');
		} else {
			$post = $this->input->post(null, TRUE);
			$this->jurusan_m->add($post);
			if ($this->db->affected_rows() > 0) {
				echo "<script>alert('Data berhasil disimpan.');</script>";
			}
			echo "<script>window.location='" . site_url('jurusan') . "';</script>";
		}
	}

	public function edit($id)
	{
		$data['title'] = 'Jurusan';

		$this->form_validation->set_rules('idJurusan', 'ID Jurusan', 'required|min_length[3]|callback_idJurusan_check');
		$this->form_validation->set_rules('namaJurusan', 'Nama Jurusan', 'required');

		$this->form_validation->set_message('required', '%s masih kosong, silakan isi.');
		$this->form_validation->set_message('min_length', '%s minimal 3 karakter.');
		$this->form_validation->set_message('is_unique', '%s ini sudah dipakai.');

		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$query = $this->jurusan_m->get($id);
			if ($query->num_rows() > 0) {
				$data['row'] = $query->row();
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('jurusan/jurusan_form_edit', $data);
				$this->load->view('templates/footer');
			} else {
				echo "<script>alert('Data tidak ditemukan.');";
				echo "window.location='" . site_url('jurusan') . "';</script>";
			}
		} else {
			$post = $this->input->post(null, TRUE);
			$this->jurusan_m->edit($post);
			if ($this->db->affected_rows() > 0) {
				echo "<script>alert('Data berhasil diubah.');</script>";
			}
			echo "<script>window.location='" . site_url('jurusan') . "';</script>";
		}
	}

	public function delete()
	{
		$id = $this->input->post('id_jurusan');
		$this->jurusan_m->delete($id);

		if ($this->db->affected_rows() > 0) {
			echo "<script>alert('Data berhasil dihapus.');</script>";
		}
		echo "<script>window.location='" . site_url('jurusan') . "';</script>";
	}

	public function idJurusan_check()
	{
		$post = $this->input->post(null, TRUE);
		$query = $this->db->query("SELECT * FROM tbl_datajurusan WHERE id_jurusan = '$post[idJurusan]' AND id_jurusan != '$post[id_jurusan]'");
		if ($query->num_rows() > 0) {
			$this->form_validation->set_message('idJurusan_check', '%s ini sudah dipakai, silakan ganti.');
			return FALSE;
		} else {
			return TRUE;
		}
	}
}

/* End of file Jurusan.php */
