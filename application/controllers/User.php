<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function index()
	{
		notLogin();

		$data['title'] = 'User';
		$this->load->model('user_m');
		$data['row'] = $this->user_m->get();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('user/user_data');
		$this->load->view('templates/footer');
	}

	public function add()
	{

		$data['title'] = 'User';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('user/user_form_add');
		$this->load->view('templates/footer');
	}
}

/* End of file User.php */
