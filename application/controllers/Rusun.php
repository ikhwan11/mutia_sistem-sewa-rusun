<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rusun extends CI_Controller
{
    // rusun
    public function index()
    {
        $this->load->view('front/templates/header');
        $this->load->view('front/rusun_view');
        $this->load->view('front/templates/footer');
    }
    public function rusun_detail()
    {
        $this->load->view('front/templates/header');
        $this->load->view('front/rusun_detail');
        $this->load->view('front/templates/footer');
    }
}
