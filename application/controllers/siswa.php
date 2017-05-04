<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class siswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('m_admin');
	}

	public function index()
	{
		$this->load->view('registrasiExtra');
	}

	public function registrasiExtra()
	{
		$this->load->view('registrasiExtra');
	}

	public function InputRegistrasiExtra()
	{
		
	}


	public function homeSiswa()
	{
		$this->load->view('homeSiswa');
	}
	 
	
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */