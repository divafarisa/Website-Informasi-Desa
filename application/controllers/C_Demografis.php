<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Demografis extends CI_Controller {
    
    function __construct(){
        parent::__construct();      
        $this->load->model('M_Etnis');
        $this->load->model('M_Profesi');
        $this->load->model('M_Agama'); 
        
    }
    
    public function ShowHalamanTambahDemografis()
    {
        $this->load->view('Admin/navAdmin');
        $this->load->view('Admin/tambahDemografis');
    }


    public function editAgama(){
        $id_agama = $this->input->get('id_agama', true);
        $nama_demo = $this->input->post('nama_demo', true);
        $jumlah_laki = $this->input->post('lk_agama', true);
        $jumlah_pr = $this->input->post('pr_agama', true);
        $this->M_Agama->updateAgama($id_agama, $nama_demo, $jumlah_laki, $jumlah_pr);
        redirect('C_Demografis/ShowHalamanDemografis');
    }

    public function editProfesi(){
        $id_profesi = $this->input->get('id_profesi', true);
        $nama_demo = $this->input->post('nama_demo', true);
        $jumlah_laki = $this->input->post('lk_profesi', true);
        $jumlah_pr = $this->input->post('pr_profesi', true);
        $this->M_Profesi->updateProfesi($id_profesi, $nama_demo, $jumlah_laki, $jumlah_pr);
        redirect('C_Demografis/ShowHalamanDemografis');
    }

    public function editEtnis(){
        $id_etnis = $this->input->get('id_etnis', true);
        $nama_demo = $this->input->post('nama_demo', true);
        $jumlah_laki = $this->input->post('lk_etnis', true);
        $jumlah_pr = $this->input->post('pr_etnis', true);
        $this->M_Etnis->updateEtnis($id_etnis, $nama_demo, $jumlah_laki, $jumlah_pr);
        redirect('C_Demografis/ShowHalamanDemografis');
    }

    public function tambah()
    {
        $nama_demo = $this->input->post('nama_demo', true);
        $jumlah_laki = $this->input->post('lk_demo', true);
        $jumlah_pr = $this->input->post('pr_demo', true);
        $jenis_demo = $this->input->post('demo', true);
        if ($jenis_demo=="agama") {
            $this->M_Agama->tambahAgama($nama_demo, $jumlah_laki, $jumlah_pr);
        } elseif ($jenis_demo=="profesi") {
            $this->M_Profesi->tambahProfesi($nama_demo, $jumlah_laki, $jumlah_pr);
        } else {
            $this->M_Etnis->tambahEtnis($nama_demo, $jumlah_laki, $jumlah_pr);
        }
        
        redirect('C_Demografis/ShowHalamanDemografis');
           
        
    }
    
    public function showHalamanEditAgama(){
        $this->load->view('Admin/navAdmin');
        $id_agama = $this->input->get('id_agama', true);
        $data['agama'] = $this->M_Agama->getSingleAgama($id_agama);
        $this->load->view('Admin/EditAgama',$data);
    }

    public function showHalamanEditEtnis(){
        $this->load->view('Admin/navAdmin');
        $id_etnis = $this->input->get('id_etnis', true);
        $data['etnis'] = $this->M_Etnis->getSingleEtnis($id_etnis);
        $this->load->view('Admin/EditEtnis',$data);
    }

    

    public function showHalamanEditProfesi(){
        $this->load->view('Admin/navAdmin');
        $id_profesi = $this->input->get('id_profesi', true);
        $data['profesi'] = $this->M_Profesi->getSingleProfesi($id_profesi);
        $this->load->view('Admin/EditProfesi',$data);
    }

    public function ShowHalamanDemografis()
    {
        $this->load->view('Admin/navAdmin');
        $data['agama'] = $this->M_Agama->getAgama();
        $data['etnis'] = $this->M_Etnis->getEtnis();
        $data['profesi'] = $this->M_Profesi->getProfesi();
        $this->load->view('Admin/demo',$data);
    }

    public function hapusAgama(){
        $id_agama = $this->input->get('id_agama', true);
        $this->M_Agama->hapusAgama($id_agama);
        redirect('C_Demografis/ShowHalamanDemografis');
    }

    public function hapusEtnis(){
        $id_etnis = $this->input->get('id_etnis', true);
        $this->M_Etnis->hapusEtnis($id_etnis);
        redirect('C_Demografis/ShowHalamanDemografis');
    }

    public function hapusProfesi(){
        $id_profesi = $this->input->get('id_profesi', true);
        $this->M_Profesi->hapusProfesi($id_profesi);
        redirect('C_Demografis/ShowHalamanDemografis');
    }

    

}
