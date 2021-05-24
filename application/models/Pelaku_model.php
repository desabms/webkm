<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Pelaku_model extends CI_Model{
    function save_data($table, $data){
       return $this->db->insert($table, $data);
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
}