<?php
class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		// if (!$this->session->userdata('email')) {
		//     redirect('auth');
		// }
	}

	public function index()
	{
		// $this->load->view('template/header');
		$this->load->view('template/head');
		$this->load->view('template/sidebar');
		$this->load->view('dashboard/index');
		$this->load->view('template/footer');
	}
}
