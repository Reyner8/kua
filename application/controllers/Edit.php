<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

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
          	'table' => 'berita',
           	'data' => ['approve' => $approve]
        ];

        $this->m_admin->update(
        	$update['table'], 
        	$update['data'], 
        	['id' => $id]
        );
        redirect('admin/page/registration');
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
