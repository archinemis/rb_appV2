<?php


class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');
		if (!empty($this->session->userdata('username'))) 
		{
			redirect('dashboard');
		}
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function proses_login()
	{
		$data['username'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');

		$login = $this->M_login->login_now($data);

		if ($login) 
		{
			$session = ['username' => $data['username']];
			$this->session->set_userdata($session);
          	redirect('dashboard');
		}
	}
}

?>