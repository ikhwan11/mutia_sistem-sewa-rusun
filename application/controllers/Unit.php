<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Unit extends CI_Controller
{
    public function index()
    {
        $page['title'] = 'Kelola unit';
        $this->load->view('back/templates/header', $page);
        $this->load->view('back/templates/navbar');
        $this->load->view('back/unit_view');
        $this->load->view('back/templates/footer');
    }

    public function tambah()
    {
        $page['title'] = 'Kelola unit-tambah unit';
        $this->load->view('back/templates/header', $page);
        $this->load->view('back/templates/navbar');
        $this->load->view('back/unit_form');
        $this->load->view('back/templates/footer');
    }
}
