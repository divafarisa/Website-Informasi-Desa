<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_Berita');

	}


	public function index()
	{
		$this->load->view('template/nav');
		$data['berita'] = $this->M_Berita->getBeritaTerbaru();
		$this->load->view('Home',$data);
		$this->load->view('template/footer');
	}
}
