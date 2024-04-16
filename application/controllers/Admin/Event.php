<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Event extends CI_Controller
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
		$data_event = $this->Inimodel->get_event();
		$DATA['data_event'] = $data_event;
		$title['title'] = 'Event';
		$this->load->view('admin/partials/navbar');
		$this->load->view('admin/partials/header', $title);
		$this->load->view('admin/page/event', $DATA);
		$this->load->view('admin/partials/footer');
	}
	public function Edit_Event($id)
	{
		$data_event = $this->Inimodel->event_detail($id);
		$DATA['event'] = $data_event;

		$title['title'] = 'Edit_Event';
		$this->load->view('admin/partials/navbar');
		$this->load->view('admin/partials/header', $title);
		$this->load->view('admin/page/edit_event', $DATA);
		$this->load->view('admin/partials/footer');
	}

	public function TambahEvent()
	{
		$event_name = $this->input->post('event_name');
		$event_date = $this->input->post('event_date');
		$location = $this->input->post('location');
		$organizer = $this->input->post('organizer');

		$data = array(
			'event_name' 	=> $event_name,
			'event_date' 	=> $event_date,
			'location' 		=> $location,
			'organizer' 	=> $organizer
		);

		$this->Inimodel->TambahEvent($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
		redirect(base_url('Admin/Event'));
	}
	public function EditEvent()
	{
		$event_id = $this->input->post('event_id');
		$event_name = $this->input->post('event_name');
		$event_date = $this->input->post('event_date');
		$location = $this->input->post('location');
		$organizer = $this->input->post('organizer');

		$data = array(
			'event_id' => $event_id,
			'event_name' => $event_name,
			'event_date' => $event_date,
			'location' => $location,
			'organizer' => $organizer
		);
		$this->Inimodel->EditEvent($event_id, $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
		redirect(base_url('Admin/Event'));
	}
	public function HapusEvent($event_id)
	{
		$data = array('event_id' => $event_id);
		$this->Inimodel->HapusEvent($data, 'events');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
		redirect(base_url('Admin/Event'));
	}
}
