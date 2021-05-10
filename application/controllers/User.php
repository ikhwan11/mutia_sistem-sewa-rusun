<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->rusun_model->get_data('tb_user')->result_array();
        $page['title'] = 'Dashboard-Kelola User';
        $this->load->view('back/templates/header', $page);
        $this->load->view('back/templates/navbar');
        $this->load->view('back/user_data', $data);
        $this->load->view('back/templates/footer');
    }
    public function tambah()
    {
        $page['title'] = 'Kelola User-Tambah User';
        $this->load->view('back/templates/header', $page);
        $this->load->view('back/templates/navbar');
        $this->load->view('back/user_form');
        $this->load->view('back/templates/footer');
    }

    public function tambah_aksi()
    {
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $data = array(
            'username' => $username,
            'nama' => $nama,
            'password' => $password,
        );
        $this->rusun_model->insert_data($data, 'tb_user');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Tambah user berhasil!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
        redirect('user/');
    }
}
