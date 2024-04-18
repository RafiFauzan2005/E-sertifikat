<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sertifikat extends CI_Controller
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
		$data_sertifikat = $this->Inimodel->get_sertifikat();
		$data_event = $this->Inimodel->get_event();
		$data_user = $this->db->query("SELECT * FROM users WHERE role_id='user'")->result();

		$data['data_sertifikat'] = $data_sertifikat;
		$data['data_event'] = $data_event;
		$data['data_user'] = $data_user;

		$title['title'] = 'sertifikat';
		$this->load->view('admin/partials/navbar');
		$this->load->view('admin/partials/header', $title);
		$this->load->view('admin/page/sertifikat', $data);
		$this->load->view('admin/partials/footer');
	}
	public function Edit_Sertifikat($id)
	{
		$data_sertifikat = $this->Inimodel->sertifikat_detail($id);
		$data_event = $this->Inimodel->get_event();
		$data_user = $this->db->query("SELECT * FROM users WHERE role_id='user'")->result();

		$DATA['data_sertifikat'] = $data_sertifikat;
		$DATA['data_event'] = $data_event;
		$DATA['data_user'] = $data_user;

		$title['title'] = 'Edit Sertifikat';
		$this->load->view('admin/partials/navbar');
		$this->load->view('admin/partials/header', $title);
		$this->load->view('admin/page/edit_sertifikat', $DATA);
		$this->load->view('admin/partials/footer');
	}
	public function TambahSertifikat()
	{
		$user_id = $this->input->post('user_id');
		$event_name = $this->input->post('event_name');
		$event_date = $this->input->post('event_date');
		$certificate_text = $this->input->post('certificate_text');
		$position = $this->input->post('position');
		$signed = $this->input->post('signed');
		

		$data = array(
			'user_id' 			=> $user_id,
			'event_name' 		=> $event_name,
			'event_date' 		=> $event_date,
			'certificate_text' 	=> $certificate_text,
			'position'			=> $position,
			'signed'			=> $signed
		);

		$this->Inimodel->TambahSertifikat($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
		redirect(base_url('Admin/Sertifikat'));
	}
	public function HapusSertifikat($certificate_id)	
	{
		$data = array('certificate_id' => $certificate_id);
		$this->Inimodel->HapusSertifikat($data, 'certificates');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
		redirect(base_url('Admin/Sertifikat'));
	}
	public function EditSertifikat($certificate_id)
	{
		$data = array(
			'certificate_id' => $certificate_id,
			'user_id' => $this->input->post('user_id'),
			'event_name' => $this->input->post('event_name'),
			'event_date' => $this->input->post('event_date'),
			'certificate_text' => $this->input->post('certificate_text'),
			'position'	=> $this->input->post('position'),
			'signed'	=> $this->input->post('signed')
		);
		$this->Inimodel->EditSertifikat($data, 'certificates');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
		redirect(base_url('Admin/Sertifikat'));
	}
}
