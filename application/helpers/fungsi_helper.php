<?php

function alreadyLogin()
{
	$CI = &get_instance();
	$user_session = $CI->session->userdata('id_users');

	if ($user_session) {
		redirect('dashboard');
	}
}

function notLogin()
{
	$CI = &get_instance();
	$user_session = $CI->session->userdata('id_users');

	if (!$user_session) {
		redirect('auth/login');
	}
}

function notAdmin()
{
	$CI = &get_instance();
	$CI->load->library('fungsi');
	if ($CI->fungsi->user_login()->level != 1) {
		redirect('dashboard');
	}
}
