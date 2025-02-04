<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
        $data['judul'] = 'Home | Inventaris';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('home/index');
		$this->load->view('templates/footer');
	}
}
