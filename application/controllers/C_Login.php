<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('M_Admin');
		
	}

	public function ShowFormLogin()
	{
		$this->load->view('template/nav');
		$this->load->view('FormLogin');
	}

	public function login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email_admin' => $email,
			'password_admin' => $password
			);
		$cek = $this->M_Admin->cek("admin",$where)->num_rows();
		if($cek > 0){
			//$query = $this->db->query('SELECT id_admin FROM admin WHERE ');
			$query = $this->M_Admin->getIdByEmailAdmin($email);
			$session_data = array(
				'email_admin' => $email,
				'password_admin' => $password,
				'id_admin' => $query
			);
			$this->session->set_userdata($session_data);

 			redirect('C_Admin/ShowDashboardAdmin');
		}
			else{
				redirect('C_login/ShowFormLogin');
			}
			
	}
}

