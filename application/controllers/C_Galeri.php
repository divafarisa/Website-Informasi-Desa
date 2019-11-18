<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Galeri extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_Artikel');
        $this->load->model('M_Berita');
        $this->load->model('M_Galeri');
	}

    public function ShowHalamanTambahGambar()
    {
        $this->load->view('Admin/navAdmin');
        $this->load->view('Admin/tambahFoto');
    }

    public function ShowGaleri()
    {
        $this->load->view('template/nav');
        
        $data['foto'] = $this->M_Galeri->getFoto();
        $this->load->view('PageGaleri',$data);
        $this->load->view('template/footer');
    }


    public function ShowHalamanGaleri()
    {
        $this->load->view('Admin/navAdmin');
        $data['foto'] = $this->M_Galeri->getFoto();
        $this->load->view('Admin/galeri',$data);
    }

	public function tambah()
    {
        $judul_foto = $this->input->post('judul_foto', true);
        $caption_foto = $this->input->post('caption_foto', true);
        
        $this->load->library('upload');
        $config['upload_path'] = './Assets/foto/'; 
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
        $config['max_size'] = '1024'; 
        $config['file_name'] = $judul_foto."_".time();
        $this->upload->initialize($config);
        if($_FILES['foto_galeri']['name'])
        {
            if ($this->upload->do_upload('foto_galeri'))
            {
                $foto = $this->upload->data();
                $this->M_Galeri->tambahGambar($judul_foto, $caption_foto, $foto['file_name']);
                redirect('C_Galeri/ShowHalamanGaleri');

            }
        }
    }

    public function hapusFoto(){
        $id_foto = $this->input->get('id_foto', true);
        $this->M_Galeri->hapusFoto($id_foto);
        redirect('C_Galeri/ShowHalamanGaleri');
    }
}