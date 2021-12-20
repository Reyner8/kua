<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
	/*
Note:
(semua yang ada dalam folder controller berguna untuk memproses semua perintah baik ke tampilan maupun ke database) 
pada file controller/admin/page.php ini berisi semua fungsi yang berguna 
untuk menampilkan ke browser
pada fungsi __construct berguna untuk meload library atau model yang diperlukan
*/
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
	}

	// untuk menampilkan halaman home/dashboard milik admin
	public function dashboard()
	{
		$data = [
			'title' => 'Admin KUA | Dashboard',
			'totalRegistration' => count($this->m_admin->get('pernikahan')),
			'approvedRegistrant' => count($this->m_admin->getWhere('pernikahan', ['approve' => 'approved']))
		];
		// meload halaman dari folder view/admin/dashboard.php
		$this->load->view('admin/dashboard', $data);
	}

	// untuk menampilkan halaman pendaftaran milik admin
	public function registration()
	{
		$data = [
			'title' => 'Admin KUA | Registration',
			'pria' => $this->m_admin->getMempelaiPria(),
			'wanita' => $this->m_admin->getMempelaiWanita()
		];
		// meload halaman dari folder view/admin/registration.php
		$this->load->view('admin/registration', $data);
	}

	// untuk menampilkan halaman pendaftaran secara detail dari pendaftar dari sisi admin
	public function detail_registration($id)
	{
		$data = [
			'pria' => $this->m_admin->getMempelaiPriaRow($id),
			'wanita' => $this->m_admin->getMempelaiWanitaRow($id),
			'berkas' => $this->m_admin->getWhere('berkas', ['id_pernikahan' => $id])
		];
		// meload halaman dari folder view/admin/detail_registration.php
		$this->load->view('admin/detail_registration', $data);
	}



	// untuk menampilkan halaman berita dari sisi admin
	public function news()
	{
		$data = [
			'title' => 'Admin KUA | News',
			'data' => $this->m_admin->get('berita'),
			'editPage' => false
		];
		// meload halaman dari folder view/admin/news.php
		$this->load->view('admin/news', $data);
	}

	// halaman edit berita
	public function edit_news($id)
	{
		$data = [
			'title' => 'Admin KUA | Edit News',
			'data' => $this->m_admin->get('berita'),
			'edit' => $this->m_admin->getWhereRow('berita', ['id' => $id]),
			'editPage' => true
		];
		// meload halaman dari folder view/admin/news.php
		$this->load->view('admin/news', $data);
	}

	// halaman survey
	public function survey()
	{
		$data = [
			'title' => 'Admin KUA | Survey',
			'data' => $this->m_admin->get('survey')
		];
		// meload halaman dari folder view/admin/survey.php
		$this->load->view('admin/survey', $data);
	}

	// halaman kua
	public function kua()
	{
		$data = [
			'title' => 'Admin KUA | Kantor KUA',
			'data' => $this->m_admin->get('kua'),
			'editPage' => false
		];
		$this->load->view('admin/kua', $data);
	}
	// halaman edit kua
	public function edit_kua($id)
	{
		$data = [
			'title' => 'Admin KUA | Edit KUA',
			'data' => $this->m_admin->get('kua'),
			'edit' => $this->m_admin->getWhereRow('kua', ['id' => $id]),
			'editPage' => true
		];
		$this->load->view('admin/kua', $data);
	}
}
