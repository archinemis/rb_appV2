<?php

class M_siswa extends CI_Model
{

	function __construct()
	{
		$this->load->database();
	}

	function select_all()
	{
		$this->db->select('*');
		$this->db->from('tb_siswa');
		$this->db->join('tb_wali', 'tb_siswa.id_siswa = tb_wali.id_siswa');
		$this->db->join('tb_les', 'tb_siswa.id_siswa = tb_les.id_siswa');

		return $this->db->get();
	}

	function insert_siswa($siswa,$wali,$les)
	{
		$this->db->insert('tb_siswa',$siswa);

		$this->db->insert('tb_wali',$wali);

		$this->db->insert('tb_les',$les);
	}

	function insert_spp($spp,$bulan)
	{
		$spp['bulanPembayaran'] = $bulan;
		$this->db->insert('tb_spp',$spp);
	}

	function detail_siswa($id_siswa)
	{
		$this->db->select('*');
		$this->db->from('tb_siswa');
		$this->db->join('tb_wali', 'tb_wali.id_siswa = tb_siswa.id_siswa');
		$this->db->join('tb_les', 'tb_les.id_siswa = tb_siswa.id_siswa');
		$this->db->where('tb_siswa.id_siswa',$id_siswa);

		return $this->db->get();
	}

	function detail_spp($id_siswa)
	{
		$this->db->select('*');
		$this->db->from('tb_spp');
		$this->db->where('tb_spp.id_siswa',$id_siswa);

		return $this->db->get();
	}

}

?>
