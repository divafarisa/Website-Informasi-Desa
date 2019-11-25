<?php
class M_Artikel extends CI_Model {
 
public function getArtikel(){
        $this->db->select('*'); //memeilih semua field
        $this->db->from('artikel'); //memeilih tabel
        $query = $this->db->get();
        if ($query->num_rows() >0){ 
            foreach ($query->result() as $data) {
                $hasilTransaksi[] = $data;
            }
            return $hasilTransaksi;
        }
    }
function jumlah_artikel(){
        return $this->db->get('artikel')->num_rows();
    }

function getArtikelPerPage($number,$offset){
         
        $this->db->order_by('id_artikel', 'desc');
        $query = $this->db->get('artikel',$number,$offset);

        if ($query->num_rows() >0){ 
            foreach ($query->result() as $data) {
                $hasilTransaksi[] = $data;
            }
            return $hasilTransaksi;
        }
               
    }

public function getArtikelTerbaru(){
        $this->db->select('*'); //memeilih semua field
        $this->db->from('artikel'); 
        $this->db->order_by('id_artikel', 'desc');
        $this->db->limit(3); 
        $query = $this->db->get();

        if ($query->num_rows() >0){ 
            foreach ($query->result() as $data) {
                $hasilTransaksi[] = $data;
            }
            return $hasilTransaksi;
        }
    }



   

    public function getSingleArtikel($id_artikel){
        $this->db->select('*'); //memeilih semua field
        $this->db->from('artikel');//memeilih tabel
        $this->db->where('id_artikel='.$id_artikel);//memeilih tabel
        $query = $this->db->get();

        if ($query->num_rows() >0){ 
            foreach ($query->result() as $data) {
                $hasilTransaksi[] = $data;
            }
            return $hasilTransaksi;
        }
    }

    




public function tambahArtikel($judul_artikel, $isi_artikel, $foto_artikel){
        $data = array(
            
            'judul_artikel' => $judul_artikel,
            'isi_artikel' => $isi_artikel,
            'foto_artikel' => $foto_artikel
            );
        $this->db->insert('artikel',$data);
    }

    function hapusArtikel($id_artikel){
        $where = array(
            'id_artikel' => $id_artikel,
        );
        $this->db->where($where);
        $this->db->delete('artikel');
    }
}