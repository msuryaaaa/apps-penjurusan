<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		notLogin();
		$this->load->model('user_m');
	}


	public function index()
	{
		$data['title'] = 'User';
		$data['row'] = $this->user_m->get();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('user/user_data');
		$this->load->view('templates/footer');
	}

	public function add()
	{
		$data['title'] = 'User';

		$this->load->library('form_validation');

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
