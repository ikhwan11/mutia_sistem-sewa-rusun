<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{
    public function index()
    {

        $config['base_url'] = 'http://localhost/skripsi_mutia/form/index';
        $config['per_page'] = 5;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);

        $data = array(
            'formulir' => $this->rusun_model->getFormulir($config['per_page'], $data['start']),
            'start' => $this->uri->segment(3)
        );

        $page['title'] = 'Formulir';
        $this->load->view('back/templates/header', $page);
        $this->load->view('back/templates/navbar');
        $this->load->view('back/formulir_view', $data);
        $this->load->view('back/templates/footer');
    }

    public function tambah_penyewa($id)
    {
        $data = array(
            'penyewa' => $this->db->query("SELECT * FROM tb_pengajuan_sewa WHERE id_sewa = '$id'")->result_array()
        );
        $page['title'] = 'Formulir';
        $this->load->view('back/templates/header', $page);
        $this->load->view('back/templates/navbar');
        $this->load->view('back/formulir_form', $data);
        $this->load->view('back/templates/footer');
    }

    public function tambah_penyewa_aksi()
    {
        $id_sewa = $this->input->post('id_sewa');
        $id_unit = $this->input->post('id_unit');
        $nama = $this->input->post('nama');
        $tl = $this->input->post('tl');
        $tgl = $this->input->post('tgl');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');
        $email = $this->input->post('email');
        $tkerja = $this->input->post('tkerja');
        $jk = $this->input->post('jk');

        $data = array(
            'id_unit' => $id_unit,
            'nama' => $nama,
            'jenis_kelamin' => $jk,
            'tempat_lahir' => $tl,
            'tanggal_lahir' => $tgl,
            'no_hp' => $no_hp,
            'email' => $email,
            'alamat' => $alamat,
            'tempat_kerja' => $tkerja,
        );

        // update status unit
        $data2 = array('status' => 'Terisi');
        $where = array(
            'id_unit' => $id_unit
        );
        $this->rusun_model->update_data('tb_unit', $data2, $where);

        // end

        // hapus formulir
        $where = array('id_sewa' => $id_sewa);
        $this->rusun_model->delete_data($where, 'tb_pengajuan_sewa');
        // end

        $this->rusun_model->insert_data($data, 'tb_penyewa');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data penyewa berhasil tersimpan
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
        redirect('penyewa/');
    }
}
