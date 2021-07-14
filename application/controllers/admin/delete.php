<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');

	}

	// update berita
	public function delete_news($id)
	{

	    $this->m_admin->delete('berita',$id);
	    redirect('admin/page/news');

	}

	// update berita
	public function delete_survey($id)
	{

	    $this->m_admin->delete('survey',$id);
	    redirect('admin/page/survey');

	}
}
