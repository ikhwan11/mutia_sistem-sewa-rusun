<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{
    public function index()
    {
        $page['title'] = 'Kelola pelanggan';
        $this->load->view('back/templates/header', $page);
        $this->load->view('back/templates/navbar');
        $this->load->view('back/pelanggan_view');
        $this->load->view('back/templates/footer');
    }

    public function tambah()
    {
        $page['title'] = 'Kelola unit-Tambah unit';
        $this->load->view('back/templates/header', $page);
        $this->load->view('back/templates/navbar');
        $this->load->view('back/pelanggan_form');
        $this->load->view('back/templates/footer');
    }

    public function detail()
    {
        $page['title'] = 'Kelola unit-Detail unit';
        $this->load->view('back/templates/header', $page);
        $this->load->view('back/templates/navbar');
        $this->load->view('back/pelanggan_detail');
        $this->load->view('back/templates/footer');
    }
}
