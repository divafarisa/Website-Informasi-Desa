<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Admin extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('M_Berita');
		$this->load->model('M_Artikel');
		$this->load->model('M_Galeri');
		$this->load->model('M_Layanan');
	}

	public function ShowDashboardAdmin()
	{
		$this->load->view('Admin/navAdmin');
		$data['berita'] = $this->M_Berita->jumlah_berita();
		$data['artikel'] = $this->M_Artikel->jumlah_artikel();
		$data['foto'] = $this->M_Galeri->jumlah_galeri();
		$this->load->view('DashboardAdmin',$data);
	}

	public function ShowHalamanBerita()
	{
		$this->load->view('Admin/navAdmin');
		$data['berita'] = $this->M_Berita->getBerita();
		$this->load->view('Admin/berita',$data);
	}

	public function ShowHalamanTambahBerita()
	{
		$this->load->view('Admin/navAdmin');
		$this->load->view('Admin/tambahBerita');
	}



	public function logout()
	{
		$this->session->sess_destroy();
		redirect('C_Home');
	
	}

}
