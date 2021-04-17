<?php

class Jadwal_pengumuman_model extends CI_Model
{
    public function getAturJadwal()
    {
        return $this->db->get('jadwal_pengumuman')->result_array();
    }

    public function getAturJadwalById($id = null)
    {
        if ($id == null) {
            return $this->db->get('jadwal_pengumuman')->result_array();
        } else {
            return $this->db->get_where('jadwal_pengumuman', ['id' => $id])->row_array();
        }
    }

    public function tambah()
    {
        $data = [
            'nama_jadwal' => htmlspecialchars($this->input->post('nama_jadwal')),
            'tanggal_awal' => htmlspecialchars($this->input->post('tanggal_awal')),
            'jam_awal' => htmlspecialchars($this->input->post('waktu_awal')),
            'tanggal_akhir' => htmlspecialchars($this->input->post('tanggal_akhir')),
            'jam_akhir' => htmlspecialchars($this->input->post('waktu_akhir'))
        ];
        $this->db->insert('jadwal_pengumuman', $data);
    }

    public function ubah()
    {
        $id = htmlspecialchars($this->input->post('id'));
        $data = [
            'nama_jadwal' => htmlspecialchars($this->input->post('nama_jadwal')),
            'tanggal_awal' => htmlspecialchars($this->input->post('tanggal_awal')),
            'jam_awal' => htmlspecialchars($this->input->post('waktu_awal')),
            'tanggal_akhir' => htmlspecialchars($this->input->post('tanggal_akhir')),
            'jam_akhir' => htmlspecialchars($this->input->post('waktu_akhir'))
        ];
        $this->db->where('id', $id);
        $this->db->update('jadwal_pengumuman', $data);
    }
    public function hapus()
    {
    }
}
