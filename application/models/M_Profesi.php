<?php
class M_Profesi extends CI_Model {
 
public function getProfesi(){
        $this->db->select('*'); //memeilih semua field
        $this->db->from('profesi'); //memeilih tabel
        $query = $this->db->get();
        if ($query->num_rows() >0){ 
            foreach ($query->result() as $data) {
                $hasilTransaksi[] = $data;
            }
            return $hasilTransaksi;
        }
    }

 public function getSingleProfesi($id_profesi){
        $this->db->select('*'); //memeilih semua field
        $this->db->from('profesi');//memeilih tabel
        $this->db->where('id_profesi='.$id_profesi);//memeilih tabel
        $query = $this->db->get();

        if ($query->num_rows() >0){ 
            foreach ($query->result() as $data) {
                $hasilTransaksi[] = $data;
            }
            return $hasilTransaksi;
        }
    }

    public function updateProfesi($id_profesi, $nama_demo, $jumlah_laki, $jumlah_pr){
    $data = array(
            'nama_profesi' => $nama_demo,
            'lk_profesi' => $jumlah_laki,
            'pr_profesi' => $jumlah_pr,
            );
    $where = array(
            'id_profesi' => $id_profesi,
        );
    $this->db->where($where);
    $this->db->update('profesi', $data);
}

public function tambahProfesi($nama_demo, $jumlah_laki, $jumlah_pr){
        $data = array(
            'nama_profesi' => $nama_demo,
            'lk_profesi' => $jumlah_laki,
            'pr_profesi' => $jumlah_pr,
            );
        $this->db->insert('profesi',$data);
    }

    function hapusProfesi($id_profesi){
        $where = array(
            'id_profesi' => $id_profesi,
        );
        $this->db->where($where);
        $this->db->delete('profesi');
    }
}