<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Generate_Sertifikat extends CI_Controller
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
		$generate = $this->Inimodel->get_generate();
		$data_sertifikat = $this->Inimodel->get_sertifikat();
		$data_event = $this->Inimodel->get_event();
		$data_user = $this->db->query("SELECT * FROM users WHERE role_id='user'")->result();

		$DATA['generate'] = $generate;
		$DATA['data_sertifikat'] = $data_sertifikat;
		$DATA['data_event'] = $data_event;
		$DATA['data_user'] = $data_user;

		$title['title'] = 'Generate Sertifikat';
		$this->load->view('admin/partials/navbar');
		$this->load->view('admin/partials/header', $title);
		$this->load->view('admin/page/generate', $DATA);
		$this->load->view('admin/partials/footer');
	}
	public function TambahGenerate()
	{
		$certificate_id = $this->input->post('certificate_id');
		$user_id = $this->input->post('user_id');
		$event_id = $this->input->post('event_id');

		$data = array(
			'certificate_id' 	=> $certificate_id,
			'user_id' 			=> $user_id,
			'event_id' 			=> $event_id
		);

		$this->Inimodel->TambahGenerate($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
		redirect(base_url('Admin/Generate_Sertifikat'));
	}
	public function HapusGenerate($assignment_id)	
	{
		$data = array('assignment_id' => $assignment_id);
		$this->Inimodel->HapusGenerate($data, 'certificate_assignments');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
		redirect(base_url('Admin/Generate_Sertifikat'));
	}
	public function pdf($id)
	{
		$data_sertifikat = $this->Inimodel->sertifikat_detail($id);
		$data_event = $this->Inimodel->event_detail($id);
		$data_user = $this->Inimodel->user_detail($id);
		$this->load->library('dompdf_gen');
		$data['data_sertifikat'] = $data_sertifikat;
		$data['data_event'] = $data_event;
		$data['data_user'] = $data_user;

		$this->load->library('dompdf_gen');
		$this->load->view('admin/page/pdf', $data);
		
		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream('Sertifikat.pdf', array('Attachment' => 0));

	}	
}
