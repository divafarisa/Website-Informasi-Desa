<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Artikel extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_Artikel');
        $this->load->model('M_Berita');
	}

    public function showDetailArtikel()
    {
        $this->load->view('Admin/navAdmin');
        $id_artikel = $this->input->get('id_artikel', true);
        $data['artikel'] = $this->M_Artikel->getSingleArtikel($id_artikel);
        $this->load->view('Admin/detailArtikel',$data);
        
    }

    public function showHalamanEditArtikel(){
        $this->load->view('Admin/navAdmin');
        $id_artikel = $this->input->get('id_artikel', true);
        $data['artikel'] = $this->M_Artikel->getSingleArtikel($id_artikel);
        $this->load->view('Admin/editArtikel',$data);
    }

    public function ShowHalamanTambahArtikel()
    {
        $this->load->view('Admin/navAdmin');
        $this->load->view('Admin/tambahArtikel');
    }

    public function ShowArtikel()
    {
        $this->load->view('template/nav');
        $jumlah_data = $this->M_Artikel->jumlah_artikel();
        $this->load->library('pagination');
        $config['base_url'] = base_url().'C_Artikel/ShowArtikel/';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 7;
        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);     
        $data['artikel'] = $this->M_Artikel->getArtikelPerPage($config['per_page'],$from);
        $data['berita'] = $this->M_Berita->getBeritaTerbaru();
        $data['artikel2'] = $this->M_Artikel->getArtikelTerbaru();
        $this->load->view('PageArtikel',$data);
        $this->load->view('template/footer');
    }

    public function showSingleArtikel()
    {
        $this->load->view('template/nav');
        $data['berita'] = $this->M_Berita->getBeritaTerbaru();
        $data['artikel'] = $this->M_Artikel->getArtikel();
        $id_artikel = $this->input->get('id_artikel', true);
        $data['artikel2'] = $this->M_Artikel->getSingleArtikel($id_artikel);
        $this->load->view('PageShowArtikel',$data);
        $this->load->view('template/footer');
    }


    public function ShowHalamanArtikel()
    {
        $this->load->view('Admin/navAdmin');
        $data['artikel'] = $this->M_Artikel->getArtikel();
        $this->load->view('Admin/artikel',$data);
    }

	public function tambah()
    {
        $judul_artikel = $this->input->post('judul_artikel', true);
        $isi = $this->input->post('isi_artikel', true);
        $this->load->library('upload');
        $config['upload_path'] = './Assets/foto/'; 
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
        $config['max_size'] = '1024'; 
        $config['file_name'] = $judul_artikel."_".time();
        $this->upload->initialize($config);
        if($_FILES['foto_artikel']['name'])
        {
            if ($this->upload->do_upload('foto_artikel'))
            {
                $foto = $this->upload->data();
                $this->M_Artikel->tambahArtikel($judul_artikel, $isi, $foto['file_name']);
                redirect('C_Artikel/ShowHalamanArtikel');

            }
        } else {
            
        }
    }

    public function edit(){
        $id_artikel = $this->input->get('id_artikel', true);
        $judul_artikel = $this->input->post('judul_artikel', true);
        $isi = $this->input->post('isi_artikel', true);
        $this->load->library('upload');
        $config['upload_path'] = './Assets/foto/'; 
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
        $config['max_size'] = '1024'; 
        $config['file_name'] = $judul_artikel."_".time();
        $this->upload->initialize($config);
        if($_FILES['foto_artikel']['name'])
        {
            if ($this->upload->do_upload('foto_artikel'))
            {
                $foto = $this->upload->data();
                $this->M_Artikel->updateArtikel($id_artikel, $judul_artikel, $isi, $foto['file_name']);
                redirect('C_Artikel/ShowHalamanArtikel');

            }
        }
    }




    public function hapusArtikel(){
        $id_artikel = $this->input->get('id_artikel', true);
        $this->M_Artikel->hapusArtikel($id_artikel);
        redirect('C_Artikel/ShowHalamanArtikel');
    }
}