<?php 
defined('BASEPATH') OR exit('No direct script access allowed');



class Login extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index(){
        $this->load->view('layout/header');
        $this->load->view('akun/login');
        $this->load->view('layout/footer');
    }

    public function proses_login(){
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]');

        if ($this->form_validation->run() == FALSE) {
            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('index.php/auth/Login'); // LOGIN
    
        } else {
            $phone = $this->input->post('phone');
            $password = htmlspecialchars($this->input->post('password'));

            // cek ke Database
            $cek_login = $this->Auth_model->cek_login($phone);

            if ($cek_login === false) {
                echo '<script>alert("Nomor handphone yang Anda masukan salah.");window.location.href="'.base_url('auth/login').'";</script>';
            } else {
                if (password_verify($password, $cek_login->password)) {
                    
                    # Jika  Nomor handphone dan password saman
                    $this->session->set_userdata('id', $cek_login->id);
                    $this->session->set_userdata('handphone');

                    redirect('Home');
                } else {
                    echo '<script>alert("Username atau Password yang Anda masukan salah.");window.location.href="'.base_url('auth/login').'";</script>';
                }
            }
        }
    }

    public function logout() {
         $this->session->sess_destroy();
         echo '<script>alert("Sukses! Anda berhasil logout."); window.location.href="'.base_url('welcome').'"</script>'; 
    }

}