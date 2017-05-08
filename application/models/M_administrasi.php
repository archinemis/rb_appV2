<?php

/**
 *
 */
class Spp extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  function cari_siswa($hasil)
  {
    $this->db->select('*');
    $this->db->from('tb_siswa');
    $this->db->like('namaSiswa',$hasil,'both');
    $this->db->or_like('id_siswa',$hasil);
    // $this->db->like('id_siswa',$hasil,'both');

    return $this->db->get();
  }
}


?>
