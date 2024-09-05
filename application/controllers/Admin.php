<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('AdminM');
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
    $data['admins'] = $this->AdminM->get_all_admins();
 
    $this->load->view('viewAdmin', $data);
  }


  public function tambahAdmin() {
    if (!$this->isAllowed()) return redirect(site_url());
    if (!in_array($this->session->userdata('status'), [1])) {
        return redirect(site_url());
    }
    $this->load->view('tambahAdmin');
}
  public function add() {
    if (!$this->isAllowed()) return redirect(site_url());
    if (!in_array($this->session->userdata('status'), [1])) {
        return redirect(site_url());
    }
    $this->AdminM->insert_admin();
    redirect('Admin');
  }

  public function edit($npk) {

    if (!$this->isAllowed()) return redirect(site_url());
    if (!in_array($this->session->userdata('status'), [1])) {
        return redirect(site_url());
    }
    $data['admin'] = $this->AdminM->get_admin_by_npk($npk);
    $this->load->view('editAdmin', $data);
  }

  public function update($npk) {
    if (!$this->isAllowed()) return redirect(site_url());
    if (!in_array($this->session->userdata('status'), [1])) {
        return redirect(site_url());
    }
    $this->AdminM->update_admin($npk);
    redirect('Admin');
  }

  public function delete($npk) {
    if (!$this->isAllowed()) return redirect(site_url());
    if (!in_array($this->session->userdata('status'), [1])) {
        return redirect(site_url());
    }
    $this->AdminM->delete_admin($npk);
    redirect('Admin');
  }
}
