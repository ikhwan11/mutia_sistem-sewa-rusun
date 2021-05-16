<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function index()
    {
        $page['title'] = 'About';
        $this->load->view('front/templates/header', $page);
        $this->load->view('front/about');
        $this->load->view('front/templates/footer');
    }
}
