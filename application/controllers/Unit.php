<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Unit extends CI_Controller
{
    public function index()
    {
        // search and pagination
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $config['base_url'] = 'http://localhost/skripsi_mutia/unit/index';

        $this->db->like('id_rusun', $data['keyword']);
        $this->db->from('tb_unit');

        $config['total_rows'] = $this->db->count_all_results();


        $config['per_page'] = 5;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);

        $data = array(
            'unit' => $this->rusun_model->getUnit($config['per_page'], $data['start'], $data['keyword']),
            'start' => $this->uri->segment(3),
            'total_rows' => $config['total_rows']
        );
        $page['title'] = 'Kelola unit';
        $this->load->view('back/templates/header', $page);
        $this->load->view('back/templates/navbar');
        $this->load->view('back/unit_view', $data);
        $this->load->view('back/templates/footer');
    }

    // create
    public function tambah()
    {
        $data = array(
            'rusun' => $this->rusun_model->get_data('tb_rusun')->result_array(),
        );
        $page['title'] = 'Kelola unit-Tambah unit';
        $this->load->view('back/templates/header', $page);
        $this->load->view('back/templates/navbar');
        $this->load->view('back/unit_form', $data);
        $this->load->view('back/templates/footer');
    }

    public function tambah_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $id_rusun                 = $this->input->post('wilayah');
            $type              = $this->input->post('type');
            $lantai               = $this->input->post('lantai');
            $no_unit                = $this->input->post('no');

            $data = array(
                'id_rusun' => $id_rusun,
                'type' => $type,
                'lantai' => $lantai,
                'no_unit' => $no_unit,
                'jml_unit' => 1,
                'status' => 'Kosong',
            );

            $this->rusun_model->insert_data($data, 'tb_unit');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Tambah unit berhasil!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
            redirect('unit/');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('no', 'No Unit', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('lantai', 'Lantai', 'required', array('required' => '{field} tidak boleh kosong!'));
    }
}
