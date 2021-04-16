<?php
class Nilai_ujian_model extends CI_Model
{

    public function getNilai()
    {
        return $this->db->get('nilai_siswa')->result_array();
    }

    public function joinSiswaAndNilai()
    {
        // $this->db->select('siswa.*, siswa.id, siswa.nis, siswa.nomor_ujian, siswa.nama, siswa.tempat_lahir, siswa.tgl_lahir, nilai_siswa.siswa_id, nilai_siswa.ujian_sekolah, nilai_siswa.usp_bks, nilai_siswa.avg');
        $this->db->select('siswa.*, nilai_siswa.siswa_id, nilai_siswa.ujian_sekolah, nilai_siswa.usp_bks, nilai_siswa.avg');
        $this->db->from('siswa');
        $this->db->join('nilai_siswa', 'nilai_siswa.siswa_id=siswa.id', 'LEFT');
        $query = $this->db->get();
        return $query->result_array();
    }
}
