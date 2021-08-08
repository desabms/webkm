<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class PengajuanController extends CI_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->model('Bantuan_model');
		$this->cek_login();
	}

	public function index(){
		$this->load->view('layout/header');
		$this->load->view('layout/navbar2');
		$this->load->view('content/formPengajuan');
		$this->load->view('layout/footer');
	}

	public function add_Pengajuan(){
		$this->form_validation->set_rules('nik', 'NIK', 'required|min_length[16]|max_length[16]');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tlpn', 'Hanphone', 'required');
        $this->form_validation->set_rules('jns', 'Jenis Bantuan', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

		if ($this->form_validation->run() == FALSE) {
            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('content/PengajuanController');
        }else{
			
			
            $nik = $this->input->post('nik');
            $nama = $this->input->post('nama');
            $tlpn = $this->input->post('tlpn');
            $jns = $this->input->post('jns');
            $ket = $this->input->post('keterangan');

			$cek_nik = $this->Bantuan_model->cek_nik($nik);
			if ($cek_nik == false) {
                // echo '<script>alert("NIK tidak tersedia.");window.location.href="'.base_url('content/PelakuController').'";</script>';
                $this->session->set_flashdata('nik', 'NIK tidak terdaftar! <a href="<php echo base_url();?>content/PelakuController">Daftar</a>');
                redirect('content/PengajuanController');
			}else{
                $data = [
                    'nik' => $nik,
                    'nama_usaha' => $nama,
                    'no_hanphone' => $tlpn,
                    'kd_tipeusaha' => $tu,
                    'type_pengajuan' => $jns,
                    'deskripsi' => $ket
                ];

				$insert = $this->Bantuan_model->save_data('pengajuan',$data);
                if ($insert) {
                    echo '<script>alert("Data berhasil ditambah."); window.location.href="'.base_url('content/HistoriController/histori_bantuan').'"</script>';
                } else {
                    echo '<script>alert("Data gagal ditambah."); window.location.href="'.base_url('content/PengajuanController').'"</script>';
                }
			}
		}
	}
}
