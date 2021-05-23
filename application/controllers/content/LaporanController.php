<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanController extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Umkm_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    function index(){
        $data['bu'] = $this->Umkm_model->cek_bu();
        $data['tu'] = $this->Umkm_model->cek_tu();
        $this->load->view('layout/header');
		$this->load->view('layout/navbar2');
		$this->load->view('content/form',$data);
		$this->load->view('layout/footer');
    }
}