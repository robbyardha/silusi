<?php

class Jadwal_pengumuman_model extends CI_Model
{
    public function getAturJadwal()
    {
        return $this->db->get('jadwal_pengumuman')->result_array();
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
}
