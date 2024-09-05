<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MahasiswaM extends CI_Model {
  public function __construct() {
    parent::__construct();
    $this->load->database();
}

  public function get_all_mahasiswas() {
    $this->db->where('status', 1);
    return $this->db->get('Mahasiswa')->result();
  }

  public function insert_mahasiswa() {
    $data = [
      'nim' => $this->input->post('nim'),
      'nama' => $this->input->post('nama'),
      'password' => $this->input->post('password'),
      'email' => $this->input->post('email'),
      'status' => 1
    ];
    $this->db->insert('Mahasiswa', $data);
  }

  public function get_mahasiswa_by_nim($nim) {
    return $this->db->get_where('Mahasiswa', ['nim' => $nim])->row();
  }

  public function update_mahasiswa($nim) {
    $data = [
      'nama' => $this->input->post('nama'),
      'password' => $this->input->post('password'),
      'email' => $this->input->post('email')
    ];
    $this->db->where('nim', $nim);
    $this->db->update('Mahasiswa', $data);
  }

  public function delete_mahasiswa($nim) {
    $this->db->where('nim', $nim);
    $this->db->delete('mahasiswa');
  }

}
