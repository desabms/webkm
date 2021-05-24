<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanController extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Umkm_model');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->cek_login();
    }

    function index(){
        $data['bu'] = $this->Umkm_model->cek_bu();
        $data['um'] = $this->Umkm_model->cek_umkm();
        $data['tu'] = $this->Umkm_model->cek_tu();
        $this->load->view('layout/header');
		$this->load->view('layout/navbar2');
		$this->load->view('content/form',$data);
		$this->load->view('layout/footer');
    }

    function proses_laporan() {
        $this->form_validation->set_rules('nik', 'NIK', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('bu', 'Bu', 'required');
        $this->form_validation->set_rules('tu', 'Nama', 'required');
        $this->form_validation->set_rules('tgllapor', 'Nama', 'required');
        $this->form_validation->set_rules('pendapatan', 'Nama', 'required');
        // $this->form_validation->set_rules('nik','Nik','require|numeric|min_length[16]');
        // $this->form_validation->set_rules('nama','Nama Usaha','require');
        // $this->form_validation->set_rules('bu','Bidang usaha','require');
        // $this->form_validation->set_rules('tu','Tipe Usaha','require');
        // $this->form_validation->set_rules('tgllapor','Tanggal lahir','require');
        // $this->form_validation->set_rules('pendapatan','Pendapatan','require');

        if ($this->form_validation->run() == FALSE) {
            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('content/LaporanController');
        } else {
            $nik = $this->input->post('nik');
            $nama = $this->input->post('nama');
            $bu = $this->input->post('bu');
            $tu = $this->input->post('tu');
            $tgllapor = $this->input->post('tgllapor');
            $pendapatan = $this->input->post('pendapatan');

            $cek_nik = $this->Umkm_model->cek_nik($nik);
            

            if ($cek_nik == false) {
                $this->session->set_flashdata('nik', "NIK tidak terdaftar!");
                redirect('content/LaporanController');
            } else {
                $data =[
                        'nik' => $nik,
                        'id_umkm' => $nama,
                        'kd_bidangusaha' => $bu,
                        'kd_tipeusaha' => $tu,
                        'terlapor' => $tgllapor,
                        'pendapatan' => $pendapatan
                    ];

                    $save = $this->Umkm_model->save_laporan($data);

                    if ($save) {
                        redirect('content/HistoriController');
                    }else{
                        $this->session->set_flashdata('err', "Password saat ini tidak sama dengan yang ada!");
                        redirect('content/LaporanController');
                    }
            }
        }

        
        // echo json_encode($cek_nik);
        

        
    }
}