<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('m_admin');
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function loginSiswa()
	{
		$nisn = $this->input->post('nisn');
		$password = $this->input->post('password');

		$where = array(
			'nisn' => $nisn,
			'password' => ($password)
			);
		$cek = $this->m_admin->getLogin("siswa",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nisn' => $nisn,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			$this->load->view('homeSiswa');
 
		}else{
			$this->load->view('home');
		}
	}
	public function loginAdmin()
	{
		$id = $this->input->post('id');
		$password = $this->input->post('password');

		$where = array(
			'id' => $id,
			'password' => ($password)
			);
		$cek = $this->m_admin->getLogin("admin",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'id' => $id,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			$this->load->view('homeAdmin');
 
		}else{
			$this->load->view('loginAdmin');
		}
	}

	function logoutAdmin(){
		$this->session->sess_destroy();
		$this->load->view('loginAdmin');
	}

	public function loginPelatih()
	{
		$nip = $this->input->post('nip');
		$password = $this->input->post('password');

		$where = array(
			'nip' => $nip,
			'password' => ($password)
			);
		$cek = $this->m_admin->getLogin("pelatih",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nip' => $nip,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			$this->load->view('homeTeacher');
 
		}else{
			$this->load->view('loginPelatih');
		}
	}

	function logoutPelatih(){
		$this->session->sess_destroy();
		$this->load->view('loginPelatih');
	}


}

/* End of file login.php */
/* Location: ./application/controllers/login.php */