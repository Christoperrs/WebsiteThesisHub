<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('MahasiswaM');
  }
  public function isAllowed()
  {
      return $this->session->userdata('isLogin');
  }
  public function index() {
    if (!$this->isAllowed()) return redirect(site_url());
    if (!in_array($this->session->userdata('status'), [1])) {
        return redirect(site_url());
    }
    $data['mahasiswas'] = $this->MahasiswaM->get_all_mahasiswas();
    $this->load->view('viewMahasiswa', $data);
  }

  
  public function tambahMahasiswa() {
    if (!$this->isAllowed()) return redirect(site_url());
    if (!in_array($this->session->userdata('status'), [1])) {
        return redirect(site_url());
    }
    $this->load->view('tambahMahasiswa');
}
  public function add() {
    if (!$this->isAllowed()) return redirect(site_url());
    if (!in_array($this->session->userdata('status'), [1])) {
        return redirect(site_url());
    }
    $this->MahasiswaM->insert_mahasiswa();

redirect('Mahasiswa');
  }

  public function edit($nim) {
    if (!$this->isAllowed()) return redirect(site_url());
    if (!in_array($this->session->userdata('status'), [1])) {
        return redirect(site_url());
    }
    $data['mahasiswa'] = $this->MahasiswaM->get_mahasiswa_by_nim($nim);
    $this->load->view('editMahasiswa', $data);
  }

  public function update($nim) {
    if (!$this->isAllowed()) return redirect(site_url());
    if (!in_array($this->session->userdata('status'), [1])) {
        return redirect(site_url());
    }
    $this->MahasiswaM->update_mahasiswa($nim);
    redirect('Mahasiswa');
  }

  public function delete($nim) {
    if (!$this->isAllowed()) return redirect(site_url());
    if (!in_array($this->session->userdata('status'), [1])) {
        return redirect(site_url());
    }
    $this->MahasiswaM->delete_mahasiswa($nim);
    redirect('Mahasiswa');
  }}













