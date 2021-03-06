<?php

class Rusun_model extends CI_Model
{
    // main
    public function get_data($table)
    {
        return $this->db->get($table);
    }
    public function get_where($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    // end main

    // pagination data

    // ---- data unit ----
    public function getUnit($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('id_rusun', $keyword);
        }
        return $this->db->get('tb_unit', $limit, $start)->result_array();
    }

    public function hitungUnit()
    {
        return $this->db->get('tb_unit')->num_rows();
    }

    // ---- data formulir ----
    public function getFormulir($limit, $start)
    {
        return $this->db->get('tb_pengajuan_sewa', $limit, $start)->result_array();
    }

    public function hitungFormulir()
    {
        return $this->db->get('tb_pengajuan_sewa')->num_rows();
    }

    // data penyewa
    public function getPenyewa($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama', $keyword);
        }
        return $this->db->get('tb_penyewa', $limit, $start)->result_array();
    }

    // auth
    public function cek_login()
    {
        $username = set_value('username');
        $password = set_value('password');

        $result = $this->db
            ->where('username', $username)
            ->where('password', $password)
            ->limit(1)
            ->get('tb_user');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return FALSE;
        }
    }

    // end auth

    public function ambil_id_unit($id)
    {
        $hasil = $this->db->where('id_unit', $id)->get('tb_unit');
        if ($hasil->num_rows() > 0) {
            return $hasil->result_array();
        } else {
            return false;
        }
    }
}
