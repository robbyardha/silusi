<?php

class Mapel_model extends CI_Model
{
    public function getMapel()
    {
        return $this->db->get('mapel')->result_array();
    }

    public function getMapelById($id = null)
    {
        if ($id == null) {
            return $this->db->get('mapel')->result_array();
        } else {
            return $this->db->get_where('mapel', ['id' => $id])->row_array();
        }
    }

    public function tambah()
    {
        $data = [
            'nama_mapel' => htmlspecialchars($this->input->post('nama_mapel'))
        ];
        $this->db->insert('mapel', $data);
    }

    public function ubah()
    {
        $id = htmlspecialchars($this->input->post('id'));
        $nama_mapel = htmlspecialchars($this->input->post('nama_mapel'));
        $this->db->set('nama_mapel', $nama_mapel);
        $this->db->update('mapel', ['id' => $id]);
    }

    public function hapus()
    {
        $id = htmlspecialchars($this->input->post('id'));
        $this->db->delete('mapel', ['id' => $id]);
    }
}
