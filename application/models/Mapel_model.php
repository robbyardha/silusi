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

    public function importExcel()
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
                    'nama_mapel' => $sheetData[$i][1],
                ];
                array_push($data, $dataBuffer);
            }
            $this->db->insert_batch('mapel', $data);
            $this->session->set_flashdata('mapel', 'Diimport');
            redirect('admin/mapel');
        }
    }
}
