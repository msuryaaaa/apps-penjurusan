<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function login()
	{
		alreadyLogin();
		$this->load->view('login');
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($post['login'])) {
			$this->load->model('user_m');
			$query = $this->user_m->login($post);
			if ($query->num_rows() > 0) {
				$row = $query->row();

				$params = array(
					'id_users' => $row->id_users,
					'level' => $row->level,
				);

				$this->session->set_userdata($params);
				echo "<script>
				alert('Selamat, Login Berhasil');
				window.location='" . site_url('dashboard') . "';
				</script>";
			} else {
				echo "<script>
				alert('Maaf, Login Gagal');
				window.location='" . site_url('auth/login') . "';
				</script>";
			}
		}
	}

	public function logout()
	{
		$params = array('id_users', 'level');
		$this->session->unset_userdata($params);

		redirect('auth/login');
	}
}

/* End of file Auth.php */
