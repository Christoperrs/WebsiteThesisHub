<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProyekAkhir extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('ProyekAkhirM');
  }

  public function isAllowed()
  {
      return $this->session->userdata('isLogin');
  }
  public function index() {
    if (!$this->isAllowed()) return redirect(site_url());
    $data['laporan_proyek_akhir_saya'] = $this->ProyekAkhirM->get_all_laporan_me();
    $data['laporan_proyek_akhir'] = $this->ProyekAkhirM->get_all_laporan();

    $this->load->view('viewProyekAkhir', $data);
  }
  public function tambahProyekAkhir() {
    if (!$this->isAllowed()) return redirect(site_url());
    $this->load->view('tambahProyekAkhir');
  }
  public function add() {
    if (!$this->isAllowed()) return redirect(site_url());
    // Konfigurasi untuk upload
    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'pdf|doc|docx|ppt|pptx';
    $config['max_size'] = 10048;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('path')) {
        echo $this->upload->display_errors();
    } else {
        $file_data = $this->upload->data();
        $encrypted_file_name = md5($file_data['file_name'] . time()) . $file_data['file_ext'];
        rename($file_data['full_path'], $file_data['file_path'] . $encrypted_file_name);
        $this->ProyekAkhirM->insert_laporan($encrypted_file_name);
         redirect('ProyekAkhir');
    }
  }

  public function delete($id) {
    if (!$this->isAllowed()) return redirect(site_url());
    $this->ProyekAkhirM->delete_laporan($id);
    redirect('ProyekAkhir');
  }
}
