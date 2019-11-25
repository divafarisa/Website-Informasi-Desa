<?php
class M_Layanan extends CI_Model {
 
public function getLayanan(){
        $this->db->select('*'); //memeilih semua field
        $this->db->from('layanan');

        $query = $this->db->get();

        if ($query->num_rows() >0){ 
            foreach ($query->result() as $data) {
                $hasilTransaksi[] = $data;
            }
            return $hasilTransaksi;
        }
    }

    function getLayananPerPage($number,$offset){
         
        $this->db->order_by('id_layanan', 'desc');
        $query = $this->db->get('layanan',$number,$offset);

        if ($query->num_rows() >0){ 
            foreach ($query->result() as $data) {
                $hasilTransaksi[] = $data;
            }
            return $hasilTransaksi;
        }
               
    }

    function jumlah_layanan(){
        return $this->db->get('layanan')->num_rows();
    }

public function getLayananTerbaru(){
        $this->db->select('*'); //memeilih semua field
        $this->db->from('layanan'); 
        $this->db->order_by('id_layanan', 'desc');
        $this->db->limit(3); 
        $query = $this->db->get();

        if ($query->num_rows() >0){ 
            foreach ($query->result() as $data) {
                $hasilTransaksi[] = $data;
            }
            return $hasilTransaksi;
        }
    }

public function updateLayanan($id_layanan, $judul_layanan, $isi_layanan, $foto_layanan){
    $data = array(
            
            'judul_layanan' => $judul_layanan,
            'isi_layanan' => $isi_layanan,
            'foto_layanan' => $foto_layanan
            );
    $where = array(
            'id_layanan' => $id_layanan,
        );
    $this->db->where($where);
    $this->db->update('layanan', $data);
}

public function getSinglelayanan($id_layanan){
        $this->db->select('*'); //memeilih semua field
        $this->db->from('layanan');//memeilih tabel
        $this->db->where('id_layanan='.$id_layanan);//memeilih tabel
        $query = $this->db->get();

        if ($query->num_rows() >0){ 
            foreach ($query->result() as $data) {
                $hasilTransaksi[] = $data;
            }
            return $hasilTransaksi;
        }
    }

/*public function countBerita(){
    $this->db->select('*'); //memeilih semua field
        $this->db->from('berita'); //memeilih tabel
        $query = $this->db->get();
      
        if ($query->num_rows() >0){ 
            
            return $query->num_rows();
        }
    }
    */


public function tambahLayanan($judul_layanan, $isi_layanan, $foto_layanan){
        $data = array(
            
            'judul_layanan' => $judul_layanan,
            'isi_layanan' => $isi_layanan,
            'foto_layanan' => $foto_layanan
            );
        $this->db->insert('layanan',$data);
    }


function hapusLayanan($id_layanan){
        $where = array(
            'id_layanan' => $id_layanan,
        );
        $this->db->where($where);
        $this->db->delete('layanan');
    }

}