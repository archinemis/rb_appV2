<?php

Class Siswa extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Makassar");
		$this->load->model('M_siswa');
		if (empty($this->session->userdata('username')))
		{
			redirect('login');
		}
	}

	public function index()
	{
		$data['daftar_siswa'] = $this->M_siswa->select_all()->result();

		$this->load->view('includes/head');
		$this->load->view('includes/nav_header');
		$this->load->view('includes/nav_sidebar');
		$this->load->view('siswa',$data);
		$this->load->view('includes/foot');
	}

	public function tambah_siswa()
	{
		$this->load->view('includes/head');
		$this->load->view('includes/nav_header');
		$this->load->view('includes/nav_sidebar');
		$this->load->view('siswa_tambah');
		$this->load->view('includes/foot');
	}

	public function proses_tambah()
	{
		$this->form_validation->set_rules('namaSiswa','"Nama Siswa"','required');
		$this->form_validation->set_rules('alamatSiswa','"Alamat Siswa"','required');
		$this->form_validation->set_rules('asalSiswa','"Asal Siswa"','required');
		$this->form_validation->set_rules('tglLahir','"Tanggal Lahir"','required');
		$this->form_validation->set_rules('blnLahir','"Bulan Lahir"','required');
		$this->form_validation->set_rules('thnLahir','"Tahun Lahir"','required');
		$this->form_validation->set_rules('namaWali','"Nama Wali"','required');
		$this->form_validation->set_rules('noTelp','"Nomor Telepon"','required');
		$this->form_validation->set_rules('kelasLes','"Kelas Les"','required');
		$this->form_validation->set_rules('waktuLes','"Waktu Les"','required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('includes/head');
			$this->load->view('includes/nav_header');
			$this->load->view('includes/nav_sidebar');
			$this->load->view('siswa_tambah');
			$this->load->view('includes/foot');
		}else{
			$siswa['id_siswa']	= $this->input->post('id_siswa');
			$siswa['namaSiswa'] = $this->input->post('namaSiswa');
			$siswa['asal'] 		  = $this->input->post('asalSiswa');
			$siswa['tglLahir']  = $this->input->post('tglLahir');
			$siswa['blnLahir']  = $this->input->post('blnLahir');
			$siswa['thnLahir']  = $this->input->post('thnLahir');
			$siswa['alamat']		= $this->input->post('alamatSiswa');
			$siswa['provinsi']	= 'Bali';
			$siswa['kabupaten'] = 'Denpasar';
			$siswa['waktu_daftar']	= date('d-m-Y h:i');

			$wali['namaWali']		= $this->input->post('namaWali');
			$wali['noTelp'] 		= $this->input->post('noTelp');
			$wali['id_siswa']		= $this->input->post('id_siswa');

			$les['id_siswa']		= $this->input->post('id_siswa');
			$les['kelasLes']		= $this->input->post('kelasLes');
			$les['waktuLes'] 		= $this->input->post('waktuLes');

			$insert_siswa = $this->M_siswa->insert_siswa($siswa,$wali,$les);

			$bln = array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
			$spp['tahunPembayaran'] = date('Y');
			$spp['nominal'] 				= 0;
			$spp['id_siswa']				= $this->input->post('id_siswa');
			foreach($bln as $bulan){
				$this->M_siswa->insert_spp($spp,$bulan);
			}

			$this->session->set_flashdata('sukses','berhasil');
			redirect(site_url('siswa'));
		}
	}

	public function detail_siswa($id_siswa)
	{
		$data['siswa'] = $this->M_siswa->detail_siswa($id_siswa)->row();
		$data['spp'] = $this->M_siswa->detail_spp($id_siswa)->result();
		$this->load->view('includes/head');
		$this->load->view('includes/nav_header');
		$this->load->view('includes/nav_sidebar');
		$this->load->view('siswa_detail',$data);
		$this->load->view('includes/foot');
	}

}

?>
