<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
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
	}

	// konfirmasi pernikahan
	public function update_registration()
	{
		$approve 	= $this->uri->segment(4);
		$id 		= $this->uri->segment(5);

		// update status approve
		$update = [
			'table' => 'pernikahan',
			'data' => ['approve' => $approve]
		];
		// $this->m_admin->update(
		// 	$update['table'],
		// 	$update['data'],
		// 	['id' => $id]
		// );

		// Send Email
		$fileName = $this->laporan_pdf($id);
		$data = $this->m_admin->getMempelaiPriaRow($id);
		$this->sendEmail($data->email, $approve, $fileName);

		redirect('admin/page/registration');
	}

	// laporan pendaftaran
	private function laporan_pdf($id)
	{
		$data = [
			'pria' => $this->m_admin->getMempelaiPriaRow($id),
			'wanita' => $this->m_admin->getMempelaiWanitaRow($id)
		];
		$this->load->library('pdf');

		$msg = $this->load->view('laporan', $data);

		// convert string to html
		$html = mb_convert_encoding($msg, 'HTML-ENTITIES', 'UTF-8');

		$this->pdf->load_html($html);
		$this->pdf->setPaper('A4', 'portrait');
		$this->pdf->render();
		$output = $this->pdf->output();
		$fileName = rand() . '-Biodata-no_daftar-' . $data['pria']->no_daftar . '.pdf';
		$dir = 'assets/temp/';
		file_put_contents($dir . $fileName, $output);
		return $fileName;
	}

	private function sendEmail($email, $approve, $fileName)
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
			// Attachments
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
		$update = [
			'table' => 'berita',
			'data' => [
				'judul'    		=> $judul,
				'deskripsi'    	=> $deskripsi,
				'tanggal'    	=> date('Y-m-d'),
			]
		];
		$this->m_admin->update($update['table'], $update['data'], ['id' => $id]);
		redirect('admin/page/news');
	}
}
