<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginM extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function check_login($username, $password) {
        $this->db->select('npk, password');
        $this->db->where('npk', $username);
        $this->db->where('password', $password); 
        $query = $this->db->get('admin');
    
        if ($query->num_rows() == 1) {
            return $query->row(); 
        } else {
            return false; 
        }
    }
    public function check_login_mhs($username, $password) {
        $this->db->select('nim, password');
        $this->db->where('nim', $username);
        $this->db->where('password', $password); 
        $query = $this->db->get('mahasiswa'); 
    
        if ($query->num_rows() == 1) {
            return $query->row(); 
        } else {
            return false;
        }
    }
    
    
}
