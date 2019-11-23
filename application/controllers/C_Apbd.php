<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Apbd extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('M_Artikel');
        $this->load->model('M_Berita');
        $this->load->model('M_Apbd'); 
        
    }
    public function ShowHalamanTambahApbd()
    {
        $this->load->view('Admin/navAdmin');
        $this->load->view('Admin/tambahApbd');
    }

    
    public function ShowApbd()
    {
        $this->load->view('template/nav');
        $data['berita'] = $this->M_Berita->getBeritaTerbaru();
        $data['artikel'] = $this->M_Artikel->getArtikelTerbaru();
        $data['apbd'] = $this->M_Apbd->getApbdTerbaru();
        $this->load->view('PageAPBD',$data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $tahun_apbd = $this->input->post('tahun_apbd', true);
        $this->load->library('upload');
        $config['upload_path'] = './Assets/foto/'; 
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
        $config['max_size'] = '1024'; 
        $config['file_name'] = $tahun_apbd."_".time();
        $this->upload->initialize($config);
        if($_FILES['foto_apbd']['name'])
        {
            if ($this->upload->do_upload('foto_apbd'))
            {
                $foto = $this->upload->data();
                $this->M_Apbd->tambahApbd($tahun_apbd, $foto['file_name']);
                redirect('C_Apbd/ShowHalamanApbd');

            }
        }
    }


    public function ShowHalamanApbd()
    {
      $this->load->view('Admin/navAdmin');
      $data['apbd'] = $this->M_Apbd->getApbd();
      $this->load->view('Admin/apbd',$data);
  }

  public function hapusApbd(){
    $id_apbd = $this->input->get('id_apbd', true);
    $this->M_Apbd->hapusApbd($id_apbd);
    redirect('C_Apbd/ShowHalamanApbd');
}



}
