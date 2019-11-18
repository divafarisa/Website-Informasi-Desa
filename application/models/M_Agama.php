<?php
class M_Agama extends CI_Model {
 
public function getAgama(){
        $this->db->select('*'); //memeilih semua field
        $this->db->from('agama'); //memeilih tabel
        $query = $this->db->get();
        if ($query->num_rows() >0){ 
            foreach ($query->result() as $data) {
                $hasilTransaksi[] = $data;
            }
            return $hasilTransaksi;
        }
    }

    public function getSingleAgama($id_agama){
        $this->db->select('*'); //memeilih semua field
        $this->db->from('agama');//memeilih tabel
        $this->db->where('id_agama='.$id_agama);//memeilih tabel
        $query = $this->db->get();

        if ($query->num_rows() >0){ 
            foreach ($query->result() as $data) {
                $hasilTransaksi[] = $data;
            }
            return $hasilTransaksi;
        }
    }

public function updateAgama($id_agama, $nama_demo, $jumlah_laki, $jumlah_pr){
    $data = array(
            'nama_agama' => $nama_demo,
            'lk_agama' => $jumlah_laki,
            'pr_agama' => $jumlah_pr,
            );
    $where = array(
            'id_agama' => $id_agama,
        );
    $this->db->where($where);
    $this->db->update('agama', $data);
}
public function tambahAgama($nama_demo, $jumlah_laki, $jumlah_pr){
        $data = array(
            'nama_agama' => $nama_demo,
            'lk_agama' => $jumlah_laki,
            'pr_agama' => $jumlah_pr,
            );
        $this->db->insert('agama',$data);
    }

    function hapusAgama($id_agama){
        $where = array(
            'id_agama' => $id_agama,
        );
        $this->db->where($where);
        $this->db->delete('agama');
    }
}