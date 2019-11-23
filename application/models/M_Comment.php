<?php
class M_Comment extends CI_Model {


public function tambahComment($data){
       $data = array(
            'username' => $data['username'],
            'email' => $data['email'],
            'isi' => $data['isi'],
            'id_berita' => $data['id_berita']
            );
        $this->db->insert('comment',$data);
    }
public function getComment(){
      return $this->db->get('comment');
    }
public function getjumlahComment($id_berita){
    $this->db->from('comment');
    $this->db->where('id_berita',$id_berita);
      return $this->db->get()->num_rows();
    }

 function hapusComment($id){
        $where = array(
            'id' => $id,
        );
        $this->db->where($where);
        $this->db->delete('comment');
    }

public function getCommentt(){
    $this->db->select('*'); //memeilih semua field
        $this->db->from('comment');

        $query = $this->db->get();

        if ($query->num_rows() >0){ 
            foreach ($query->result() as $data) {
                $hasilTransaksi[] = $data;
            }
            return $hasilTransaksi;
        }
    }
public function getAllComment($id_artikel){
        $this->db->select('*'); //memeilih semua field
        $this->db->from('comment');//memeilih tabel
        $this->db->where('id_berita='.$id_berita);//memeilih tabel
        $query = $this->db->get();

        if ($query->num_rows() >0){ 
            foreach ($query->result() as $data) {
                $hasilTransaksi[] = $data;
            }
            return $hasilTransaksi;
        }
}
}