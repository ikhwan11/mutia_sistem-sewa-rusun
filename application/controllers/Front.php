<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Front extends CI_Controller
{

	public function index()
	{
		$page['title'] = 'Beranda';
		$this->load->view('front/templates/header', $page);
		$this->load->view('front/beranda');
		$this->load->view('front/templates/footer');
	}
	public function about()
	{
		$page['title'] = 'About';
		$this->load->view('front/templates/header', $page);
		$this->load->view('front/about');
		$this->load->view('front/templates/footer');
	}
}
