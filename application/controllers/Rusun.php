<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rusun extends CI_Controller
{
    // rusun
    public function index()
    {
        // search and pagination
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $config['base_url'] = 'http://localhost/skripsi_mutia/rusun/index';

        $this->db->like('id_rusun', $data['keyword']);
        $this->db->from('tb_unit');

        $config['total_rows'] = $this->db->count_all_results();


        $config['per_page'] = 6;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);

        $data = array(
            'unit' => $this->rusun_model->getUnit($config['per_page'], $data['start'], $data['keyword']),
            'start' => $this->uri->segment(3),
            'total_rows' => $config['total_rows']
        );

        $page['title'] = 'Rusun';
        $this->load->view('front/templates/header', $page);
        $this->load->view('front/rusun_view', $data);
        $this->load->view('front/templates/footer');
    }
    public function rusun_detail($id)
    {
        $data = array(
            'unit' => $this->rusun_model->ambil_id_unit($id),
        );
        $page['title'] = 'Detail Rusun';
        $this->load->view('front/templates/header', $page);
        $this->load->view('front/rusun_detail', $data);
        $this->load->view('front/templates/footer');
    }
}
