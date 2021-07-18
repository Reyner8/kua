<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Insert extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
		$this->load->library('form_validation');
		$this->load->library('upload');
	}


	public function insert_registration()
	{
		// Suami
		$nik_suami = $this->input->post('nik_suami');
		$nama_suami = $this->input->post('nama_suami');
		$kewarganegaraan_suami = $this->input->post('kewarganegaraan_suami');
		$tempat_lahir_suami = $this->input->post('tempat_lahir_suami');
		$tanggal_lahir_suami = $this->input->post('tanggal_lahir_suami');
		$umur_suami = $this->input->post('umur_suami');
		$status_suami = $this->input->post('status_suami');
		$agama_suami = $this->input->post('agama_suami');
		$jk_suami = $this->input->post('jk_suami');
		$alamat_suami = $this->input->post('alamat_suami');
		$pekerjaan_suami = $this->input->post('pekerjaan_suami');
		$telepon_suami = $this->input->post('telepon_suami');
		$email_suami = $this->input->post('email_suami');
		$insert_suami = [
			'table' => 'penduduk',
			'data' => [
				'nik' => $nik_suami,
				'nama' => $nama_suami,
				'tempat_lahir' => $tempat_lahir_suami,
				'tanggal_lahir' => $tanggal_lahir_suami,
				'jk' => $jk_suami,
				'kewarganegaraan' => $kewarganegaraan_suami,
				'umur' => $umur_suami,
				'email' => $email_suami,
				'no_tlp' => $telepon_suami,
				'pekerjaan' => $pekerjaan_suami,
				'alamat' => $alamat_suami,
				'agama' => $agama_suami,
				'status' => $status_suami,
				'foto' => $this->__uploadFile('foto_suami'),
			]
		];


		$idSuami = $this->m_user->insertReturnID($insert_suami['table'], $insert_suami['data']);

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
		$insert_istri = [
			'table' => 'penduduk',
			'data' => [
				'nik' => $nik_istri,
				'nama' => $nama_istri,
				'tempat_lahir' => $tempat_lahir_istri,
				'tanggal_lahir' => $tanggal_lahir_istri,
				'jk' => $jk_istri,
				'kewarganegaraan' => $kewarganegaraan_istri,
				'umur' => $umur_istri,
				'email' => $email_istri,
				'no_tlp' => $telepon_istri,
				'pekerjaan' => $pekerjaan_istri,
				'alamat' => $alamat_istri,
				'agama' => $agama_istri,
				'status' => $status_istri,
				'foto' => $this->__uploadFile('foto_istri'),
			]
		];
		$idIstri = $this->m_user->insertReturnID($insert_istri['table'], $insert_istri['data']);

		// pernikahan
		$no_daftar = $this->input->post('no_daftar');
		$id_kua = $this->input->post('kode_kua');
		$tempat_nikah = $this->input->post('tempat_nikah');
		$tanggal_nikah = $this->input->post('tanggal_nikah');
		$alamat_nikah = $this->input->post('alamat_nikah');
		$insert_pernikahan = [
			'table' => 'pernikahan',
			'data' => [
				'id_penduduk' => $idSuami,
				'id_kua' => $id_kua,
				'no_daftar' => $no_daftar,
				'id_pasangan' => $idIstri,
				'tempat_nikah' => $tempat_nikah,
				'tanggal_nikah' => $tanggal_nikah,
				'alamat' => $alamat_nikah,
			]
		];
		$idPernikahan = $this->m_user->insertReturnID($insert_pernikahan['table'], $insert_pernikahan['data']);

		// saksi
		$nik_saksi = $this->input->post('nik_saksi');
		$nama_saksi = $this->input->post('nama_saksi');
		$umur_saksi = $this->input->post('umur_saksi');
		$alamat_saksi = $this->input->post('alamat_saksi');
		$insert_saksi = [
			'table' => 'saksi',
			'data' => [
				'id_pernikahan' => $idPernikahan,
				'nik' => $nik_saksi,
				'nama' => $nama_saksi,
				'umur' => $umur_saksi,
				'alamat' => $alamat_saksi,
			]
		];
		$this->m_user->insert($insert_saksi['table'], $insert_saksi['data']);

		// berkas
		$nameFile = ['n1', 'n3', 'n5', 'akta_cerai', 'izin_komandan', 'izin_kedutaan', 'ktp', 'kk', 'akta_lahir', 'foto1', 'foto2'];
		foreach ($nameFile as $nf) :
			$insert_berkas = [
				'table' => 'berkas',
				'data' => [
					'id_pernikahan' => $idPernikahan,
					'nama' => $this->__uploadFile($nf)
				]
			];
			$this->m_user->insert($insert_berkas['table'], $insert_berkas['data']);
		endforeach;
		$this->session->set_flashdata('err', '<div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">Input berhasil</div>');
		redirect('page/registration');
	}

	private function __uploadFile($fileName)
	{
		$file = $_FILES[$fileName]['name'];
		$explode = explode('.', $file);
		$newName = rand() . '-' . $fileName . '.' . $explode[1];

		$config['upload_path'] = './assets/pendaftaran';
		$config['allowed_types'] = 'jpg|jpeg|png|pdf';
		$config['max_size'] = '0';  //2MB max
		$config['max_width'] = '4480'; // pixel
		$config['max_height'] = '4480'; // pixel
		$config['file_name'] = $newName;

		$this->upload->initialize($config);
		if (!empty($file)) {
			if ($this->upload->do_upload($fileName)) {
				$berkas = $this->upload->data();
				return $berkas['file_name'];
			} else {
				return '';
			}
		} else {
			return '';
		}
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

	public function insert_survey()
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$deskripsi = $this->input->post('deskripsi');

		$insert = [
			'table' => 'survey',
			'data' => [
				'nama' 		=> $nama,
				'email' 		=> $email,
				'deskripsi'  => $deskripsi,
			]
		];

		$this->m_user->insert($insert['table'], $insert['data']);
		redirect('page/survey');
	}
}
