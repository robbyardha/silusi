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

    public function tambah()
    {
        date_default_timezone_set('Asia/Jakarta');
        $data = [
            'judul' => htmlspecialchars($this->input->post('judul')),
            'pengumuman' => htmlspecialchars($this->input->post('pengumuman')),
            'created_by' => htmlspecialchars($this->input->post('created_by')),
            'created_date' => date('Y-m-d H:i:s'),
        ];
        $this->db->insert('pengumuman', $data);
    }

    public function ubah()
    {
        date_default_timezone_set('Asia/Jakarta');
        $id = htmlspecialchars($this->input->post('id'));
        $data = [
            'judul' => htmlspecialchars($this->input->post('judul')),
            'pengumuman' => htmlspecialchars($this->input->post('pengumuman')),
            'created_by' => htmlspecialchars($this->input->post('created_by')),
        ];
        $this->db->where('id', $id);
        $this->db->update('pengumuman', $data);
    }

    public function hapus($id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->db->where('id', $id);
        $this->db->delete('pengumuman');
    }
}
