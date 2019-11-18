<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Kontak extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('M_Kontak');
		$this->load->model('M_Artikel');
		$this->load->model('M_Berita');
	}


	public function ShowHalamanKontak()
	{
		$this->load->view('Admin/navAdmin');
		$data['kontak'] = $this->M_Kontak->getKontak();
		$this->load->view('Admin/kontak',$data);
	}

	public function ShowKontak(){
		$this->load->view('template/nav');
		$data['berita'] = $this->M_Berita->getBeritaTerbaru();
        $data['artikel'] = $this->M_Artikel->getArtikelTerbaru();
        $data['kontak'] = $this->M_Kontak->getKontak();
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

	public function update(){

        $email_kontak = $this->input->post('email_kontak', true);
        $nohp_kontak = $this->input->post('nohp_kontak', true);
        $nowa_kontak = $this->input->post('nowa_kontak', true);
        $ig_kontak = $this->input->post('ig_kontak', true);
        $fb_kontak = $this->input->post('fb_kontak', true);
        $tw_kontak = $this->input->post('tw_kontak', true);
        $this->M_Kontak->updateKontak($email_kontak, $nohp_kontak, $nowa_kontak, $ig_kontak, $fb_kontak, $tw_kontak);
        redirect('C_Kontak/ShowHalamanKontak');
	}


}
