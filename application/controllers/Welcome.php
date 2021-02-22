<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() //Untuk memanggil keseluruhan model agar tidak usah memanggil satu persatu
    {
                parent::__construct();
                $this->load->model('M_tambah');
                $this->load->model('M_kategori');
    }

	public function index()
	{
		
		$data['kategori'] = $this->M_kategori->get()->result();

		//Halaman Index digunakan untuk menghitung jumlah resep dan jumlah kategori
		$data['jumlah_resep'] = $this->M_tambah->get()->num_rows(); 
		$data['jumlah_kategori'] = $this->M_kategori->get()->num_rows();

		//Halaman Resep proses join antara tabel resep dengan kategori
		$data['tambah'] = $this->M_tambah->get_join('kategori')->result();

		$data['judul'] = "Blogku Resep";
		$this->load->view('front/template/header', $data);
		$this->load->view('front/index', $data);
		$this->load->view('front/template/footer', $data);
	}
}
