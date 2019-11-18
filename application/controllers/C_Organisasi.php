<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Organisasi extends CI_Controller {
    
    function __construct(){
        parent::__construct();      
        $this->load->model('M_Artikel');
        $this->load->model('M_Berita');
        $this->load->model('M_Organisasi'); 
        
    }
    
    public function ShowHalamanTambahOrganisasi()
    {
        $this->load->view('Admin/navAdmin');
        $this->load->view('Admin/tambahOrganisasi');
    }

    public function showSingleOrganisasi()
    {
        $this->load->view('template/nav');
        $data['berita'] = $this->M_Berita->getBeritaTerbaru();
        $data['artikel'] = $this->M_Artikel->getArtikelTerbaru();
        $id_org = $this->input->get('id_org', true);
        $data['org'] = $this->M_Organisasi->getSingleOrganisasi($id_org);
        $this->load->view('PageShowOrganisasi',$data);
        $this->load->view('template/footer');
    }

    public function showDetailOrganisasi()
    {
        $this->load->view('Admin/navAdmin');
        $id_org = $this->input->get('id_org', true);
        $data['org'] = $this->M_Organisasi->getSingleOrganisasi($id_org);
        $this->load->view('Admin/detailOrganisasi',$data);
        
    }

    public function edit(){
        $id_org = $this->input->get('id_org', true);
        $nama_org = $this->input->post('nama_org', true);
        $deskripsi_org = $this->input->post('deskripsi_org', true);
        $this->load->library('upload');
        $config['upload_path'] = './Assets/foto/'; 
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
        $config['max_size'] = '1024'; 
        $config['file_name'] = $nama_org."_".time();
        $this->upload->initialize($config);
        if($_FILES['foto_org']['name'])
        {
            if ($this->upload->do_upload('foto_org'))
            {
                $foto = $this->upload->data();
                $this->M_Organisasi->updateOrganisasi($id_org, $nama_org, $deskripsi_org, $foto['file_name']);
                redirect('C_Organisasi/ShowHalamanOrganisasi');

            }
        } else {
            echo "<script>alert('Data Error');history.go(-1);</script>";
            echo "haha";
            
        }
    }

    public function tambah()
    {
        $nama_org = $this->input->post('nama_org', true);
        $deskripsi_org = $this->input->post('deskripsi_org', true);
        $this->load->library('upload');
        $config['upload_path'] = './Assets/foto/'; 
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
        $config['max_size'] = '1024'; 
        $config['file_name'] = $nama_org."_".time();
        $this->upload->initialize($config);
        if($_FILES['foto_org']['name'])
        {
            if ($this->upload->do_upload('foto_org'))
            {
                $foto = $this->upload->data();
                $this->M_Organisasi->tambahOrganisasi($nama_org, $deskripsi_org, $foto['file_name']);
                redirect('C_Organisasi/ShowHalamanOrganisasi');

            }
        }
    }
    
    public function showHalamanEditOrganisasi(){
        $this->load->view('Admin/navAdmin');
        $id_org = $this->input->get('id_org', true);
        $data['org'] = $this->M_Organisasi->getSingleOrganisasi($id_org);
        $this->load->view('Admin/editOrganisasi',$data);
    }

    public function ShowHalamanOrganisasi()
    {
        $this->load->view('Admin/navAdmin');
        $data['org'] = $this->M_Organisasi->getOrganisasi();
        $this->load->view('Admin/organisasi',$data);
    }

    public function hapusOrganisasi(){
        $id_org = $this->input->get('id_org', true);
        $this->M_Organisasi->hapusOrganisasi($id_org);
        redirect('C_Organisasi/ShowHalamanOrganisasi');
    }

    

}
