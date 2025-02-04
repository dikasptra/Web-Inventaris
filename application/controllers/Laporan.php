<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Laporan_model');
        $this->load->library('form_validation');
    }
	public function index()
	{
        $data['judul'] = 'Laporan | Inventaris';
        $data['laporan'] = $this->Laporan_model->getAllLap();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('laporan/index', $data);
		$this->load->view('templates/footer');
	}
    public function cetak()
    {
        $data['judul'] = 'Print | Inventaris';
        $data['cetak'] = $this->Laporan_model->getAllLap();

		$this->load->view('templates/headercetak', $data);
		$this->load->view('laporan/cetak', $data);
		$this->load->view('templates/footer');
    }

}
