<?php
class M_Galeri extends CI_Model {
 
public function getFoto(){
        $this->db->select('*'); //memeilih semua field
        $this->db->from('foto'); //memeilih tabel
        $query = $this->db->get();
        if ($query->num_rows() >0){ 
            foreach ($query->result() as $data) {
                $hasilTransaksi[] = $data;
            }
            return $hasilTransaksi;
        }
    }

    function jumlah_galeri(){
        return $this->db->get('foto')->num_rows();
    }


/*    public function countArtikel(){
    $this->db->select('*'); //memeilih semua field
        $this->db->from('artikel'); //memeilih tabel
        $query = $this->db->get();
        if ($query->num_rows() >0){ 
            foreach ($query->result() as $data) {
                $hasilTransaksi[] = $data;
            }
            return $query->num_rows();
        }
}*/

public function tambahGambar($judul_foto, $caption_foto, $foto_galeri){
        $data = array(
            
            'judul_foto' => $judul_foto,
            'caption_foto' => $caption_foto,
            
            'foto_galeri' => $foto_galeri
            );
        $this->db->insert('foto',$data);
    }

    function hapusFoto($id_foto){
        $where = array(
            'id_foto' => $id_foto,
        );
        $this->db->where($where);
        $this->db->delete('foto');
    }
}