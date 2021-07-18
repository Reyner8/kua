<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
	}

	// halaman utama 
	public function index()
	{
		$data = [
			'title' => 'User KUA | Dashboard',
			'data' => $this->m_user->get('berita'),
		];
		$this->load->view('dashboard', $data);
	}



	// halaman berita
	public function detail_news($id)
	{
		$data = [
			'title' => 'User KUA | News',
			'data' => $this->m_user->getWhereRow('berita', ['id' => $id]),
		];
		$this->load->view('detail_berita', $data);
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
		$this->load->view('admin/news', $data);
	}

	// halaman survey
	public function survey()
	{
		$data = [
			'title' => 'Admin KUA | Survey',
			'data' => $this->m_admin->get('survey')
		];
		$this->load->view('admin/survey', $data);
	}

	// ------

	// halaman informasi KUA
	public function information_kua()
	{
		$data = [
			'title' => 'Admin KUA | Information KUA',
		];
		$this->load->view('info_kua', $data);
	}

	// halaman informasi pendaftaran
	public function information_registration()
	{
		$data = [
			'title' => 'Admin KUA | Information Registration',
		];
		$this->load->view('info_registration', $data);
	}

	// halaman survey
	public function registration()
	{
		$lastRecord = $this->m_user->getLastRecord('pernikahan');

		if ($lastRecord) {
			$lr = $lastRecord->no_daftar + 1;
		} else {
			$lr = 1;
		}
		$data = [
			'title' => 'User KUA | Registrasi',
			'no_daftar' => $lr,
			'kode_kua' => $this->m_user->get('kua')
		];
		$this->load->view('registration', $data);
	}
}
