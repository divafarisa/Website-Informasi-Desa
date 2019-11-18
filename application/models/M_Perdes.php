<?php
class M_Perdes extends CI_Model {
 
public function getPerdes(){
        $this->db->select('*'); //memeilih semua field
        $this->db->from('perangkat'); //memeilih tabel
        $query = $this->db->get();
        if ($query->num_rows() >0){ 
            foreach ($query->result() as $data) {
                $hasilTransaksi[] = $data;
            }
            return $hasilTransaksi;
        }
    }

public function getSinglePerdes($id_perangkat){
        $this->db->select('*'); //memeilih semua field
        $this->db->from('perangkat');//memeilih tabel
        $this->db->where('id_perangkat='.$id_perangkat);//memeilih tabel
        $query = $this->db->get();

        if ($query->num_rows() >0){ 
            foreach ($query->result() as $data) {
                $hasilTransaksi[] = $data;
            }
            return $hasilTransaksi;
        }
    }

    public function updatePerdes($id_perangkat,$nama_perdes, $jabatan_perdes, $tahun_perdes){
        $data = array(
            'nama_perangkat' => $nama_perdes,
            'jabatan_perangkat' => $jabatan_perdes,
            'tahun_perangkat' => $tahun_perdes
            );
         $where = array(
            'id_perangkat' => $id_perangkat,
        );
    $this->db->where($where);
    $this->db->update('perangkat', $data);
}


    public function getUmkmTerbaru(){
        $this->db->select('*'); //memeilih semua field
        $this->db->from('umkm'); 
        $this->db->order_by('Id_umkm', 'desc');
        $this->db->limit(1); 
        $query = $this->db->get();

        if ($query->num_rows() >0){ 
            foreach ($query->result() as $data) {
                $hasilTransaksi[] = $data;
            }
            return $hasilTransaksi;
        }
    }


public function tambahPerdes($nama_perdes, $jabatan_perdes, $tahun_perdes){
        $data = array(
            'nama_perangkat' => $nama_perdes,
            'jabatan_perangkat' => $jabatan_perdes,
            'tahun_perangkat' => $tahun_perdes
            );
        $this->db->insert('perangkat',$data);
    }

    function hapusPerdes($id_perangkat){
        $where = array(
            'id_perangkat' => $id_perangkat,
        );
        $this->db->where($where);
        $this->db->delete('perangkat');
    }
}