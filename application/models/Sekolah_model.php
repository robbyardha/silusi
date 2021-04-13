<?php
class Sekolah_model extends CI_Model
{
    public function getSekolah()
    {
        return $this->db->get('sekolah')->result_array();
    }

    public function tambah()
    {
    }
}
