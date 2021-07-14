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

	// halaman informasi KUA
	public function information_kua()
	{
		$data = [
			'title' => 'Admin KUA | Registration',
		];
		$this->load->view('admin/info_kua', $data);
	}

	// halaman berita
	public function news()
	{
		$data = [
			'title' => 'Admin KUA | News',
			'data' => $this->m_admin->get('berita'),
			'editPage' => false
		];
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
}
