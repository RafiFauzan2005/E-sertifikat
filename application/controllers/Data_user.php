<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_user extends CI_Controller
{

	public function __construct()
	{
		parent::__construct(); {
			$this->load->model('Inimodel');
		}
		if (!$this->session->userdata('email')) {
			redirect('Login');
		}
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index($id)
	{
		$data_user = $this->Inimodel->user_detail($id);
		$data['user'] = $data_user;
		
		$data_user = $this->db->query("SELECT * FROM users WHERE role_id='user'")->result();
		$DATA['data_user'] = $data_user;
		
		$DATA['title'] = 'Edit User';
		$this->load->view('user/partials/navbar');
		$this->load->view('user/partials/header', $DATA);
		$this->load->view('user/page/edit_user', $data);
		$this->load->view('user/partials/footer');
	}
	public function EditUser()
	{
		$user_id = $this->input->post('user_id');
		$username = $this->input->post('username');
		$full_name = $this->input->post('full_name');
		$email= $this->input->post('email');

		$data = array(
			'user_id' => $user_id,
			'username' => $username,
			'full_name' => $full_name,
			'email' => $email
		);
		$this->Inimodel->EditUser($user_id, $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
		redirect(base_url('Dashboard'));
	}
	public function HapusUser($user_id)
	{
		$data = array('user_id' => $user_id);
		$this->Inimodel->HapusUser($data, 'users');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
		redirect(base_url('Dashboard'));
	}

}
