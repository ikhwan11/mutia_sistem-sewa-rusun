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

    public function sewa($id)
    {
        $data = array(
            'unit' => $this->rusun_model->ambil_id_unit($id),
        );
        $page['title'] = 'Detail Rusun';
        $this->load->view('front/templates/header', $page);
        $this->load->view('front/rusun_form', $data);
        $this->load->view('front/templates/footer');
    }

    public function tambah_sewa()
    {
        $id_unit        = $this->input->post('id_unit');
        $nama           = $this->input->post('nama');
        $tml            = $this->input->post('tml');
        $tgl            = $this->input->post('tgl');
        $no_hp          = $this->input->post('no_hp');
        $email          = $this->input->post('email');
        $alamat         = $this->input->post('alamat');
        $kerja          = $this->input->post('kerja');
        $berkas         = $_FILES['berkas']['name'];

        if ($berkas) {
            $config['upload_path']     = './assets/berkas_upload/';
            $config['allowed_types']    = 'pdf';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('berkas')) {
                echo " Gagal di Upload!";
            } else {
                $berkas = $this->upload->data("file_name");
            }
        }

        $data = array(
            'id_unit' => $id_unit,
            'nama' => $nama,
            'tempat_lahir' => $tml,
            'tanggal_lahir' => $tgl,
            'no_hp' => $no_hp,
            'email' => $email,
            'alamat' => $alamat,
            'tempat_kerja' => $kerja,
            'berkas' => $berkas,
        );

        $this->rusun_model->insert_data($data, 'tb_pengajuan_sewa');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  pengajuan berhasil, data anda akan segera di proses. kabar selanjutnya akan dikirm melalui E-mail, terima kasih.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
        redirect('rusun/');
    }
}
