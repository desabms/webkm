<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class UmkmController extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Umkm_model');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->cek_login();
    }

    function index(){
        $data['bu'] = $this->Umkm_model->cek_bu();
        $data['tu'] = $this->Umkm_model->cek_tu();
        $this->load->view('layout/header');
		$this->load->view('layout/navbar2');
		$this->load->view('content/formUm',$data);
		$this->load->view('layout/footer');
    }

    public function proses_addUMKM(){
        $this->form_validation->set_rules('nik', 'NIK', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('bu', 'Bu', 'required');
        $this->form_validation->set_rules('tu', 'tu', 'required');
        $this->form_validation->set_rules('modal', 'modal', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('tlpn', 'Hanphone', 'required');
        $this->form_validation->set_rules('tgllapor', 'Tanggal', 'required');

        if ($this->form_validation->run() == FALSE) {
            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('content/LaporanController');
        }else{
            $nik = $this->input->post('nik');
            $nama = $this->input->post('nama');
            $bu = $this->input->post('bu');
            $tu = $this->input->post('tu');
            $modal = $this->input->post('modal');
            $alamat = $this->input->post('alamat');
            $tlpn = $this->input->post('tlpn');
            $tgllapor = $this->input->post('tgllapor');

            $cek_nik = $this->Umkm_model->cek_nik($nik);
            if ($cek_nik == false) {
                echo '<script>alert("NIK tidak tersedia.");window.location.href="'.base_url('content/PelakuController').'";</script>';
            }else{
                $data = [
                    'nik' => $nik,
                    'nama_usaha' => $nama,
                    'kd_bidangusaha' => $kd_bidangusaha,
                    'kd_tipeusaha' => $kd_tipeusaha,
                    'modal_awal' => $modal,
                    'alamat_usaha' => $alamat,
                    'handphone' => $tlpn,
                    'tgl_lapor' => $tgllapor
                ];
                print_r($data);

                $insert = $this->Umkm_model->save_data('umkm',$data);
                if ($insert) {
                    echo '<script>alert("Data berhasil ditambah."); window.location.href="'.base_url('content/HistoriController').'"</script>';
                } else {
                    echo '<script>alert("Data berhasil ditambah."); window.location.href="'.base_url('content/UmkmController').'"</script>';
                }

            }
        }
    }
}