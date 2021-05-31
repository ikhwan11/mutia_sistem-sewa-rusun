<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    public function index()
    {
        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');

        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $page['title'] = 'Transaksi';
            $this->load->view('back/templates/header', $page);
            $this->load->view('back/templates/navbar');
            $this->load->view('back/transaksi_filter');
            $this->load->view('back/templates/footer');
        } else {
            $data = array(
                'transaksi' => $this->db->query("SELECT * FROM tb_transaksi WHERE date(tanggal)>= '$dari' AND date(tanggal)<= '$sampai'")->result_array()
            );
            $page['title'] = 'Transaksi';
            $this->load->view('back/templates/header', $page);
            $this->load->view('back/templates/navbar');
            $this->load->view('back/transaksi_view', $data);
            $this->load->view('back/templates/footer');
        }
    }

    public function tambah_transaksi()
    {
        $page['title'] = 'Transaksi-tambah';
        $this->load->view('back/templates/header', $page);
        $this->load->view('back/templates/navbar');
        $this->load->view('back/transaksi_form');
        $this->load->view('back/templates/footer');
    }

    public function tambah_transaksi_aksi()
    {
        $jt = $this->input->post('jt');
        $tgl = $this->input->post('tgl');
        $iu = $this->input->post('iu');
        $an = $this->input->post('an');
        $total = $this->input->post('total');

        $data = array(
            'jenis_transaksi' => $jt,
            'tanggal' => $tgl,
            'id_unit' => $iu,
            'atas_nama' => $an,
            'total' => $total,
        );

        $this->rusun_model->insert_data($data, 'tb_transaksi');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Tambah data transaksi berhasil!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
        redirect('transaksi/');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('dari', 'Dari Tanggal', 'required');
        $this->form_validation->set_rules('sampai', 'Sampai Tanggal', 'required');
    }
}
