<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProyekAkhirM extends CI_Model {
  public function __construct() {
    parent::__construct();
    $this->load->database();
}

  public function get_all_laporan() {
    $this->db->select('proyekakhir.idProyek, proyekakhir.nim, proyekakhir.path, proyekakhir.nama_laporan, mahasiswa.nama');
    $this->db->from('proyekakhir');
    $this->db->join('mahasiswa', 'proyekakhir.nim = mahasiswa.nim');
    $this->db->where('proyekakhir.status', 1);
    return $this->db->get()->result();
  }
  public function get_all_laporan_me() {
    $nim =       $this->session->userdata('nim');
    $this->db->select('proyekakhir.idProyek, proyekakhir.nim, proyekakhir.path, proyekakhir.nama_laporan, mahasiswa.nama');
    $this->db->from('proyekakhir');
    $this->db->join('mahasiswa', 'proyekakhir.nim = mahasiswa.nim');
    $this->db->where('proyekakhir.status', 1);
    $this->db->where('proyekakhir.nim',$nim );
    
    return $this->db->get()->result();
  }
  public function insert_laporan($file_name) {

    $data = [
      'nama_laporan' => $this->input->post('nama_laporan'),
      'path' => $file_name,
      'status' => 1,
      'nim' => $this->session->userdata('nim')
    ];
    $this->db->insert('proyekakhir', $data);
  }

  public function delete_laporan($id) {
    // Ambil path file berdasarkan idProyek
    $this->db->select('path');
    $this->db->where('idProyek', $id);
    $query = $this->db->get('proyekakhir')->row();
    
    if ($query) {
        $path = $query->path; 

        if (file_exists('./uploads/' . $path)) {
            unlink('./uploads/' . $path);
        }

        $this->db->where('idProyek', $id);
        $this->db->delete('proyekakhir');
    }
}

}
