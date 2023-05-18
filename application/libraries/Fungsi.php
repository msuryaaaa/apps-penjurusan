<?php

class Fungsi
{
	protected $CI;


	public function __construct()
	{

		$this->ci = &get_instance();
	}

	function user_login()
	{
		$this->ci->load->model('user_m');
		$user_id = $this->ci->session->userdata('id_users');
		$user_data = $this->ci->user_m->get($user_id)->row();
		return $user_data;
	}
}
