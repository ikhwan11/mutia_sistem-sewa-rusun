<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Front extends CI_Controller
{

	public function index()
	{
		$this->load->view('front/templates/header');
		$this->load->view('front/beranda');
		$this->load->view('front/templates/footer');
	}
	public function about()
	{
		$this->load->view('front/templates/header');
		$this->load->view('front/about');
		$this->load->view('front/templates/footer');
	}
}
