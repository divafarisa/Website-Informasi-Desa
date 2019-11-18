<?php
class M_Kontak extends CI_Model {
 
public function getKontak(){
        $this->db->select('*'); //memeilih semua field
        $this->db->from('kontak'); //memeilih tabel
        $query = $this->db->get();
        if ($query->num_rows() >0){ 
            foreach ($query->result() as $data) {
                $hasilTransaksi[] = $data;
            }
            return $hasilTransaksi;
        }
    }

public function updateKontak($email_kontak, $nohp_kontak, $nowa_kontak, $ig_kontak, $fb_kontak, $tw_kontak){

    $data = array(
            
            'email_kontak' => $email_kontak,
            'nohp_kontak' => $nohp_kontak,
            'nowa_kontak' => $nowa_kontak,
            'ig_kontak' => $ig_kontak,
            'fb_kontak' => $fb_kontak,
            'tw_kontak' => $tw_kontak
            );
    
    $this->db->update('kontak', $data);

}

}