<?php 
defined('BASEPATH') OR exit('No direct script access allowed');



class Login extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->library('form_validation');
        $this->load->library('session');
		// 
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
            redirect('index.php/auth/Login'); 
    
        } else {
            $post = $this->input->post(null, TRUE);
			if (isset($_POST['login'])) {
				$query = $this->Auth_model->login($post);
				if ($query->num_rows() > 0) {
					$row = $query->row();
					$params = array (
						'id' => $row->id,
					);
					$this->session->set_userdata($params);
					redirect('Home');
					// echo "<script>
					// 	alert('Selamat, Login Berhasil');
					// 	window.location. = '".site_url('Home')."';
					// </script>";
				}else{
					 echo '<script>alert("Username atau Password yang Anda masukan salah.");window.location.href="'.base_url('auth/login').'";</script>';
				}
			}
        }

	}

    public function logout() {
		$params = array('id');
		$this->session->set_userdata($params);
        //  $this->session->sess_destroy();
        //  echo '<script>alert("Sukses! Anda berhasil logout."); window.location.href="'.base_url('welcome').'"</script>'; 
		redirect('Welcome');
	}

}
