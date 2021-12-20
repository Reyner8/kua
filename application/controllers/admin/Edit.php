<?php
/*
Note:
(semua yang ada dalam folder controller berguna untuk memproses semua perintah baik ke tampilan maupun ke database) 
pada file controller/admin/edit.php ini berisi semua fungsi yang berguna 
untuk melakukan update data ke database
pada fungsi __construct berguna untuk meload library atau model yang diperlukan
*/
defined('BASEPATH') or exit('No direct script access allowed');
// meload library email agar bisa mengirimkan email
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

class Edit extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
		$this->load->library('upload');
	}

	// fungsi ini berguna agar admin dapat menyetujui pendaftaran dan juga mengirim email ke pendaftar
	public function update_registration()
	{
		$approve 	= $this->uri->segment(4);
		$id 		= $this->uri->segment(5);

		// update status approve
		$update = [
			'table' => 'pernikahan',
			'data' => ['approve' => $approve]
		];
		$this->m_admin->update(
			$update['table'],
			$update['data'],
			['id' => $id]
		);

		// Send Email
		if ($approve == 'rejected') {
			$data = $this->m_admin->getMempelaiPriaRow($id);
			$this->sendEmail($data->email, $approve, '');
		} elseif ($approve == 'approved') {
			$fileName = $this->laporan_pdf($id);
			$data = $this->m_admin->getMempelaiPriaRow($id);
			$this->sendEmail($data->email, $approve, $fileName);
		}

		redirect('admin/page/registration');
	}

	// fungsi ini untuk membuat laporan
	private function laporan_pdf($id)
	{
		$this->load->library('pdf');
		$data = [
			'pria' => $this->m_admin->getMempelaiPriaRow($id),
			'wanita' => $this->m_admin->getMempelaiWanitaRow($id)
		];

		$laporan = $this->load->view('laporan', $data, true);
		// $laporan = $this->pdf->load_view('laporan', $data, true);

		// $html = mb_convert_encoding($msg, 'HTML-ENTITIES', 'UTF-8');
		$fileName = rand() . '-Biodata-no_daftar-' . $data['pria']->no_daftar . '.pdf';
		$dir = 'assets/temp/';

		$this->pdf->filename = $fileName;
		$this->pdf->load_html($laporan);
		$this->pdf->setPaper('A4', 'portrait');
		$this->pdf->render();
		$output = $this->pdf->output();

		file_put_contents($dir . $fileName, $output);
		return $fileName;
	}

	private function sendEmail($email, $approve, $fileName = '')
	{
		// Instantiation and passing `true` enables exceptions
		$mail = new PHPMailer(true);
		//Server settings
		$mail->isSMTP();
		$mail->Host       = 'smtp.gmail.com';
		$mail->SMTPAuth   = true;
		$mail->Username   = 'reyner.apps@gmail.com'; // Email
		$mail->Password   = 'reyner_1998'; // Password
		$mail->Port       = 587;

		//Recipients
		$mail->setFrom('reyner.apps@gmail.com');
		$mail->addAddress($email);


		// Content
		$mail->isHTML(true);
		$mail->Subject = 'Informasi Pendaftaran';
		if ($approve == 'approved') {
			$mail->Body    = 'Data anda sudah disetujui silahkan download file untuk dapat biodata dan informasi waktu pranikah';
			$mail->addAttachment('assets/temp/' . $fileName);
		} elseif ($approve == 'rejected') {
			$mail->Body    = 'Data yang anda daftarkan ditolak';
		}
		$mail->send();
	}

	public function update_news($id)
	{
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		if ($_FILES['fotopost']['name'] == '') {
			$foto = $this->m_admin->getWhereRow('berita', ['id' => $id])->foto;
		} else {
			$foto = $this->__uploadFile('fotopost');
		}
		$update = [
			'table' => 'berita',
			'data' => [
				'judul'    		=> $judul,
				'deskripsi'    	=> $deskripsi,
				'foto' => $foto,
				'tanggal'    	=> date('Y-m-d'),
			]
		];
		$this->m_admin->update($update['table'], $update['data'], ['id' => $id]);
		redirect('admin/page/news');
	}

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

	public function update_kua($id)
	{
		$kode = $this->input->post('kode');
		$kota = $this->input->post('kota');
		$kecamatan = $this->input->post('kecamatan');
		$update = [
			'table' => 'kua',
			'data' => [
				'kode_kua'    		=> $kode,
				'kota'    	=> $kota,
				'kecamatan'    	=> $kecamatan,
			]
		];
		$this->m_admin->update($update['table'], $update['data'], ['id' => $id]);
		redirect('admin/page/kua');
	}
}
