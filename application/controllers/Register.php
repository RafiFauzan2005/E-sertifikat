<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
  }

  public function index()
  {
    $this->form_validation->set_rules('username', 'Username', 'required|trim');
    $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', [
      'min_length' => 'Password too short!'
    ]);
    $this->form_validation->set_rules('full_name', 'Full_name', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]', [
      'is_unique' => 'Email sudah ada!'
    ]);

    if ($this->form_validation->run() == false) {
      $data['title'] = 'Daftar';
      $this->load->view('user/page/register', $data);

    } else {
      $data = [
        'username' => $this->input->post('username'),
        'password' => password_hash(
          $this->input->post('password'),
          PASSWORD_DEFAULT
        ),
        'full_name' => $this->input->post('full_name', true),
        'email' => htmlspecialchars($this->input->post('email', true)),
        'role_id' => 2,
        'status' => 'belum dikonfirmasi'
      ];

      $this->db->insert('users', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat akun anda sudah dibuat silahkan login</div>');
      redirect('Login');
    }
  }
}
