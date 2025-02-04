<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
        $this->load->library('form_validation');
    }
	public function index()
	{
        $data['judul'] = 'Barang | Inventaris';
        $data['barang'] = $this->Barang_model->getAllBrg();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('barang/index');
		$this->load->view('templates/footer');
	}

    // fungsi tambah
    public function tambah()
    {
        $data['judul'] = 'Tambah Barang | Inventaris';
        $data['kategori'] = $this->Barang_model->getAllKat();
        $data['ruangan'] = $this->Barang_model->getAllRuang();

        $this->form_validation->set_rules('kode_brg', 'Kode_brg', 'required');
        $this->form_validation->set_rules('kode_kat', 'Kode_kat', 'required');
        $this->form_validation->set_rules('kode_ruang', 'Kode_ruang', 'required');
        $this->form_validation->set_rules('nama_brg', 'Nama_brg', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        $this->form_validation->set_rules('kondisi', 'Kondisi', 'required');

        if ($this->form_validation->run() == FALSE) {
        $this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('barang/tambah', $data);
		$this->load->view('templates/footer');
        } else {
            $this->Barang_model->addBrg();
            $this->session->set_flashdata('flash', 'Ditambah');
            redirect('barang');
        }
    }

    // EDIT Data
    public function edit($kode)
    {
        $data['judul'] = 'Edit Barang | Inventaris';
        $data['kategori'] = $this->Barang_model->getAllKat();
        $data['ruangan'] = $this->Barang_model->getAllRuang();
        $data['barang'] = $this->Barang_model->getBrgByKode($kode);

        $this->form_validation->set_rules('kode_brg', 'Kode_brg', 'required');
        $this->form_validation->set_rules('kode_kat', 'Kode_kat', 'required');
        $this->form_validation->set_rules('kode_ruang', 'Kode_ruang', 'required');
        $this->form_validation->set_rules('nama_brg', 'Nama_brg', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        $this->form_validation->set_rules('kondisi', 'Kondisi', 'required');

        if ($this->form_validation->run() == FALSE) {
        $this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('barang/edit', $data);
		$this->load->view('templates/footer');
        } else {
            $this->Barang_model->editBrg($kode);
            $this->session->set_flashdata('flash', 'Diedit');
            redirect('barang');
        }
    }

    // fungsi hapus
    public function hapus($kode)
    {
        $this->Barang_model->delBrg($kode);
        $this->session->set_flashdata('flash', 'Diedit');
        redirect('barang');
    }

}
