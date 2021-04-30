<?php
class Nilai_ujian_model extends CI_Model
{

    public function getNilai()
    {
        return $this->db->get('nilai_siswa')->result_array();
    }

    public function getNilaiById($id = null)
    {
        if ($id == null) {
            return $this->db->get('nilai_siswa')->result_array();
        } else {
            return $this->db->get_where('nilai_siswa', ['id' => $id])->row_array();
        }
    }

    public function count()
    {
        $query = $this->db->query('SELECT * FROM nilai_siswa');
        return $query->num_rows();
    }

    public function countLulus()
    {
        $query = $this->db->query('SELECT * FROM nilai_siswa WHERE status_lulus = "Lulus"');
        return $query->num_rows();
    }
    public function countTidakLulus()
    {
        $query = $this->db->query('SELECT * FROM nilai_siswa WHERE status_lulus = "Tidak Lulus"');
        return $query->num_rows();
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

    public function joinNilaiSiswaMapel($id = null)
    {
        $this->db->select('nilai_siswa.*, siswa.id AS siswa_id, siswa.nis, siswa.nomor_ujian, siswa.nama, siswa.tempat_lahir, siswa.tgl_lahir, siswa.status_keuangan,mapel.id AS mapel_id, mapel.nama_mapel, mapel.kelompok_mapel');
        $this->db->from('nilai_siswa');
        $this->db->join('siswa', 'siswa.id=nilai_siswa.siswa_id');
        $this->db->join('mapel', 'mapel.id=nilai_siswa.mapel_id');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function joinNilaiSiswaMapelGetWhere($id = null)
    {
        $this->db->select('nilai_siswa.*, siswa.id AS siswa_id, siswa.nis, siswa.nomor_ujian, siswa.nama, siswa.tempat_lahir, siswa.tgl_lahir,siswa.status_keuangan, mapel.id AS mapel_id, mapel.nama_mapel, mapel.kelompok_mapel');
        $this->db->from('nilai_siswa');
        $this->db->join('siswa', 'siswa.id=nilai_siswa.siswa_id');
        $this->db->join('mapel', 'mapel.id=nilai_siswa.mapel_id');
        $this->db->where('nilai_siswa.id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function import()
    {
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
                    'siswa_id' => $sheetData[$i][0],
                    'nis_siswa' => $sheetData[$i][1],
                    'nomor_ujian_siswa' => $sheetData[$i][2],
                    'nama_siswa' => $sheetData[$i][3],
                    'ujian_sekolah' => $sheetData[$i][4],
                    'usp_bks' => $sheetData[$i][5],
                    'avg' => $sheetData[$i][6],
                    'status' => $sheetData[$i][7],
                ];
                array_push($data, $dataBuffer);
            }
            $this->db->insert_batch('nilai_siswa', $data);
            $this->session->set_flashdata('nilai_siswa', 'Diimport');
            redirect('admin/nilai_ujian');
        }
    }

    public function import_verify($data = null)
    {
        // var_dump($data['siswa']);
        // var_dump($data['nilai_siswa']);
        // die;

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
                    'siswa_id' => $sheetData[$i][1],
                    'mapel_id' => $sheetData[$i][2],
                    'nilai_rapot' => $sheetData[$i][3],
                    'nusp' => $sheetData[$i][4],
                    'nsp' => $sheetData[$i][5],
                    'avg' => $sheetData[$i][6],
                    'status_lulus' => $sheetData[$i][7],
                ];
                array_push($data, $dataBuffer);
            }
            $this->db->insert_batch('nilai_siswa', $data);
            $this->session->set_flashdata('nilai_siswa', 'Diimport');
            redirect('admin/nilai_ujian');
        }
    }

    // public function cari($keyword)
    // {

    //     $this->db->like('nis_siswa', $keyword);
    //     return $this->db->get('nilai_siswa')->row_array();
    // }
    public function cari($keyword)
    {
        $this->db->select('nilai_siswa.*, siswa.id AS siswa_id, siswa.nis, siswa.nomor_ujian, siswa.nama, siswa.tempat_lahir, siswa.tgl_lahir,siswa.status_keuangan, mapel.id AS mapel_id, mapel.nama_mapel, mapel.kelompok_mapel');
        $this->db->from('nilai_siswa');
        $this->db->join('siswa', 'siswa.id=nilai_siswa.siswa_id');
        $this->db->join('mapel', 'mapel.id=nilai_siswa.mapel_id');
        $this->db->like('nis', $keyword);
        return $this->db->get()->row_array();
    }

    public function nilai_mapel($keyword)
    {
        $this->db->select('nilai_siswa.*, siswa.id AS siswa_id, siswa.nis, siswa.nomor_ujian, siswa.nama, siswa.tempat_lahir, siswa.tgl_lahir, siswa.kelas, siswa.status_keuangan,mapel.id AS mapel_id, mapel.nama_mapel, mapel.kelompok_mapel');
        $this->db->from('nilai_siswa');
        $this->db->join('siswa', 'siswa.id=nilai_siswa.siswa_id');
        $this->db->join('mapel', 'mapel.id=nilai_siswa.mapel_id');
        $this->db->like('nis', $keyword);
        return $this->db->get()->result_array();
        // var_dump($this->db->last_query());
        // die;
    }

    public function nilai_sum($keyword)
    {
        $this->db->select('nilai_siswa.*, siswa.id AS siswa_id, siswa.nis, siswa.nomor_ujian, siswa.nama, siswa.tempat_lahir, siswa.tgl_lahir, siswa.kelas, siswa.status_keuangan,mapel.id AS mapel_id, mapel.nama_mapel, mapel.kelompok_mapel, SUM(nsp)');
        $this->db->from('nilai_siswa');
        $this->db->join('siswa', 'siswa.id=nilai_siswa.siswa_id');
        $this->db->join('mapel', 'mapel.id=nilai_siswa.mapel_id');
        $this->db->like('nis', $keyword);
        return $this->db->get()->result_array();
        // var_dump($this->db->last_query());
        // die;
    }
    public function nilai_sum_nusp($keyword)
    {
        $this->db->select('nilai_siswa.*, siswa.id AS siswa_id, siswa.nis, siswa.nomor_ujian, siswa.nama, siswa.tempat_lahir, siswa.tgl_lahir, siswa.kelas, siswa.status_keuangan,mapel.id AS mapel_id, mapel.nama_mapel, mapel.kelompok_mapel, SUM(nusp)');
        $this->db->from('nilai_siswa');
        $this->db->join('siswa', 'siswa.id=nilai_siswa.siswa_id');
        $this->db->join('mapel', 'mapel.id=nilai_siswa.mapel_id');
        $this->db->like('nis', $keyword);
        return $this->db->get()->result_array();
        // var_dump($this->db->last_query());
        // die;
    }

    public function getNumRowsMapel($keyword)
    {
        $this->db->select('nilai_siswa.*, siswa.id AS siswa_id, siswa.nis, siswa.nomor_ujian, siswa.nama, siswa.tempat_lahir, siswa.tgl_lahir, siswa.kelas, siswa.status_keuangan,mapel.id AS mapel_id, mapel.nama_mapel, mapel.kelompok_mapel');
        $this->db->from('nilai_siswa');
        $this->db->join('siswa', 'siswa.id=nilai_siswa.siswa_id');
        $this->db->join('mapel', 'mapel.id=nilai_siswa.mapel_id');
        $this->db->like('nis', $keyword);
        return $this->db->get()->num_rows();
        var_dump($this->db->last_query());
        die;
    }

    public function tambah()
    {
        $data = [
            'siswa_id' => htmlspecialchars($this->input->post('nama_siswa')),
            'mapel_id' => htmlspecialchars($this->input->post('mapel')),
            'nilai_rapot' => htmlspecialchars($this->input->post('nilai_rapot')),
            'nusp' => htmlspecialchars($this->input->post('nusp')),
            'nsp' => htmlspecialchars($this->input->post('nsp')),
            'avg' => htmlspecialchars($this->input->post('avg')),
            'status_lulus' => htmlspecialchars($this->input->post('status_lulus')),

        ];
        $this->db->insert('nilai_siswa', $data);
    }

    public function ubah()
    {
        $id = htmlspecialchars($this->input->post('id'));
        $data = [
            'siswa_id' => htmlspecialchars($this->input->post('nama_siswa')),
            'mapel_id' => htmlspecialchars($this->input->post('mapel')),
            'nilai_rapot' => htmlspecialchars($this->input->post('nilai_rapot')),
            'nusp' => htmlspecialchars($this->input->post('nusp')),
            'nsp' => htmlspecialchars($this->input->post('nsp')),
            'avg' => htmlspecialchars($this->input->post('avg')),
            'status_lulus' => htmlspecialchars($this->input->post('status_lulus')),
        ];
        $this->db->where('id', $id);
        $this->db->update('nilai_siswa', $data);
    }

    public function hapus()
    {
        $id = htmlspecialchars($this->input->post('id'));
        $this->db->where('id', $id);
        $this->db->delete('nilai_siswa');
        // var_dump($this->db->last_query());
        // die;
    }
}
