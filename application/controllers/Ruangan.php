<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ruangan_model');
        $this->load->library('form_validation');
    }
	public function index()
	{
        $data['judul'] = 'Home | Inventaris';
        $data['ruangan'] = $this->Ruangan_model->getAllRuang();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('ruangan/index');
		$this->load->view('templates/footer');
	}

    public function tambah()
    {
        $data['judul'] = 'Tambah Ruangan | Inventaris';
        $this->form_validation->set_rules('kode_ruang', 'Kode_ruang', 'required');
        $this->form_validation->set_rules('nama_ruang', 'Nama_ruang', 'required');

        if ($this->form_validation->run() == FALSE) {
        $this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('ruangan/tambah', $data);
		$this->load->view('templates/footer');
        } else {
            $this->Ruangan_model->addRuang();
            $this->session->set_flashdata('flash', 'Ditambah');
            redirect('ruangan');
        }
    }

    public function edit($kode) 
    {
        $data['judul'] = 'Edit Ruangan | Inventaris';
        $data['ruangan'] = $this->Ruangan_model->getRuangByKode($kode);

        $this->form_validation->set_rules('kode_ruang', 'Kode_ruang', 'required');
        $this->form_validation->set_rules('nama_ruang', 'Nama_ruang', 'required');

        if ($this->form_validation->run() == FALSE) {
        $this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('ruangan/edit', $data);
		$this->load->view('templates/footer');
        } else {
            $this->Ruangan_model->editRuang($kode);
            $this->session->set_flashdata('flash', 'Diedit');
            redirect('ruangan');
        }
    }

    public function hapus($kode)
    {
        $this->Ruangan_model->delRuang($kode);
            $this->session->set_flashdata('flash', 'Diedit');
            redirect('ruangan');
    }
}
