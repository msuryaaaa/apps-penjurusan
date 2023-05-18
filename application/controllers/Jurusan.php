<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Jurusan extends CI_Controller
{

	public function index()
	{

		$data['title'] = 'Jurusan';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('jurusan/jurusan_data');
		$this->load->view('templates/footer');
	}
}

/* End of file Jurusan.php */
