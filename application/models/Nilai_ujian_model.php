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

    public function import($data)
    {
        // var_dump($data['siswa']);
        // // die;
        // var_dump($data['nilai_siswa'][0]['nis']);
        // die;
        // // die;
        // var_dump($data['nilai_siswa'][0]['nis']);
        // die;

        for ($i = 1; $i < count($data['nilai_siswa']); $i++) {
            var_dump($data['nilai_siswa'][$i]);
            die;
        }

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


            for ($j = 1; $j < count($sheetData); $j++) {
                $dataBuffer = [
                    // 'id' => $sheetData[$j][0],
                    'nis' => $sheetData[$j][1],
                    'nomor_ujian' => $sheetData[$j][2],
                    'nama' => $sheetData[$j][3],
                    'ujian_sekolah' => $sheetData[$j][4],
                    'usp_bks' => $sheetData[$j][5],
                    'avg' => $sheetData[$j][6],
                ];
                array_push($data, $dataBuffer);
            }
            $this->db->insert_batch('nilai_siswa', $data);
            $this->session->set_flashdata('nilai_siswa', 'Diimport');
            redirect('admin/nilai_ujian');
        }
    }
}
