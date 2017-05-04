<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('m_admin');
	}

	public function index()
	{
		$this->load->view('dataSekolah');
	}

	public function dataSekolah()
	{
		$this->load->view('dataSekolah');
	}

	public function inputDataSekolah()
	{
		$npsn = $this->input->post('npsn');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$jenis = $this->input->post('jenis');
		$email = $this->input->post('email');
		$no_telp = $this->input->post('no_telp');

		$dataSekolah = array('npsn' => $npsn,'nama' => $nama,'alamat' => $alamat,'jenis' => $jenis,'email' => $email,'no_telp' => $no_telp);
	
		$input = $this ->m_admin->insertData('sekolah',$dataSekolah);
		if($input){
			$this->load->view('dataSekolah');
		}else{
			echo "gagal input";
		}	
	}

	public function createPelatih()
	{
		$this->load->view('createPelatih');
	}

	public function inputDataPelatih()
	{
		$nip = $this->input->post('nip');
		$pelatih = $this->input->post('pelatih');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$tl = $this->input->post('tl');
		$no_telp = $this->input->post('no_telp');
		$email = $this->input->post('email');
		$jk = $this->input->post('jk');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$dataPelatih = array('nip' => $nip,'pelatih' => $pelatih,'nama' => $nama,'alamat' => $alamat,'tl' => $tl,'no_telp' => $no_telp,'email' => $email,'jk' => $jk,'username' => $username,'password' => $password);
	
		$input = $this ->m_admin->insertData('pelatih',$dataPelatih);
		if($input){
			$this->load->view('createPelatih');
		}else{
			echo "gagal input";
		}
	}

	public function createSiswa()	
	{
		$this->load->view('createSiswa');	
	}

	public function inputDataSiswa()
	{
		$nisn = $this->input->post('nisn');
		$kelas = $this->input->post('kelas');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$tl = $this->input->post('tl');
		$noTelp = $this->input->post('noTelp');
		$email = $this->input->post('email');
		$jk = $this->input->post('jk');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$dataSiswa = array('nisn' => $nisn,'kelas' => $kelas,'nama' => $nama,'alamat' => $alamat,'tl' => $tl,'no_telp'=> $noTelp,'email'=>$email,'jk'=>$jk,'username'=>$username,'password'=>$password);

		$input = $this->m_admin->insertData('siswa',$dataSiswa);
		if($input){
			$this->load->view('createSiswa'); 
		}else{
			echo "gagal input";	
		}
	}

	public function createExtrakulikuler()
	{
		$this->load->view('createExtra');
	}

	public function inputDataExtra()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$npsn = $this->input->post('npsn');
		$hari = $this->input->post('hari');
		$waktu = $this->input->post('waktu');
		$lokasi = $this->input->post('lokasi');
		$keterangan = $this->input->post('keterangan');
		$nip = $this->input->post('nip');


		$dataExtra = array('id' => $id,'nama' => $nama,'npsn' => $npsn,'hari' => $hari,'waktu' => $waktu,'keterangan' => $keterangan, 'nip' => $nip);
	
		$input = $this ->m_admin->insertData('extrakulikuler',$dataExtra);
		if($input){
			$this->load->view('createExtra');
		}else{
			echo "gagal input";
		}		
	}

	public function beritaUmum()
	{
		$this->load->view('upload_form', array('error' => ' ' ));
	}

	public function uploadFile(){

            $config['upload_path']          = './assets/img/portfolio';
            $config['allowed_types']        = 'gif|jpg|png|mkv|rar|mkv';
            $config['max_size']	=0;
			           

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
      					$img = $this->upload->data();
      					$gambar = $img['file_name'];
						$keterangan = $this->input->post('keterangan');

						$dataUmum = array('id_umum' => " ", 'gambar' => $gambar, 'keterangan' => $keterangan);

						$this ->m_admin->insertData('informasi_umum',$dataUmum);

                        $this->load->view('upload_form');
                }

	}

	public function homeAdmin()
	{
		$this->load->view('homeAdmin');
	}
	
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */