<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Saran extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('M_Kontak');
		$this->load->model('M_Artikel');
		$this->load->model('M_Berita');
		$this->load->model('M_Saran');
		
	}


	public function ShowHalamanSaran()
	{
		$this->load->view('Admin/navAdmin');
		$data['saran'] = $this->M_Saran->getSaran();
		$this->load->view('Admin/saran',$data);
	}

	public function ShowSaran(){
		$this->load->view('template/nav');
		$data['berita'] = $this->M_Berita->getBeritaTerbaru();
        $data['artikel'] = $this->M_Artikel->getArtikelTerbaru();
        $data['kontak'] = $this->M_Kontak->getKontak();
        $data['saran'] = $this->M_Saran->getSaran();
        $this->load->view('PageKontak',$data);
        $this->load->view('template/footer');


	}
	public function ShowContact()
	{
		$this->load->view('template/nav');
		$data['berita'] = $this->M_Berita->getBeritaTerbaru();
$data['artikel'] = $this->M_Artikel->getArtikelTerbaru();
		$this->load->view('PageKontak',$data);
		$this->load->view('template/footer');
	}

	public function tambah(){

        $email = $this->input->post('email', true);
        $isi = $this->input->post('isi', true);
        $this->M_Saran->tambahSaran($email, $isi);
        redirect('C_Saran/ShowHalamanSaran');
	}


}
