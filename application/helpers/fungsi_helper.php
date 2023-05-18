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
