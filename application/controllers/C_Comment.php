<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Comment extends CI_Controller {
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

        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $isi = $this->input->post('isi');
        $id_berita = $this->input->post('id_berita');
 
        $data = array(
            'username' => $username,
            'email' => $email,
            'isi' => $isi,
            'id_berita' => $id_berita
            );
        // var_dump($data);
        $this->M_Comment->tambahComment($data);
        
        redirect('C_Berita/showSingleBerita?id_berita='.$id_berita );
    
    }
    public function showComment()
    {
        $this->load->view('Admin/navAdmin');
        $data['comment'] = $this->M_Comment->getCommentt();
        $this->load->view('Admin/comment',$data);
    }
     public function hapusComment(){
        $id = $this->input->get('id', true);
        $this->M_Comment->hapusComment($id);
        redirect('C_Comment/ShowComment');
    }
     public function showSingleBerita()
    {
        $this->load->view('template/nav');
        $data['berita'] = $this->M_Berita->getBeritaTerbaru();
        $id_berita = $this->input->get('id_berita', true);
        $data['berita2'] = $this->M_Berita->getSingleBerita($id_berita);
        $data['berita3'] = $this->M_Comment->getAllComment($id_berita);
        $this->load->view('PageShowBerita',$data);
        $this->load->view('template/footer');
    }
    function jumlah_comment(){
        return $this->db->get('comment')->num_rows();
    }

    
}