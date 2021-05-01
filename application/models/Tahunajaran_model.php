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
            return $this->db->get_where('tahun_ajaran', ['id' => $id])->row_array();
        }
    }

    public function tambah()
    {
        $data = [
            'tahun_ajaran' => htmlspecialchars($this->input->post('tahunajaran')),
            'is_active' => 0
        ];
        $this->db->insert('tahun_ajaran', $data);
    }

    public function ubah()
    {
        $id = htmlspecialchars($this->input->post('id'));
        $data = [
            'tahun_ajaran' => htmlspecialchars($this->input->post('tahunajaran'))
        ];
        $this->db->where('id', $id);
        $this->db->update('tahun_ajaran', $data);
    }

    public function hapus()
    {
        $id = htmlspecialchars($this->input->post('id'));
        $this->db->where('id', $id);
        $this->db->delete('tahun_ajaran');
    }

    public function aktifkan()
    {
        $id = htmlspecialchars($this->input->post('id'));
        $konfirm = htmlspecialchars($this->input->post('konfirmasi'));
        if ($konfirm == "KONFIRMASI") {
            $this->db->where('id', $id);
            $data = [
                'is_active' => 1
            ];
            $this->db->update('tahun_ajaran', $data);
        } else {
            $this->session->set_flashdata('tahunajarankonfirm', 'Text Tidak Sesuai dengan Konfirmasi');
            redirect('admin/tahunajaran');
        }
    }
}
