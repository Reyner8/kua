<?php
defined('BASEPATH') or exit('No direct script access allowed');
/*
Note:
(semua yang ada dalam folder controller berguna untuk memproses semua perintah baik ke tampilan maupun ke database) 
pada file controller/admin/delete.php ini berisi semua fungsi yang berguna 
untuk melakukan penghapusan data dari database
pada fungsi __construct berguna untuk meload library atau model yang diperlukan
*/
class Delete extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
	}

	// fungsi ini berfungsi untuk menghapus berita dari sisi admin
	public function delete_news($id)
	{

		$this->m_admin->delete('berita', $id);
		redirect('admin/page/news');
	}

	// fungsi ini berfungsi untuk menghapus data kua dari sisi admin
	public function delete_kua($id)
	{

		$this->m_admin->delete('kua', $id);
		redirect('admin/page/kua');
	}

	// fungsi ini berfungsi untuk menghapus data survey yang telah di input oleh user
	public function delete_survey($id)
	{

		$this->m_admin->delete('survey', $id);
		redirect('admin/page/survey');
	}
}
