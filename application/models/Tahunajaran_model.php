<?php

class Tahunajaran_model extends CI_Model
{
    public function getTahunajaran()
    {
        return $this->db->get('tahun_ajaran')->result_array();
    }

    public function getTahunajaranById($id = null)
    {
        if ($id == null) {
            return $this->db->get('tahun_ajaran')->result_array();
        } else {
            return $this->db->get_where('tahun_ajaran', ['id' => $id]);
        }
    }
}
