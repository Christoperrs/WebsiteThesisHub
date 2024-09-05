<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// $this->load->model("OracleDBM");
		// $this->load->model("AdminM");
		$this->load->helper(array('form', 'url'));
		 $this->load->model("LoginM");
		 $this->load->library('session');
		 $this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('login');
	}
	
	
	public function hlmLogin()
	{
		$this->load->view('login');
	}
	public function check_login() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
	
		$user = $this->LoginM->check_login($username, $password);
	
		if ($user) {
			$data = array(
				'user_data' => $user,
				'status' => 1, 
				'isLogin'    => true,
			);
			$this->session->set_userdata($data);
			redirect('Admin'); 
		} else {
			$mhs = $this->LoginM->check_login_mhs($username, $password);
			if($mhs) {
				$data = array(
					'nim' => $mhs->nim,
					'status' => 2, 
					'isLogin'    => true,
				);
				$this->session->set_userdata($data);
				redirect('ProyekAkhir');
			} else {
				$this->session->set_flashdata('error', 'Username atau Password salah!');
				redirect('login'); 
			}
		}
	}
	
	public function logout()
	{
		$this->session->unset_userdata('isLogin');
		$this->session->sess_destroy();
		redirect(site_url());
	}
}
