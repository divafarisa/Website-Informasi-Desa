<?php 

class M_admin extends CI_Model{
	function cek($table,$where){		
		return $this->db->get_where($table,$where);
	}	
	
	public function getIdByEmailAdmin($email){
	$this->db->select('id_admin');
	$this->db->from('admin');
	$this->db->where('email_admin',$email);
	return $this->db->get()->row()->id_admin;

	}

}