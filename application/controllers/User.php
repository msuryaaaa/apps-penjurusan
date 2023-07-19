<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		notLogin();
		$this->load->model('user_m');
		$this->load->library('form_validation');
	}


	public function index()
	{
		$data['title'] = 'Users';
		$data['row'] = $this->user_m->get();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('user/user_data');
		$this->load->view('templates/footer');
	}

	public function add()
	{
		$data['title'] = 'Users';

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[tbl_users.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
		$this->form_validation->set_rules(
			'konfirmasi',
			'Konfirmasi Password',
			'required|matches[password]',
			array('matches' => '%s tidak sama dengan Password.')
		);
		$this->form_validation->set_rules('role', 'Role', 'required');

		$this->form_validation->set_message('required', '%s masih kosong, silakan isi.');
		$this->form_validation->set_message('min_length', '%s minimal 5 karakter.');
		$this->form_validation->set_message('is_unique', '%s ini sudah dipakai.');

		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('user/user_form_add');
			$this->load->view('templates/footer');
		} else {
			$post = $this->input->post(null, TRUE);
			$this->user_m->add($post);
			if ($this->db->affected_rows() > 0) {
				echo "<script>alert('Data berhasil disimpan.');</script>";
			}
			echo "<script>window.location='" . site_url('user') . "';</script>";
		}
	}

	public function edit($id)
	{
		$data['title'] = 'Users';

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|callback_username_check');
		if ($this->input->post('password')) {
			$this->form_validation->set_rules('password', 'Password', 'min_length[5]');
			$this->form_validation->set_rules(
				'konfirmasi',
				'Konfirmasi Password',
				'matches[password]',
				array('matches' => '%s tidak sama dengan Password.')
			);
		}
		if ($this->input->post('konfirmasi')) {
			$this->form_validation->set_rules(
				'konfirmasi',
				'Konfirmasi Password',
				'matches[password]',
				array('matches' => '%s tidak sama dengan Password.')
			);
		}

		$this->form_validation->set_rules('role', 'Role', 'required');

		$this->form_validation->set_message('required', '%s masih kosong, silakan isi.');
		$this->form_validation->set_message('min_length', '%s minimal 5 karakter.');
		$this->form_validation->set_message('is_unique', '%s ini sudah dipakai.');

		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$query = $this->user_m->get($id);
			if ($query->num_rows() > 0) {
				$data['row'] = $query->row();
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('user/user_form_edit', $data);
				$this->load->view('templates/footer');
			} else {
				echo "<script>alert('Data tidak ditemukan.');";
				echo "window.location='" . site_url('user') . "';</script>";
			}
		} else {
			$post = $this->input->post(null, TRUE);
			$this->user_m->edit($post);
			if ($this->db->affected_rows() > 0) {
				echo "<script>alert('Data berhasil diubah.');</script>";
			}
			echo "<script>window.location='" . site_url('user') . "';</script>";
		}
	}

	public function username_check()
	{
		$post = $this->input->post(null, TRUE);
		$query = $this->db->query("SELECT * FROM tbl_users WHERE username = '$post[username]' AND id_users != '$post[id_users]'");
		if ($query->num_rows() > 0) {
			$this->form_validation->set_message('username_check', '%s ini sudah dipakai, silakan ganti.');
			return FALSE;
		} else {
			return TRUE;
		}
	}

	public function delete()
	{
		$id = $this->input->post('id_users');
		$this->user_m->delete($id);

		if ($this->db->affected_rows() > 0) {
			echo "<script>alert('Data berhasil dihapus.');</script>";
		}
		echo "<script>window.location='" . site_url('user') . "';</script>";
	}
}

/* End of file User.php */
