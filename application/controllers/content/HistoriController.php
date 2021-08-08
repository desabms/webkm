<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class HistoriController extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model(['Umkm_model','Bantuan_model']);
        $this->load->library('form_validation');
        $this->load->library('session');
        check_not_login();
    }

    function index(){
        $data['laporan'] = $this->Umkm_model->get_laporan();
        $data['tu'] = $this->Umkm_model->cek_tu();
        $this->load->view('layout/header');
		$this->load->view('layout/navbar2');
		$this->load->view('content/histori',$data);
		$this->load->view('layout/footer');
    }

	function pengajuan(){
		
        
		$data['bantu'] = $this->Bantuan_model->getData();
		$data['title']	= 'Pengajuan Bantuan';

		$this->load->view('layout/header');
		$this->load->view('layout/navbar2');
		$this->load->view('content/histori_bantuan',$data);
		$this->load->view('layout/footer');
	}
}
