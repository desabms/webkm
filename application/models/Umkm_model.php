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
    function cek_umkm(){
        $data = $this->db->query("SELECT * from umkm");
        return $data->result();
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

    function cek_nama($nama){
        $query = $this->db->query("SELECT id FROM umkm WHERE nama_usaha='$nama' LIMIT 1");
            // $hasil = $this->db->where('nik', $nik)->limit(1)->get('pemilik');
        if($query->num_rows() > 0){
            return $query->result_array();
        } else {
            return false;
        }
    }

    function save_laporan($data){
       $this->db->insert('laporan',$data);
       return $this->db->insert_id();
    }
    function save_data($table, $data){
       return $this->db->insert($table, $data);
    }

    function get_laporan(){
        $this->db->SELECT('laporan.idl,
            pemilik.nama as nama,
            pemilik.nik as nik,
            umkm.nama_usaha as nama_usaha,
            bidangusaha.nama_bidangusaha as bidang_usaha,
            tipeusaha.nama_tipeusaha as tipe_usaha,
            laporan.pendapatan,
            laporan.terlapor');
            $this->db->FROM('laporan');
            $this->db->JOIN('pemilik','laporan.id_pemilik = pemilik.id','left');
            $this->db->JOIN('umkm','laporan.id_umkm = umkm.id','left');
            // $this->db->GROUP_BY(');
            $this->db->JOIN('bidangusaha','laporan.kd_bidangusaha = bidangusaha.kd_bidangusaha','left');
            $this->db->JOIN('tipeusaha','laporan.kd_tipeusaha = tipeusaha.kd_tipeusaha','left');

            $query = $this->db->get();
            return  $query->result();
    }

    function get_umkm(){
        $this->db->SELECT('*');
            $this->db->FROM('umkm');
            $this->db->JOIN('pemilik','umkm.id_pemilik = pemilik.id','left');
            $this->db->JOIN('bidangusaha','umkm.kd_bidangusaha = bidangusaha.kd_bidangusaha','left');
            $this->db->JOIN('tipeusaha','umkm.kd_tipeusaha = tipeusaha.kd_tipeusaha','left');

            $query = $this->db->get();
            return $query->result();
    }

    public function getData_id($id){
        $this->db->SELECT('*');
        $this->db->FROM('umkm');
        $this->db->JOIN('pemilik','umkm.id_pemilik = pemilik.id','left');
        $this->db->JOIN('bidangusaha','umkm.kd_bidangusaha = bidangusaha.kd_bidangusaha','left');
        $this->db->WHERE('id',$id);

        $query = $this->db->get();
        return  $query->result();

    }

}
