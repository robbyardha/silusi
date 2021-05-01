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

    public function countLunas()
    {
        $query = $this->db->query('SELECT * FROM siswa WHERE status_keuangan = "Lunas"');
        return $query->num_rows();
    }
    public function countBelumLunas()
    {
        $query = $this->db->query('SELECT * FROM siswa WHERE status_keuangan = "Belum Lunas"');
        return $query->num_rows();
    }

    public function tambah()
    {
        $data = [
            'nis' => htmlspecialchars($this->input->post('nis')),
            'nomor_ujian' => htmlspecialchars($this->input->post('nomor_ujian')),
            'nama' => htmlspecialchars($this->input->post('nama')),
            'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir')),
            'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir')),
            'kelas' => htmlspecialchars($this->input->post('kelas')),
            'status_keuangan' => htmlspecialchars($this->input->post('status_keuangan')),
        ];
        $this->db->insert('siswa', $data);
    }

    public function ubah()
    {
        $id = htmlspecialchars($this->input->post('id'));
        $data = [
            'nis' => htmlspecialchars($this->input->post('nis')),
            'nomor_ujian' => htmlspecialchars($this->input->post('nomor_ujian')),
            'nama' => htmlspecialchars($this->input->post('nama')),
            'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir')),
            'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir')),
            'kelas' => htmlspecialchars($this->input->post('kelas')),
            'status_keuangan' => htmlspecialchars($this->input->post('status_keuangan')),

        ];
        $this->db->where('id', $id);
        $this->db->update('siswa', $data);
    }

    public function hapus()
    {
        $id = htmlspecialchars($this->input->post('id'));
        $this->db->where('id', $id);
        $this->db->delete('siswa');
    }

    public function import()
    {
        // $this->db->empty_table('tb_absen');
        $file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        if (isset($_FILES['upload_file']['name']) && in_array($_FILES['upload_file']['type'], $file_mimes)) {
            $arr_file = explode('.', $_FILES['upload_file']['name']);
            $extension = end($arr_file);
            if ('csv' == $extension) {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
            } else {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            }
            $spreadsheet = $reader->load($_FILES['upload_file']['tmp_name']);
            $sheetData = $spreadsheet->getActiveSheet()->toArray();
            $data = [];
            for ($i = 1; $i < count($sheetData); $i++) {
                $dataBuffer = [
                    // 'id' => $sheetData[$i][0],
                    'nis' => $sheetData[$i][1],
                    'nomor_ujian' => $sheetData[$i][2],
                    'nama' => $sheetData[$i][3],
                    'tempat_lahir' => $sheetData[$i][4],
                    'tgl_lahir' => $sheetData[$i][5],
                    'kelas' => $sheetData[$i][6],
                    'status_keuangan' => $sheetData[$i][7]
                ];
                array_push($data, $dataBuffer);
            }
            $this->db->insert_batch('siswa', $data);
            $this->session->set_flashdata('siswa', 'Diimport');
            redirect('admin/siswa');
        }
    }
}
