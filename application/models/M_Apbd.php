<?php
class M_Apbd extends CI_Model {
 
public function getApbd(){
        $this->db->select('*'); //memeilih semua field
        $this->db->from('apbd'); //memeilih tabel
        $query = $this->db->get();
        if ($query->num_rows() >0){ 
            foreach ($query->result() as $data) {
                $hasilTransaksi[] = $data;
            }
            return $hasilTransaksi;
        }
    }

    public function getApbdTerbaru(){
        $this->db->select('*'); //memeilih semua field
        $this->db->from('apbd'); 
        $this->db->order_by('Id_apbd', 'desc');
        $this->db->limit(1); 
        $query = $this->db->get();

        if ($query->num_rows() >0){ 
            foreach ($query->result() as $data) {
                $hasilTransaksi[] = $data;
            }
            return $hasilTransaksi;
        }
    }


public function tambahApbd($tahun_apbd, $foto_apbd){
        $data = array(
            'tahun_apbd' => $tahun_apbd,
            'foto_apbd' => $foto_apbd
            );
        $this->db->insert('apbd',$data);
    }

    function hapusApbd($id_apbd){
        $where = array(
            'id_apbd' => $id_apbd,
        );
        $this->db->where($where);
        $this->db->delete('apbd');
    }
}