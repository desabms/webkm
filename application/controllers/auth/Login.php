<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
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
            
    }

}