<?php
class Pengumuman_model extends CI_Model
{
    public function getPengumuman()
    {
        return $this->db->get('pengumuman')->result_array();
    }

    public function getPengumumanById($id = null)
    {
        if ($id == null) {
            return $this->db->get('pengumuman')->result_array();
        } else {
            return $this->db->get_where('pengumuman', ['id' => $id])->row_array();
        }
    }
}
