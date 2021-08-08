<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Bantuan_model extends CI_Model{

	function getData(){
		// $user_id = $this->session->userdata('id');
		$this->db->SELECT('*');
            $this->db->FROM('pengajuan');
            $this->db->JOIN('users','pengajuan.id_user = users.id','left');
			// $this->db->WHERE('id_user');

            $query = $this->db->get();
            return $query->result();
	}
	

	function cek_nik($nik){
        $query = $this->db->query("SELECT * FROM pemilik WHERE nik='$nik' LIMIT 1");
            // $hasil = $this->db->where('nik', $nik)->limit(1)->get('pemilik');
        if($query->num_rows() > 0){
            return $query->result_array();
        } else {
            return false;
        }
    }
	function save_data($table, $data){
       return $this->db->insert($table, $data);
    }
}
