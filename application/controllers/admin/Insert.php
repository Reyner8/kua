<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Insert extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
		$this->load->library('form_validation');
	}

	// input berita
	public function insert_news()
	{
		// validasi data
		$this->form_validation->set_rules('judul', 'judul', 'required');
		$this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');

		if ($this->form_validation->run()) {
			// ambil data dari form
			$judul = $this->input->post('judul');
			$deskripsi = $this->input->post('deskripsi');

			$insert = [
				'table' => 'berita',
				'data' => [
					'judul'    		=> $judul,
					'deskripsi'    	=> $deskripsi,
					'tanggal'    	=> date('Y-m-d'),
				]
			];

			$this->m_admin->insert($insert['table'], $insert['data']);
			redirect('admin/page/news');
		} else {
			$this->session->set_flashdata('err', '<div class="mt-3 alert alert-danger alert-dismissible fade show" role="alert"> Input data gagal, Silahkan coba lagi !</div>');
			redirect('admin/page/news');
		}
	}

	// input berita
	public function insert_kua()
	{
		// validasi data
		$this->form_validation->set_rules('kode', 'kode', 'required');
		$this->form_validation->set_rules('kota', 'kota', 'required');
		$this->form_validation->set_rules('kecamatan', 'kecamatan', 'required');

		if ($this->form_validation->run()) {
			// ambil data dari form
			$kode = $this->input->post('kode');
			$kota = $this->input->post('kota');
			$kecamatan = $this->input->post('kecamatan');

			$insert = [
				'table' => 'kua',
				'data' => [
					'kode_kua'    		=> $kode,
					'kota'    	=> $kota,
					'kecamatan'    	=> $kecamatan,
				]
			];

			$this->m_admin->insert($insert['table'], $insert['data']);
			redirect('admin/page/kua');
		} else {
			$this->session->set_flashdata('err', '<div class="mt-3 alert alert-danger alert-dismissible fade show" role="alert"> Input data gagal, Silahkan coba lagi !</div>');
			redirect('admin/page/kua');
		}
	}
}
