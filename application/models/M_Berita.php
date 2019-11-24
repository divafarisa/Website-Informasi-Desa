<?php
class M_Berita extends CI_Model {

    public function getBerita(){
        $this->db->select('*'); //memeilih semua field
        $this->db->from('berita');

        $query = $this->db->get();

        if ($query->num_rows() >0){ 
            foreach ($query->result() as $data) {
                $hasilTransaksi[] = $data;
            }
            return $hasilTransaksi;
        }
    }

    function getBeritaPerPage($number,$offset){

      $status = "terbit";
        // $this->db->select('*'); //memeilih semua field
        // $this->db->from('berita'); 
        // $this->db->where('status', $status); 
      $this->db->order_by('tanggal_berita', 'desc');
      $query = $this->db->get_where('berita', array('status' => $status), $number, $offset);
        // $query = $this->db->get('berita',$number,$offset);

      if ($query->num_rows() >0){ 
        foreach ($query->result() as $data) {
            $hasilTransaksi[] = $data;
        }
        return $hasilTransaksi;
    }
}

function jumlah_berita(){
    return $this->db->get('berita')->num_rows();
}

    public function getBeritaTerbaru(){
        $status = "terbit";
        $this->db->select('*'); //memeilih semua field
        $this->db->from('berita'); 
        $this->db->where('status', $status); 
        $this->db->order_by('tanggal_berita', 'desc');
        $this->db->limit(3); 
        $query = $this->db->get();

        if ($query->num_rows() >0){ 
            foreach ($query->result() as $data) {
                $hasilTransaksi[] = $data;
            }
            return $hasilTransaksi;
        }
    }

    public function updateBeritaTanpaFoto($id_berita, $judul_berita, $isi_berita, $status){
        $data = array(
            'judul_berita' => $judul_berita,
            'isi_berita' => $isi_berita,
            'status' => $status
        );
        $where = array(
            'id_berita' => $id_berita,
        );
        $this->db->where($where);
        $this->db->update('berita', $data);
    }

    public function updateBerita($id_berita, $judul_berita, $isi_berita, $foto_berita, $status){
        $data = array(
            'judul_berita' => $judul_berita,
            'isi_berita' => $isi_berita,
            'foto_berita' => $foto_berita,
            'status' => $status
        );
        $where = array(
            'id_berita' => $id_berita,
        );
        $this->db->where($where);
        $this->db->update('berita', $data);
    }

    public function getSingleBerita($id_berita){
        $this->db->select('*'); //memeilih semua field
        $this->db->from('berita');//memeilih tabel
        $this->db->where('id_berita='.$id_berita);//memeilih tabel
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


    public function tambahBerita($judul_berita, $isi_berita, $foto_berita, $nama_penulis, $status){
        $data = array(

            'judul_berita' => $judul_berita,
            'isi_berita' => $isi_berita,
            'foto_berita' => $foto_berita,
            'nama_penulis' => $nama_penulis,
            'status' => $status
        );
        $this->db->insert('berita',$data);
    }


    function hapusBerita($id_berita){
        $where = array(
            'id_berita' => $id_berita,
        );
        $this->db->where($where);
        $this->db->delete('berita');
    }

}