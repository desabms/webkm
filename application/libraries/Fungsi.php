<?php

class Fungsi
{
	protected $ci;

	function __construct(){
		$this->ci =& get_instance();
	}

	function user_login(){
		$this->ci->load->model('Auth_model');
		$user_id = $this->ci->session->userdata('id');
		$user_data = $this->ci->Auth_model->get($user_id)->row();
		return $user_data;
	}
}