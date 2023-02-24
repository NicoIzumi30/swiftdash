<?php
class Menu extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		date_default_timezone_set('Asia/Jakarta');
		$data['title'] = 'Menu Management';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('menu', 'Menu', 'required');
		$this->form_validation->set_rules('icon', 'Icon', 'required');
		if ($this->form_validation->run() == false) {
			$data['menu'] = $this->db->get('user_menu')->result_array();
			$this->load->view('template/head', $data);
			$this->load->view('template/sidebar', $data);
			$this->load->view('menu/index', $data);
			$this->load->view('template/footer');
		} else {
			$data = [
				'menu' => htmlspecialchars($this->input->post('menu')),
				'icon' => htmlspecialchars($this->input->post('icon')),
				'created' => date("d-M-Y")

			];
			$this->db->insert('user_menu', $data);
			$this->session->set_flashdata('flash', 'Di Tambahkan');
			redirect('menu');
		}
	}
	public function delete($id)
	{
		$where = array(
			'id' => $id
		);
		$this->M_menu->delete($where, 'user_menu');
		$this->session->set_flashdata('flash', 'Di Hapus');
		redirect('menu');
	}
	public function update($id)
	{
		$this->form_validation->set_rules('menu', 'Menu', 'required');
		$this->form_validation->set_rules('icon', 'Icon', 'required');
		if ($this->form_validation->run() == false) {
		} else {
			$data = array(
				'menu' => htmlspecialchars($this->input->post('menu')),
				'icon' => htmlspecialchars($this->input->post('icon')),
			);
			$where = array(
				'id' => $id
			);
			$this->M_menu->update($where, 'user_menu', $data);
			$this->session->set_flashdata('flash', 'Di Update');

			redirect('menu');
		}
	}
	public function submenu()
	{
		$data['title'] = 'Sub Menu Management';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('submenu', 'Submenu', 'required');
		$this->form_validation->set_rules('menu_id', 'Menu', 'required');
		$this->form_validation->set_rules('url', 'URL', 'required');
		if ($this->form_validation->run() == false) {
			$data['subMenu'] = $this->M_menu->getSubMenu();
			$data['menu'] = $this->db->get('user_menu')->result_array();
			$this->load->view('template/head', $data);
			$this->load->view('template/sidebar', $data);
			$this->load->view('menu/submenu', $data);
			$this->load->view('template/footer');
		} else {
			$data = [
				'title' => htmlspecialchars($this->input->post('submenu')),
				'menu_id' => htmlspecialchars($this->input->post('menu_id')),
				'url' => htmlspecialchars($this->input->post('url')),
				'is_active' => htmlspecialchars($this->input->post('is_active')),
			];
			$this->db->insert('user_sub_menu', $data);
			$this->session->set_flashdata('flash', 'Di Tambahkan');
			redirect('menu/submenu');
		}
	}
}