<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_PerangkatDesa extends CI_Controller {
    
    function __construct(){
        parent::__construct();      
        $this->load->model('M_Artikel');
        $this->load->model('M_Berita');
        $this->load->model('M_Perdes'); 
        
    }
    
    public function ShowHalamanTambahPerdes()
    {
        $this->load->view('Admin/navAdmin');
        $this->load->view('Admin/tambahPerdes');
    }


    public function showDetailPerdes()
    { $this->load->view('template/nav');
        $data['berita'] = $this->M_Berita->getBeritaTerbaru();
        $data['artikel'] = $this->M_Artikel->getArtikelTerbaru();
       
        $data['perdes'] = $this->M_Perdes->getPerdes();
        $this->load->view('PagePerdes',$data);
         $this->load->view('template/footer');
    }

    public function edit(){
        $id_perangkat = $this->input->get('id_perangkat', true);
        $nama_perdes = $this->input->post('nama_perdes', true);
        $jabatan_perdes = $this->input->post('jabatan_perdes', true);
        $tahun_perdes = $this->input->post('tahun_perdes', true);
        $this->M_Perdes->updatePerdes($id_perangkat,$nama_perdes, $jabatan_perdes, $tahun_perdes);
        redirect('C_PerangkatDesa/ShowHalamanPerangkatDesa');
    }

    public function tambah()
    {
        $nama_perdes = $this->input->post('nama_perdes', true);
        $jabatan_perdes = $this->input->post('jabatan_perdes', true);
        $tahun_perdes = $this->input->post('tahun_perdes', true);
        $this->M_Perdes->tambahPerdes($nama_perdes, $jabatan_perdes, $tahun_perdes);
        redirect('C_PerangkatDesa/ShowHalamanPerangkatDesa');
           
        
    }
    
    public function showHalamanEditPerdes(){
        $this->load->view('Admin/navAdmin');
        $id_perangkat = $this->input->get('id_perangkat', true);
        $data['perdes'] = $this->M_Perdes->getSinglePerdes($id_perangkat);
        $this->load->view('Admin/editPerdes',$data);
    }

    public function ShowHalamanPerangkatDesa()
    {
        $this->load->view('Admin/navAdmin');
        $data['perdes'] = $this->M_Perdes->getPerdes();
        $this->load->view('Admin/perdes',$data);
    }

    public function hapusPerdes(){
        $id_perangkat = $this->input->get('id_perangkat', true);
        $this->M_Perdes->hapusPerdes($id_perangkat);
        redirect('C_PerangkatDesa/ShowHalamanPerangkatDesa');
    }

    

}
