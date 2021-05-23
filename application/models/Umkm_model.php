<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Umkm_model extends CI_Model{

    function cek_tu(){
        $data = $this->db->query("SELECT * from tipeusaha");
        return $data->result();
    }
    function cek_bu(){
        $data = $this->db->query("SELECT * from bidangusaha");
        return $data->result();
    }

}