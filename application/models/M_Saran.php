<?php
class M_Saran extends CI_Model {

    public function getSaran(){
        $this->db->select('*'); //memeilih semua field
        $this->db->from('saran');

        $query = $this->db->get();

        if ($query->num_rows() >0){ 
            foreach ($query->result() as $data) {
                $hasilSaran[] = $data;
            }
            return $hasilSaran;
        }
    }

    public function tambahSaran($email, $isi){
        $data = array(

            'email' => $email,
            'isi' => $isi,
        );
        $this->db->insert('saran',$data);
    }

}