<?php

/**
 *
 */
class Spp extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('M_spp');
  }

  function index()
  {

  }

  function siswa($id_siswa)
  {
    $data['spp'] = $this->M_spp->detail_spp($id_siswa)->row();
    $this->load->view('includes/head');
    $this->load->view('includes/nav_header');
    $this->load->view('includes/nav_sidebar');
    $this->load->view('siswa_spp',$data);
    $this->load->view('includes/foot');
  }

}


?>
