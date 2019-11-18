<?php
class M_Umkm extends CI_Model {
 
public function getUmkm(){
        $this->db->select('*'); //memeilih semua field
        $this->db->from('umkm'); //memeilih tabel
        $query = $this->db->get();
        if ($query->num_rows() >0){ 
            foreach ($query->result() as $data) {
                $hasilTransaksi[] = $data;
            }
            return $hasilTransaksi;
        }
    }

public function getSingleUmkm($id_umkm){
        $this->db->select('*'); //memeilih semua field
        $this->db->from('umkm');//memeilih tabel
        $this->db->where('id_umkm='.$id_umkm);//memeilih tabel
        $query = $this->db->get();

        if ($query->num_rows() >0){ 
            foreach ($query->result() as $data) {
                $hasilTransaksi[] = $data;
            }
            return $hasilTransaksi;
        }
    }

    public function updateUmkm($id_umkm, $nama_umkm, $deskripsi_umkm, $foto_umkm){
        $data = array(
            
            'nama_umkm' => $nama_umkm,
            'deskripsi_umkm' => $deskripsi_umkm,
            'foto_umkm' => $foto_umkm
            );
         $where = array(
            'id_umkm' => $id_umkm,
        );
    $this->db->where($where);
    $this->db->update('umkm', $data);
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


public function tambahUmkm($nama_umkm, $deskripsi_umkm, $foto_umkm){
        $data = array(
            'nama_umkm' => $nama_umkm,
            'deskripsi_umkm' => $deskripsi_umkm,
            'foto_umkm' => $foto_umkm
            );
        $this->db->insert('umkm',$data);
    }

    function hapusUmkm($id_umkm){
        $where = array(
            'id_umkm' => $id_umkm,
        );
        $this->db->where($where);
        $this->db->delete('umkm');
    }
}