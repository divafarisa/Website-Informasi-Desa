<?php
class M_Etnis extends CI_Model {
 
public function getEtnis(){
        $this->db->select('*'); //memeilih semua field
        $this->db->from('etnis'); //memeilih tabel
        $query = $this->db->get();
        if ($query->num_rows() >0){ 
            foreach ($query->result() as $data) {
                $hasilTransaksi[] = $data;
            }
            return $hasilTransaksi;
        }
    }

public function getSingleEtnis($id_etnis){
        $this->db->select('*'); //memeilih semua field
        $this->db->from('etnis');//memeilih tabel
        $this->db->where('id_etnis='.$id_etnis);//memeilih tabel
        $query = $this->db->get();

        if ($query->num_rows() >0){ 
            foreach ($query->result() as $data) {
                $hasilTransaksi[] = $data;
            }
            return $hasilTransaksi;
        }
    }

    public function updateEtnis($id_etnis, $nama_demo, $jumlah_laki, $jumlah_pr){
    $data = array(
            'nama_etnis' => $nama_demo,
            'lk_etnis' => $jumlah_laki,
            'pr_etnis' => $jumlah_pr,
            );
    $where = array(
            'id_etnis' => $id_etnis,
        );
    $this->db->where($where);
    $this->db->update('etnis', $data);
}


public function tambahEtnis($nama_demo, $jumlah_laki, $jumlah_pr){
        $data = array(
            'nama_etnis' => $nama_demo,
            'lk_etnis' => $jumlah_laki,
            'pr_etnis' => $jumlah_pr,
            );
        $this->db->insert('etnis',$data);
    }

    function hapusEtnis($id_etnis){
        $where = array(
            'id_etnis' => $id_etnis,
        );
        $this->db->where($where);
        $this->db->delete('etnis');
    }
}