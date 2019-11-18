<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Umkm extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('M_Artikel');
        $this->load->model('M_Berita');
        $this->load->model('M_Umkm'); 
        $this->load->model('M_Organisasi'); 
		
	}
    public function showSingleUmkm()
    {
        $this->load->view('template/nav');
        $data['berita'] = $this->M_Berita->getBeritaTerbaru();
        $data['artikel'] = $this->M_Artikel->getArtikel();
        $id_umkm = $this->input->get('id_umkm', true);
        $data['umkm'] = $this->M_Umkm->getSingleUmkm($id_umkm);
        $this->load->view('PageShowUmkm',$data);
        $this->load->view('template/footer');
    }
	
    public function ShowHalamanTambahUmkm()
    {
        $this->load->view('Admin/navAdmin');
        $this->load->view('Admin/tambahUmkm');
    }

    public function showDetailUmkm()
    {
        $this->load->view('Admin/navAdmin');
        $id_umkm = $this->input->get('id_umkm', true);
        $data['umkm'] = $this->M_Umkm->getSingleUmkm($id_umkm);
        $this->load->view('Admin/detailUmkm',$data);
        
    }

    public function edit(){
        $id_umkm = $this->input->get('id_umkm', true);
        $nama_umkm = $this->input->post('nama_umkm', true);
        $deskripsi_umkm = $this->input->post('deskripsi_umkm', true);
        $this->load->library('upload');
        $config['upload_path'] = './Assets/foto/'; 
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
        $config['max_size'] = '1024'; 
        $config['file_name'] = $nama_umkm."_".time();
        $this->upload->initialize($config);
        if($_FILES['foto_umkm']['name'])
        {
            if ($this->upload->do_upload('foto_umkm'))
            {
                $foto = $this->upload->data();
                $this->M_Umkm->updateUmkm($id_umkm, $nama_umkm, $deskripsi_umkm, $foto['file_name']);
                redirect('C_Umkm/ShowHalamanUmkm');

            }
        }
    }
    public function ShowUmkmOrganisasi()
    {
        $this->load->view('template/nav');
        $data['berita'] = $this->M_Berita->getBeritaTerbaru();
        $data['artikel'] = $this->M_Artikel->getArtikelTerbaru();
        $data['umkm'] = $this->M_Umkm->getUmkm();
        $data['org'] = $this->M_Organisasi->getOrganisasi();
        $this->load->view('PageOrganisasiUmkm',$data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $nama_umkm = $this->input->post('nama_umkm', true);
        $deskripsi_umkm = $this->input->post('deskripsi_umkm', true);
        $this->load->library('upload');
        $config['upload_path'] = './Assets/foto/'; 
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
        $config['max_size'] = '1024'; 
        $config['file_name'] = $nama_umkm."_".time();
        $this->upload->initialize($config);
        if($_FILES['foto_umkm']['name'])
        {
            if ($this->upload->do_upload('foto_umkm'))
            {
                $foto = $this->upload->data();
                $this->M_Umkm->tambahUmkm($nama_umkm, $deskripsi_umkm, $foto['file_name']);
                redirect('C_Umkm/ShowHalamanUmkm');

            }
        }
    }
    
    public function showHalamanEditUmkm(){
        $this->load->view('Admin/navAdmin');
        $id_umkm = $this->input->get('id_umkm', true);
        $data['umkm'] = $this->M_Umkm->getSingleUmkm($id_umkm);
        $this->load->view('Admin/editUmkm',$data);
    }

	public function ShowHalamanUmkm()
	{
		$this->load->view('Admin/navAdmin');
		$data['umkm'] = $this->M_Umkm->getUmkm();
		$this->load->view('Admin/umkm',$data);
	}

	public function hapusUmkm(){
        $id_umkm = $this->input->get('id_umkm', true);
        $this->M_Umkm->hapusUmkm($id_umkm);
        redirect('C_Umkm/ShowHalamanUmkm');
    }

	

}
