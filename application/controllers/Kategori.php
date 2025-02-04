<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kategori_model');
        $this->load->library('form_validation');
    }
	public function index()
	{
        $data['judul'] = 'Home | Inventaris';
        $data['kategori'] = $this->Kategori_model->getAllKat();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('kategori/index');
		$this->load->view('templates/footer');
	}

    public function tambah()
    {
        $data['judul'] = 'Tambah Kategori | Inventaris';
        $this->form_validation->set_rules('kode_kat', 'Kode_kat', 'required');
        $this->form_validation->set_rules('nama_kat', 'Nama_kat', 'required');

        if ($this->form_validation->run() == FALSE) {
        $this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('kategori/tambah', $data);
		$this->load->view('templates/footer');
        } else {
            $this->Kategori_model->addKat();
            $this->session->set_flashdata('flash', 'Ditambah');
            redirect('kategori');
        }
    }

    public function edit($kode) 
    {
        $data['judul'] = 'Edit Kategori | Inventaris';
        $data['kategori'] = $this->Kategori_model->getKatByKode($kode);

        $this->form_validation->set_rules('kode_kat', 'Kode_kat', 'required');
        $this->form_validation->set_rules('nama_kat', 'Nama_kat', 'required');

        if ($this->form_validation->run() == FALSE) {
        $this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('kategori/edit', $data);
		$this->load->view('templates/footer');
        } else {
            $this->Kategori_model->editKat($kode);
            $this->session->set_flashdata('flash', 'Diedit');
            redirect('kategori');
        }
    }

    public function hapus($kode)
    {
        $this->Kategori_model->delKat($kode);
            $this->session->set_flashdata('flash', 'Diedit');
            redirect('kategori');
    }
}
