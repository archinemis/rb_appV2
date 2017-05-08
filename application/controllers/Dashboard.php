<?php


class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if (empty($this->session->userdata('username'))) 
		{
			redirect('login');
		}
	}

	public function index()
	{
		$this->load->view('includes/head');
		$this->load->view('includes/nav_header');
		$this->load->view('includes/nav_sidebar');
		$this->load->view('index');
		$this->load->view('includes/foot');
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}

?>