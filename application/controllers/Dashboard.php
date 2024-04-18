<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
		$data_sertifikat = $this->db->query("SELECT * FROM certificates WHERE certificate_id=$user")->result();
		$generate = $this->db->query("SELECT * FROM certificate_assignments WHERE user_id=$user")->result();
		$data_user = $this->db->query("SELECT * FROM users WHERE role_id='user'")->result();
		
		$data['data_user'] = $data_user;
		$data['data_sertifikat'] = $data_sertifikat;
		$data['generate'] = $generate;

		$data['title'] = 'Dashboard';
		$this->load->view('user/partials/navbar');
		$this->load->view('user/partials/header', $data);
		$this->load->view('user/page/dashboard');
		$this->load->view('user/partials/footer');
	}
	
}
