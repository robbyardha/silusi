<?php

class Siswa_model extends CI_Model
{
    public function getSiswa()
    {
        return $this->db->get('siswa')->result_array();
    }

    public function getSiswaById($id)
    {
        if ($id == null) {
            return $this->db->get('siswa')->result_array();
        } else {
            return $this->db->get_where('siswa', ['id' => $id])->row_array();
        }
    }

    public function tambah()
    {
    }

    public function ubah()
    {
    }

    public function hapus()
    {
    }

    public function import()
    {
    }
}
