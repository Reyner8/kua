<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
Note:
(semua yang ada dalam folder controller berguna untuk memproses semua perintah baik ke tampilan maupun ke database) 
pada file controller/admin/insert.php ini berisi semua fungsi yang berguna 
untuk melakukan penginputan data ke database
pada fungsi __construct berguna untuk meload library atau model yang diperlukan
*/

class Insert extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
		$this->load->library('upload');
		$this->load->library('form_validation');
	}

	// fungsi ini untuk menginput data berita terbaru melalui sisi admin
	public function insert_news()
	{
		// validasi data
		$this->form_validation->set_rules('judul', 'judul', 'required');
		$this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');

		if ($this->form_validation->run()) {
			// ambil data dari form
			$judul = $this->input->post('judul');
			$deskripsi = $this->input->post('deskripsi');
			$foto = $this->__uploadFile('fotopost');

			if ($foto != '') {

				$insert = [
					'table' => 'berita',
					'data' => [
						'judul'    		=> $judul,
						'deskripsi'    	=> $deskripsi,
						'foto' 	=> $foto,
						'tanggal'    	=> date('Y-m-d'),
					]
				];
			} else {
				$this->session->set_flashdata('err', '<div class="mt-3 alert alert-danger alert-dismissible fade show" role="alert"> Input data gagal, Silahkan coba lagi !</div>');
			}

			$this->m_admin->insert($insert['table'], $insert['data']);
			redirect('admin/page/news');
		} else {
			$this->session->set_flashdata('err', '<div class="mt-3 alert alert-danger alert-dismissible fade show" role="alert"> Input data gagal, Silahkan coba lagi !</div>');
			redirect('admin/page/news');
		}
	}

	// fungsi ini untuk melakukan input data kua melalui sisi admin
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

	// fungsi ini berguna untuk mengupload gambar yang nantinya di panggil di fungsi insert news
	private function __uploadFile($fileName)
	{
		$file = $_FILES[$fileName]['name'];
		$explode = explode('.', $file);
		$newName = rand() . '-' . $fileName . '.' . $explode[1];

		$config['upload_path'] = './assets/berita';
		$config['allowed_types'] = 'jpg|jpeg|png|pdf';
		$config['max_size'] = '0';  //2MB max
		$config['max_width'] = '4480'; // pixel
		$config['max_height'] = '4480'; // pixel
		$config['file_name'] = $newName;

		$this->upload->initialize($config);
		if (!empty($file)) {
			if ($this->upload->do_upload($fileName)) {
				$berkas = $this->upload->data();
				return $newName;
			} else {
				return '';
			}
		} else {
			return '';
		}
	}
}
