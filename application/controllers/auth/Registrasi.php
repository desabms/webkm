<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->library('form_validation');
        $this->load->library('session');

    }
    public function index(){
        $this->load->view('layout/header');
        $this->load->view('akun/register');
        $this->load->view('layout/footer');
    }

    public function proses_daftar(){
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('jk', 'JK', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]');
        $this->form_validation->set_rules('passwordConfirmation', 'PasswordConfirmation', 'required|matches[password]');
    
        if ($this->form_validation->run() == FALSE) {
            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('index.php/auth/Registrasi');
        } else {
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $phone = $this->input->post('phone');
            $jk = $this->input->post('jk');
            $password = MD5($this->input->post('password'));
            $data = [
                'nama' => $nama,
                'username' => $username,
                'email' => $email,
                'handphone' => $phone,
                'jenis_kelamin' => $jk,
                'password' => $password
            ];
            $insert = $this->Auth_model->register("users",$data);
            if($insert){
            echo '<script>alert("Sukses! Anda berhasil melakukan register. Silahkan login untuk mengakses data.");window.location.href="'.base_url('index.php/auth/Login').'";</script>';
            }
        }
    }

}