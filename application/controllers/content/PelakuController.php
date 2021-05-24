<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class PelakuController extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Pelaku_model');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->cek_login();
    }

    function index(){
        // $data['umkm'] = $this->Umkm_model->get_umkm();
        $this->load->view('layout/header');
		$this->load->view('layout/navbar2');
		$this->load->view('content/formPu');
		$this->load->view('layout/footer');
    }

    // function get_form(){
    //     $data['bu'] = $this->Umkm_model->cek_bu();
    //     $data['tu'] = $this->Umkm_model->cek_tu();
    //     $this->load->view('layout/header');
	// 	$this->load->view('layout/navbar2');
	// 	$this->load->view('content/formUm',$data);
	// 	$this->load->view('layout/footer');
    // }

    public function proses_addPelaku(){
        $this->form_validation->set_rules('nik', 'NIK', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('tlahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tgllahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('stts', 'Status', 'required');
        $this->form_validation->set_rules('pdkn', 'Pendidikan Terakhir', 'required');
        $this->form_validation->set_rules('tlpn', 'Hanphone', 'required');
        // $this->form_validation->set_rules('tgllapor', 'Tanggal', 'required');

        if ($this->form_validation->run() == FALSE) {
            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('content/LaporanController');
        }else{
            $nik = $this->input->post('nik');
            $nama = $this->input->post('nama');
            $jk = $this->input->post('jk');
            $agama = $this->input->post('agama');
            $tlahir = $this->input->post('tlahir');
            $tgllahir = $this->input->post('tgllahir');
            $alamat = $this->input->post('alamat');
            $stts = $this->input->post('stts');
            $pdkn = $this->input->post('pdkn');
            $tlpn = $this->input->post('tlpn');
            // $tgllapor = $this->input->post('tgllapor');

            $cek_nik = $this->Pelaku_model->cek_nik($nik);
            if ($cek_nik == true) {
                echo '<script>alert("NIK sudah terdaftar.");window.location.href="'.base_url('content/UmkmController').'";</script>';
            }else{
                $data = [
                    'nik' => $nik,
                    'nama' => $nama,
                    'tempat_lahir' => $tlahir,
                    'tgl_lahir' => $tgllahir,
                    'jenis_kelamin' => $jk,
                    'agama' => $agama,
                    'stts_nikah' => $stts,
                    'pddk_terakhir' => $pdkn,
                    'alamat' => $alamat,
                    'no_hp' => $tlpn
                ];
                // print_r($data);

                $insert = $this->Pelaku_model->save_data('pemilik',$data);
                if ($insert) {
                    echo '<script>alert("Data berhasil ditambah."); window.location.href="'.base_url('content/UmkmController').'"</script>';
                } else {
                    echo '<script>alert("Data berhasil ditambah."); window.location.href="'.base_url('content/PelakuController').'"</script>';
                }

            }
        }
    }
}