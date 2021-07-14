<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	// hello world
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$check = $this->m_admin->getWhereRow('admin', ['username' => $username]);
		if ($check && password_verify($password, $check->password)) {
			$this->session->set_userdata(['role' => 'admin']);
			redirect('admin/page/dashboard');
		} else {
			$this->session->set_flashdata('error', '<div class="text-center text-danger mb-3">Maaf, username atau password yang di input salah</div>');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}
}
