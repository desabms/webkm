<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller{
    public function index(){
        $this->load->view('layout/header');
        $this->load->view('akun/register');
        $this->load->view('layout/footer');
    }

}