<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
Note:
(semua yang ada dalam folder controller berguna untuk memproses semua perintah baik ke tampilan maupun ke database) 
pada file controller/auth.php ini berisi semua fungsi yang berguna 
untuk melakukan login,logout dan menampilkan halaman login
pada fungsi __construct berguna untuk meload library atau model yang diperlukan
*/
class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
	}

	// berguna untuk menampilkan halaman login
	public function index()
	{
		$this->load->view('login');
	}

	// berguna untuk memverifikasi apakah username/password yang di input sudah benar
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

	// berguna untuk melakukan logout dari sistem
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('page');
	}
}
