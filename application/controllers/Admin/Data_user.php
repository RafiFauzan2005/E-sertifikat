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


	public function index()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$user_id = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$user = $user_id['user_id'];
		$data_user = $this->db->query("SELECT * FROM users WHERE role_id='user'")->result();

		$data['data_user'] = $data_user;
		$data['data_user'] = $data_user;
		$title['title'] = 'Data User';
		$this->load->view('admin/partials/navbar');
		$this->load->view('admin/partials/header', $title);
		$this->load->view('admin/page/data_user', $data);
		$this->load->view('admin/partials/footer');
	}	
	public function Edit_user($id)
	{
		$data_user = $this->Inimodel->user_detail($id);
		$DATA['user'] = $data_user;

		$title['title'] = 'Edit User';
		$this->load->view('admin/partials/navbar');
		$this->load->view('admin/partials/header', $title);
		$this->load->view('admin/page/edit_user', $DATA);
		$this->load->view('admin/partials/footer');
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
		redirect(base_url('Admin/Data_user'));
	}
	public function HapusUser($user_id)
	{
		$data = array('user_id' => $user_id);
		$this->Inimodel->HapusUser($data, 'users');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
		redirect(base_url('Admin/data_user'));
	}

}
