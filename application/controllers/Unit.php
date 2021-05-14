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
            'harga' => $this->rusun_model->get_data('tb_harga')->result_array(),
        );
        $page['title'] = 'Kelola unit-Tambah unit';
        $this->load->view('back/templates/header', $page);
        $this->load->view('back/templates/navbar');
        $this->load->view('back/unit_form', $data);
        $this->load->view('back/templates/footer');
    }

    public function tambah_aksi()
    {
        $id_rusun                 = $this->input->post('wilayah');
        $type              = $this->input->post('type');
        $lantai               = $this->input->post('lantai');
        $harga                = $this->input->post('harga');
        $ac                = $this->input->post('ac');
        $kamar_mandi                = $this->input->post('kamar_mandi');
        $dapur                = $this->input->post('dapur');
        $bed                = $this->input->post('bed');
        $lemari                = $this->input->post('lemari');
        $kamar                = $this->input->post('kamar');

        $data = array(
            'id_rusun' => $id_rusun,
            'type' => $type,
            'lantai' => $lantai,
            'jml_unit' => 1,
            'status' => 'Kosong',
            'harga' => (int)$harga,
            'ac' => $ac,
            'kamar_mandi' => $kamar_mandi,
            'dapur' => $dapur,
            'bed' => (int)$bed,
            'lemari' => (int)$lemari,
            'kamar' => (int)$kamar,
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

    // update
    public function update($id)
    {
        $data = array(
            'unit' => $this->rusun_model->ambil_id_unit($id),
        );
        $page['title'] = 'Kelola unit-Tambah unit';
        $this->load->view('back/templates/header', $page);
        $this->load->view('back/templates/navbar');
        $this->load->view('back/unit_edit', $data);
        $this->load->view('back/templates/footer');
    }

    public function update_aksi()
    {
        $id               = $this->input->post('id');
        $id_rusun                 = $this->input->post('wilayah');
        $type              = $this->input->post('type');
        $lantai               = $this->input->post('lantai');
        $harga                = $this->input->post('harga');
        $ac                = $this->input->post('ac');
        $kamar_mandi                = $this->input->post('kamar_mandi');
        $dapur                = $this->input->post('dapur');
        $bed                = $this->input->post('bed');
        $lemari                = $this->input->post('lemari');
        $kamar                = $this->input->post('kamar');

        $data = array(
            'id_rusun' => $id_rusun,
            'type' => $type,
            'lantai' => $lantai,
            'jml_unit' => 1,
            'status' => 'Kosong',
            'harga' => (int)$harga,
            'ac' => $ac,
            'kamar_mandi' => $kamar_mandi,
            'dapur' => $dapur,
            'bed' => (int)$bed,
            'lemari' => (int)$lemari,
            'kamar' => (int)$kamar,
        );
        $where = array(
            'id_unit' => $id
        );

        $this->rusun_model->update_data('tb_unit', $data, $where);

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Update unit berhasil!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
        redirect('unit/');
    }

    // delete
    public function delete($id)
    {
        $where = array('id_unit' => $id);
        $this->rusun_model->delete_data($where, 'tb_unit');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Data unit berhasil dihapus!.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
        redirect('unit/');
    }

    // detail
    public function detail($id)
    {
        $data = array(
            'unit' => $this->rusun_model->ambil_id_unit($id),
        );
        $page['title'] = 'Kelola unit-Tambah unit';
        $this->load->view('back/templates/header', $page);
        $this->load->view('back/templates/navbar');
        $this->load->view('back/unit_detail', $data);
        $this->load->view('back/templates/footer');
    }
}
