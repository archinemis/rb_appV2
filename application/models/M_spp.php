<?php

/**
 *
 */
class M_spp extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  function detail_spp($id_siswa)
  {
    $this->db->select('*');
    $this->db->from('tb_siswa');
    $this->db->join('tb_wali','tb_wali.id_siswa = tb_siswa.id_siswa');
    $this->db->join('tb_les','tb_les.id_siswa = tb_siswa.id_siswa');
    $this->db->where('tb_siswa.id_siswa',$id_siswa);

    return $this->db->get();
  }
}


?>
