<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Berita extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_Berita');
        $this->load->model('M_Artikel');
        $this->load->model('M_Comment');
    }

    public function ShowBerita()
    {
        $this->load->view('template/nav');
        $jumlah_data = $this->M_Berita->jumlah_berita();
       //konfigurasi pagination
        $this->load->library('pagination');
        $config['base_url'] = base_url().'C_Berita/ShowBerita/';
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
        $data['berita'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['berita'] = $this->M_Berita->getBeritaPerPage($config["per_page"], $data['berita']); 
        $data['pagination'] = $this->pagination->create_links();

        
        $data['berita2'] = $this->M_Berita->getBeritaTerbaru();
        
        $data['artikel'] = $this->M_Artikel->getArtikelTerbaru();
        $this->load->view('PageBerita',$data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
      $judul_berita = $this->input->post('judul_berita', true);
      $isi = $this->input->post('isi_berita', true);
      $nama_penulis = $this->input->post('nama_penulis', true);
      $status = $this->input->post('status', true);
      $this->load->library('upload');
      $config['upload_path'] = './Assets/foto/'; 
      $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
      $config['max_size'] = '1024'; 
      $config['file_name'] = $judul_berita."_".time();
      $this->upload->initialize($config);
      if($_FILES['foto_berita']['name'])
      {
        if ($this->upload->do_upload('foto_berita'))
        {
            $foto = $this->upload->data();
            $this->M_Berita->tambahBerita($judul_berita, $isi, $foto['file_name'],$nama_penulis,$status);
            redirect('C_Admin/ShowHalamanBerita');

        }
    }
}

    public function userTambah()
    {
        $judul_berita = $this->input->post('judul_berita', true);
        $isi = $this->input->post('isi_berita', true);
        $nama_penulis = $this->input->post('nama_penulis', true);
        $status = $this->input->post('status', true);
        $this->load->library('upload');
        $config['upload_path'] = './Assets/foto/'; 
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
        $config['max_size'] = '1024'; 
        $config['file_name'] = $judul_berita."_".time();
        $this->upload->initialize($config);
        if($_FILES['foto_berita']['name'])
        {
            if ($this->upload->do_upload('foto_berita'))
            {
                $foto = $this->upload->data();
                $this->M_Berita->tambahBerita($judul_berita, $isi, $foto['file_name'],$nama_penulis,$status);
                redirect('C_Home');

            }
        }
    }

    public function hapusBerita(){
        $id_berita = $this->input->get('id_berita', true);
        $this->M_Berita->hapusBerita($id_berita);
        redirect('C_Admin/ShowHalamanBerita');
    }

    public function showSingleBerita()
    {
        $this->load->view('template/nav');
        $data['artikel'] = $this->M_Artikel->getArtikelTerbaru();
        $data['berita'] = $this->M_Berita->getBeritaTerbaru();
        $id_berita = $this->input->get('id_berita', true);
        $data['comment'] = $this->M_Comment->getComment();
        $data['jumlah_comment'] = $this->M_Comment->getjumlahComment($id_berita);
        $data['berita2'] = $this->M_Berita->getSingleBerita($id_berita);
        $this->load->view('PageShowBerita',$data);
        $this->load->view('template/footer');
    }

    public function edit(){
        $id_berita = $this->input->get('id_berita', true);
        $judul_berita = $this->input->post('judul_berita', true);
        $isi = $this->input->post('isi_berita', true);
        $status = $this->input->post('status', true);
        $this->load->library('upload');
        $config['upload_path'] = './Assets/foto/'; 
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
        $config['max_size'] = '1024'; 
        $config['file_name'] = $judul_berita."_".time();
        $this->upload->initialize($config);
        if($_FILES['foto_berita']['name'])
        {
            if ($this->upload->do_upload('foto_berita'))
            {
                $foto = $this->upload->data();
                $this->M_Berita->updateBerita($id_berita, $judul_berita, $isi, $foto['file_name'], $status);
                redirect('C_Admin/ShowHalamanBerita');
            }
        } else {
            $this->M_Berita->updateBeritaTanpaFoto($id_berita, $judul_berita, $isi, $status);
            redirect('C_Admin/ShowHalamanBerita');
        }
    }


    public function showDetailBerita()
    {
        $this->load->view('Admin/navAdmin');
        $id_berita = $this->input->get('id_berita', true);
        $data['berita'] = $this->M_Berita->getSingleBerita($id_berita);
        $this->load->view('Admin/detailBerita',$data);

    }

    public function showHalamanEditBerita(){
        $this->load->view('Admin/navAdmin');
        $id_berita = $this->input->get('id_berita', true);
        $data['berita'] = $this->M_Berita->getSingleBerita($id_berita);
        $this->load->view('Admin/editBerita',$data);
    }

    public function ShowUserTambahBerita()
    {
        $this->load->view('template/nav');
        $this->load->view('PageUserTambah');
    }

}