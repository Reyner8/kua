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

		// Suami
		$nik_suami = $this->input->post('nik_suami');
		$nama_suami = $this->input->post('nama_suami');
		$kewarganegaraan_suami = $this->input->post('kewarganegaraan_suami');
		$tempat_lahir_suami = $this->input->post('tempat_lahir_suami');
		$tanggal_lahir_suami = $this->input->post('tanggal_lahir_suami');
		$umur = $this->input->post('umur');
		$status_suami = $this->input->post('status_suami');
		$agama_suami = $this->input->post('agama_suami');
		$jk_suami = $this->input->post('jk_suami');
		$alamat_suami = $this->input->post('alamat_suami');
		$pekerjaan_suami = $this->input->post('pekerjaan_suami');
		$telepon_suami = $this->input->post('telepon_suami');
		$email_suami = $this->input->post('email_suami');

		// Istri
		$nik_istri = $this->input->post('nik_istri');
		$nama_istri = $this->input->post('nama_istri');
		$kewarganegaraan_istri = $this->input->post('kewarganegaraan_istri');
		$tempat_lahir_istri = $this->input->post('tempat_lahir_istri');
		$tanggal_lahir_istri = $this->input->post('tanggal_lahir_istri');
		$umur_istri = $this->input->post('umur_istri');
		$status_istri = $this->input->post('status_istri');
		$agama_istri = $this->input->post('agama_istri');
		$jk_istri = $this->input->post('jk_istri');
		$alamat_istri = $this->input->post('alamat_istri');
		$pekerjaan_istri = $this->input->post('pekerjaan_istri');
		$telepon_istri = $this->input->post('telepon_istri');
		$email_istri = $this->input->post('email_istri');

		
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
