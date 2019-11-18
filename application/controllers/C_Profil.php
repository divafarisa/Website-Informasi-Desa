<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Profil extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_Berita');
		$this->load->model('M_Artikel');
		$this->load->model('M_Profesi');
		$this->load->model('M_Agama');
		$this->load->model('M_Etnis');
	}

	public function ShowGeografi()
	{
		$this->load->view('template/nav');
		$data['berita'] = $this->M_Berita->getBeritaTerbaru();
		$data['artikel'] = $this->M_Artikel->getArtikelTerbaru();
		$this->load->view('PageGeografis',$data);
		$this->load->view('template/footer');
	}
	public function ShowVisimisi()
	{
		$this->load->view('template/nav');
		$data['berita'] = $this->M_Berita->getBeritaTerbaru();
		$data['artikel'] = $this->M_Artikel->getArtikelTerbaru();
		$this->load->view('PageVisiMisi',$data);
		$this->load->view('template/footer');
	}
	public function ShowDemografi()
	{
		$this->load->view('template/nav');
		$data['profesi'] = $this->M_Profesi->getProfesi();
		$data['agama'] = $this->M_Agama->getAgama();
		$data['etnis'] = $this->M_Etnis->getEtnis();
		$data['berita'] = $this->M_Berita->getBeritaTerbaru();
		$data['artikel'] = $this->M_Artikel->getArtikelTerbaru();
		$this->load->view('PageDemografi',$data);
		$this->load->view('template/footer');
	}
	public function ShowPeta()
	{
		$this->load->view('template/nav');
		$data['berita'] = $this->M_Berita->getBeritaTerbaru();
		$data['artikel'] = $this->M_Artikel->getArtikelTerbaru();
		$this->load->view('PagePeta',$data);
		$this->load->view('template/footer');
	}
}
