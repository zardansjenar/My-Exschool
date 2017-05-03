<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pelatih extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('m_admin');
	}

	public function index()
	{
		$this->load->view('upload_form_khusus');
	}

	public function createInformasi()
	{
		$this->load->view('upload_form_khusus');
	}

	public function homePelatih()
	{
		$this->load->view('homeTeacher');
	}

	public function beritaKhusus()
	{
		$this->load->view('upload_form_khusus', array('error' => ' ' ));
	}

	public function uploadFile(){

            $config['upload_path']          = './assets/img/portfolio';
            $config['allowed_types']        = 'gif|jpg|png|mkv|rar|mkv';
            $config['max_size']	=0;
			           

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form_khusus', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('upload_success', $data);
                        $this->load->view('upload_form_khusus');
                }

	}

	public function createJadwal()
	{
		$this->load->view('createJadwal');
	}
	
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */