<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Layanan extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_Berita');
        $this->load->model('M_Artikel');
         $this->load->model('M_Layanan');
	}

	public function ShowLayanan(){
        $this->load->view('template/nav');
        $jumlah_data = $this->M_Layanan->jumlah_layanan();
       //konfigurasi pagination
       $this->load->library('pagination');
        $config['base_url'] = base_url().'C_Layanan/ShowLayanan/';
       $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 2;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

         $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
    $this->pagination->initialize($config);
        $data['layanan'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['layanan'] = $this->M_Layanan->getlayananPerPage($config["per_page"], $data['layanan']); 
        $data['pagination'] = $this->pagination->create_links();
 
        
        $data['berita2'] = $this->M_Berita->getBeritaTerbaru();
        $data['artikel'] = $this->M_Artikel->getArtikelTerbaru();
        $this->load->view('PageLayanan',$data);
        $this->load->view('template/footer');
    }

	public function tambah()
    {
        $judul_layanan = $this->input->post('judul_layanan', true);
        $isi = $this->input->post('isi_layanan', true);
        $this->load->library('upload');
        $config['upload_path'] = './Assets/foto/'; 
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
        $config['max_size'] = '1024'; 
        $config['file_name'] = $judul_layanan."_".time();
        $this->upload->initialize($config);
        if($_FILES['foto_layanan']['name'])
        {
            if ($this->upload->do_upload('foto_layanan'))
            {
                $foto = $this->upload->data();
                $this->M_Layanan->tambahLayanan($judul_layanan, $isi, $foto['file_name']);
                redirect('C_Layanan/ShowHalamanLayanan');

            }
        } else {
            
        }
    }

    public function edit(){
        $id_layanan = $this->input->get('id_layanan', true);
        $judul_layanan = $this->input->post('judul_layanan', true);
        $isi = $this->input->post('isi_layanan', true);
        $this->load->library('upload');
        $config['upload_path'] = './Assets/foto/'; 
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
        $config['max_size'] = '1024'; 
        $config['file_name'] = $judul_layanan."_".time();
        $this->upload->initialize($config);
        if($_FILES['foto_layanan']['name'])
        {
            if ($this->upload->do_upload('foto_layanan'))
            {
                $foto = $this->upload->data();
                $this->M_Layanan->updateLayanan($id_layanan, $judul_layanan, $isi, $foto['file_name']);
                redirect('C_Layanan/ShowHalamanLayanan');

            }
        }


        
    }
    public function showHalamanEditLayanan(){
        $this->load->view('Admin/navAdmin');
        $id_layanan = $this->input->get('id_layanan', true);
        $data['layanan'] = $this->M_Layanan->getSingleLayanan($id_layanan);
        $this->load->view('Admin/editLayanan',$data);
    }

public function ShowHalamanLayanan()
    {
        $this->load->view('Admin/navAdmin');
        $data['layanan'] = $this->M_Layanan->getLayanan();
        $this->load->view('Admin/layanan',$data);
    }
    public function hapusLayanan(){
        $id_layanan = $this->input->get('id_layanan', true);
        $this->M_Layanan->hapusLayanan($id_layanan);
        redirect('C_Layanan/ShowHalamanLayanan');
    }
public function ShowHalamanTambahLayanan()
    {
        $this->load->view('Admin/navAdmin');
        $this->load->view('Admin/tambahLayanan');
    }
    public function showSingleLayanan()
    {
        $this->load->view('template/nav');
        $data['artikel'] = $this->M_Artikel->getArtikelTerbaru();
        $data['berita'] = $this->M_Berita->getBeritaTerbaru();
        $id_layanan = $this->input->get('id_layanan', true);
        $data['layanan2'] = $this->M_Layanan->getSingleLayanan($id_layanan);
        $this->load->view('PageShowLayanan',$data);
        $this->load->view('template/footer');
    }

   

    public function showDetailLayanan()
    {
        $this->load->view('Admin/navAdmin');
        $id_layanan = $this->input->get('id_layanan', true);
        $data['layanan'] = $this->M_Layanan->getSingleLayanan($id_layanan);
        $this->load->view('Admin/detailLayanan',$data);
        
    }
}