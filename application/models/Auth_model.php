<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Auth_model extends CI_Model{
 
    public function register($table, $data){
         return $this->db->insert($table, $data);
    }
}