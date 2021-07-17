<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Insert extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
		$this->load->library('form_validation');
	}


	public function insert_registration()
	{
		$no_daftar = $this->input->post('no_daftar');
		$kode_kua = $this->input->post('kode_kua');
		$tempat_nikah = $this->input->post('tempat_nikah');
		$tanggal_nikah = $this->input->post('tanggal_nikah');
		$alamat_nikah = $this->input->post('alamat_nikah');
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
}
