<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penyewa extends CI_Controller
{
    public function index()
    {
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $config['base_url'] = 'http://localhost/skripsi_mutia/penyewa/index';

        $this->db->like('nama', $data['keyword']);
        $this->db->from('tb_penyewa');

        $config['total_rows'] = $this->db->count_all_results();


        $config['per_page'] = 5;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);

        $data = array(
            'penyewa' => $this->rusun_model->getPenyewa($config['per_page'], $data['start'], $data['keyword']),
            'start' => $this->uri->segment(3),
        );
        $page['title'] = 'Kelola penyewa';
        $this->load->view('back/templates/header', $page);
        $this->load->view('back/templates/navbar');
        $this->load->view('back/penyewa_view', $data);
        $this->load->view('back/templates/footer');
    }

    public function tambah()
    {
        $page['title'] = 'Kelola penyewa-Tambah penyewa';
        $this->load->view('back/templates/header', $page);
        $this->load->view('back/templates/navbar');
        $this->load->view('back/penyewa_form');
        $this->load->view('back/templates/footer');
    }

    public function detail($id)
    {
        $data = array(
            'penyewa' => $this->db->query("SELECT * FROM tb_penyewa tp, tb_unit tu, tb_rusun tr WHERE tp.id_unit = tu.id_unit AND tu.id_rusun = tr.id_rusun AND tp.id_penyewa = '$id'")->result_array()
        );
        $page['title'] = 'Kelola penyewa-Detail penyewa';
        $this->load->view('back/templates/header', $page);
        $this->load->view('back/templates/navbar');
        $this->load->view('back/penyewa_detail', $data);
        $this->load->view('back/templates/footer');
    }

    public function update_foto()
    {
        $id                   = $this->input->post('id');
        $foto                 = $_FILES['foto']['name'];

        if ($foto = '') {
        } else {
            $config['upload_path']     = './assets/foto';
            $config['allowed_types']    = 'jpg|jpeg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "Foto gagal di upload!";
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array('foto' => $foto);
        $where = array(
            'id_penyewa' => $id
        );

        $this->rusun_model->update_data('tb_penyewa', $data, $where);

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				 foto berhasil di update!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
        redirect('penyewa/');
    }
}
