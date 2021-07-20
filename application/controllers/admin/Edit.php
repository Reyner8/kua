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

		$update = [
			'table' => 'pernikahan',
			'data' => ['approve' => $approve]
		];

		$this->m_admin->update(
			$update['table'],
			$update['data'],
			['id' => $id]
		);
		$dataEmail = $this->m_admin->getMempelaiPriaRow($id);
		$file = 'hello';
		$this->approve($dataEmail->email, $file);
		redirect('admin/page/registration');
	}

	// laporan pendaftaran
	public function laporan_pdf()
	{

		$data = [
			'data' => 'hello world'
		];

		$this->load->library('pdf');

		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "Data_pernikahan.pdf";
		$this->pdf->load_view('laporan', $data);
	}

	private function approve($email, $file)
	{
		// Instantiation and passing `true` enables exceptions
		$mail = new PHPMailer(true);

		//Server settings
		// $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
		$mail->isSMTP();                                            // Send using SMTP
		$mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		$mail->Username   = 'reyner.apps@gmail.com';                     // SMTP username
		$mail->Password   = 'reyner_1998';                               // SMTP password
		// $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
		$mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

		//Recipients
		$nama_pengirim = 'ReynerApps';
		$mail->setFrom('reyner.apps@gmail.com');
		$mail->addAddress($email, $nama_pengirim);     // Add a recipient

		// $mail->addReplyTo('asalemailPengirim');
		// $mail->addCC('cc@example.com');
		// $mail->addBCC('bcc@example.com');

		// Attachments
		// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		$mail->addAttachment('assets/' . $file);    // Optional name

		// Content
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = 'Informasi Pendaftaran';
		$mail->Body    = 'Data anda sudah disetujui admin, Silahkan download file';

		if ($mail->send()) {
			echo 'Konfirmasi pembayaran telah berhasil';
		} else {
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
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
