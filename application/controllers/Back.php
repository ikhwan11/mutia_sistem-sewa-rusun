<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Back extends CI_Controller
{
    public function index()
    {
        $page['title'] = 'Dashboard';
        $this->load->view('back/templates/header', $page);
        $this->load->view('back/templates/navbar');
        $this->load->view('back/dashboard');
        $this->load->view('back/templates/footer');
    }
}
