<?php
class M_Organisasi extends CI_Model {
 
public function getOrganisasi(){
        $this->db->select('*'); //memeilih semua field
        $this->db->from('organisasi'); //memeilih tabel
        $query = $this->db->get();
        if ($query->num_rows() >0){ 
            foreach ($query->result() as $data) {
                $hasilTransaksi[] = $data;
            }
            return $hasilTransaksi;
        }
    }

public function getSingleOrganisasi($id_org){
        $this->db->select('*'); //memeilih semua field
        $this->db->from('organisasi');//memeilih tabel
        $this->db->where('id_org='.$id_org);//memeilih tabel
        $query = $this->db->get();

        if ($query->num_rows() >0){ 
            foreach ($query->result() as $data) {
                $hasilTransaksi[] = $data;
            }
            return $hasilTransaksi;
        }
    }

    public function updateOrganisasi($id_org, $nama_org, $deskripsi_org, $foto_org){
        $data = array(
            
            'nama_org' => $nama_org,
            'deskripsi_org' => $deskripsi_org,
            'foto_org' => $foto_org
            );
         $where = array(
            'id_org' => $id_org,
        );
    $this->db->where($where);
    $this->db->update('organisasi', $data);
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


public function tambahOrganisasi($nama_org, $deskripsi_org, $foto_org){
        $data = array(
            'nama_org' => $nama_org,
            'deskripsi_org' => $deskripsi_org,
            'foto_org' => $foto_org
            );
        $this->db->insert('organisasi',$data);
    }

    function hapusOrganisasi($id_org){
        $where = array(
            'id_org' => $id_org,
        );
        $this->db->where($where);
        $this->db->delete('organisasi');
    }
}