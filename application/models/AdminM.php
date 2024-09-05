<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminM extends CI_Model {

  public function get_all_admins() {
    $this->db->where('status', 1);
    return $this->db->get('admin')->result();
  }
  public function insert_admin() {
    $data = [
      'npk' => $this->input->post('npk'),
      'nama' => $this->input->post('nama'),
      'password' => $this->input->post('password'),
      'email' => $this->input->post('email'),
      'status' => 1
    ];
    $this->db->insert('Admin', $data);
  }

  public function get_admin_by_npk($npk) {
    return $this->db->get_where('Admin', ['npk' => $npk])->row();
  }

  public function update_admin($npk) {
    $data = [
      'nama' => $this->input->post('nama'),
      'password' => $this->input->post('password'),
      'email' => $this->input->post('email')
    ];
    $this->db->where('npk', $npk);
    $this->db->update('Admin', $data);
  }

  public function delete_admin($npk) {
    $this->db->where('npk', $npk);
    $this->db->delete('admin');
  }


}
