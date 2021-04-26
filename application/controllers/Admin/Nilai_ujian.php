<?php

class Nilai_ujian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Siswa_model');
        $this->load->model('Nilai_ujian_model');
        $this->load->model('Mapel_model');
    }
    public function index()
    {
        $data['sidename'] = $this->session->userdata('nama');
        $data['current_user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Admin - Nilai Siswa";
        $data['page_title'] = "Nilai Siswa";
        $data['headertitle'] = "Data Nilai Siswa";
        $data['siswa'] = $this->Siswa_model->getSiswa();
        // $data['nilai_siswa'] = $this->Nilai_ujian_model->getNilai();
        $data['nilai_siswa'] = $this->Nilai_ujian_model->joinNilaiSiswaMapel();
        $data['mapel'] = $this->Mapel_model->getMapel();
        // var_dump($this->db->last_query());
        // die;
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/topbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/content/nilaisiswa/index', $data);
        $this->load->view('admin/layout/theme');
        $this->load->view('admin/layout/footer');
    }

    public function tambah()
    {
        $this->form_validation->set_rules(
            'nama_siswa',
            'Nama Siswa',
            'required'
        );
        $this->form_validation->set_rules(
            'mapel',
            'Mapel Siswa',
            'required'
        );
        $this->form_validation->set_rules(
            'nilai_rapot',
            'Nilai Rapot',
            'required'
        );
        $this->form_validation->set_rules(
            'nusp',
            'NUSP',
            'required'
        );
        $this->form_validation->set_rules(
            'nsp',
            'NSP',
            'required'
        );
        $this->form_validation->set_rules(
            'avg',
            'Average',
            'required'
        );
        $this->form_validation->set_rules(
            'status_lulus',
            'Status Lulus',
            'required'
        );
        $this->form_validation->set_rules(
            'status_pembayaran',
            'Status Pembayaran',
            'required'
        );

        if ($this->form_validation->run() == FALSE) {
            $data['sidename'] = $this->session->userdata('nama');
            $data['current_user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $data['title'] = "Admin - Nilai Siswa";
            $data['page_title'] = "Nilai Siswa";
            $data['headertitle'] = "Data Nilai Siswa";
            $data['siswa'] = $this->Siswa_model->getSiswa();
            $data['mapel'] = $this->Mapel_model->getMapel();
            // $data['nilai_siswa'] = $this->Nilai_ujian_model->getNilai();
            $data['nilai_siswa'] = $this->Nilai_ujian_model->joinNilaiSiswaMapel();
            // var_dump($this->db->last_query());
            // die;
            $this->load->view('admin/layout/header', $data);
            $this->load->view('admin/layout/topbar', $data);
            $this->load->view('admin/layout/sidebar', $data);
            $this->load->view('admin/content/nilaisiswa/tambah', $data);
            $this->load->view('admin/layout/theme');
            $this->load->view('admin/layout/footer');
        } else {
            $this->Nilai_ujian_model->tambah();
            $this->session->set_flashdata('nilai_siswa', 'Ditambah');
            redirect('admin/nilai_ujian');
        }
    }

    public function ubah($id = null)
    {
        $this->form_validation->set_rules(
            'nama_siswa',
            'Nama Siswa',
            'required'
        );
        $this->form_validation->set_rules(
            'mapel',
            'Mapel Siswa',
            'required'
        );
        $this->form_validation->set_rules(
            'nilai_rapot',
            'Nilai Rapot',
            'required'
        );
        $this->form_validation->set_rules(
            'nusp',
            'NUSP',
            'required'
        );
        $this->form_validation->set_rules(
            'nsp',
            'NSP',
            'required'
        );
        $this->form_validation->set_rules(
            'avg',
            'Average',
            'required'
        );
        $this->form_validation->set_rules(
            'status_lulus',
            'Status Lulus',
            'required'
        );
        $this->form_validation->set_rules(
            'status_pembayaran',
            'Status Pembayaran',
            'required'
        );

        if ($this->form_validation->run() == FALSE) {
            $data['sidename'] = $this->session->userdata('nama');
            $data['current_user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $data['title'] = "Admin - Nilai Siswa";
            $data['page_title'] = "Nilai Siswa";
            $data['headertitle'] = "Data Nilai Siswa";
            $data['siswa'] = $this->Siswa_model->getSiswa();
            $data['mapel'] = $this->Mapel_model->getMapel();
            // $data['nilai_siswa'] = $this->Nilai_ujian_model->getNilai();
            $data['nilai_siswa'] = $this->Nilai_ujian_model->getNilaiById($id);
            // $data['nilai_siswa'] = $this->Nilai_ujian_model->joinNilaiSiswaMapel();
            // var_dump($this->db->last_query());
            // die;
            $this->load->view('admin/layout/header', $data);
            $this->load->view('admin/layout/topbar', $data);
            $this->load->view('admin/layout/sidebar', $data);
            $this->load->view('admin/content/nilaisiswa/ubah', $data);
            $this->load->view('admin/layout/theme');
            $this->load->view('admin/layout/footer');
        } else {
            $this->Nilai_ujian_model->ubah();
            $this->session->set_flashdata('nilai_siswa', 'Diubah');
            redirect('admin/nilai_ujian');
        }
    }

    public function hapus($id = null)
    {
        $this->form_validation->set_rules(
            'id',
            'ID',
            'required'
        );

        if ($this->form_validation->run() == FALSE) {
            $data['sidename'] = $this->session->userdata('nama');
            $data['current_user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $data['title'] = "Admin - Nilai Siswa";
            $data['page_title'] = "Nilai Siswa";
            $data['headertitle'] = "Data Nilai Siswa";
            $data['siswa'] = $this->Siswa_model->getSiswa();
            $data['mapel'] = $this->Mapel_model->getMapel();
            // $data['nilai_siswa'] = $this->Nilai_ujian_model->getNilai();
            // $data['nilai_siswa'] = $this->Nilai_ujian_model->getNilaiById($id);
            // $data['nilai_siswa'] = $this->Nilai_ujian_model->joinNilaiSiswaMapel($id);
            $data['nilai_siswa'] = $this->Nilai_ujian_model->joinNilaiSiswaMapelGetWhere($id);
            // $data['nilai_siswa'] = $this->Nilai_ujian_model->joinNilaiSiswaMapel();
            // var_dump($this->db->last_query());
            // die;
            $this->load->view('admin/layout/header', $data);
            $this->load->view('admin/layout/topbar', $data);
            $this->load->view('admin/layout/sidebar', $data);
            $this->load->view('admin/content/nilaisiswa/hapus', $data);
            $this->load->view('admin/layout/theme');
            $this->load->view('admin/layout/footer');
        } else {
            $this->Nilai_ujian_model->hapus();
            $this->session->set_flashdata('nilai_siswa', 'Dihapus');
            redirect('admin/nilai_ujian');
        }
    }

    public function downloadFormat()
    {
        $this->load->helper('download');
        force_download('upload/format_nilai.xlsx', NULL);
    }

    public function import()
    {
        $data['sidename'] = $this->session->userdata('nama');
        $data['current_user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Admin - Nilai Siswa";
        $data['page_title'] = "Nilai Siswa";
        $data['headertitle'] = "Data Nilai Siswa";
        $data['siswa'] = $this->Siswa_model->getSiswa();
        $data['nilai_siswa'] = $this->Nilai_ujian_model->joinSiswaAndNilai();
        // $data['nilai_siswa'] = $this->Nilai_ujian_model->joinSiswaAndNilai();
        // var_dump($this->db->last_query());
        // die;
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/topbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/content/nilaisiswa/import', $data);
        $this->load->view('admin/layout/theme');
        $this->load->view('admin/layout/footer');

        $this->load->helper('form');
        $this->Nilai_ujian_model->import();
    }

    public function import_verify()
    {
        $data['sidename'] = $this->session->userdata('nama');
        $data['current_user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Admin - Nilai Siswa";
        $data['page_title'] = "Nilai Siswa";
        $data['headertitle'] = "Data Nilai Siswa";
        $data['siswa'] = $this->Siswa_model->getSiswa();
        $data['nilai_siswa'] = $this->Nilai_ujian_model->joinSiswaAndNilai();
        // var_dump($this->db->last_query());
        // die;
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/topbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/content/nilaisiswa/import', $data);
        $this->load->view('admin/layout/theme');
        $this->load->view('admin/layout/footer');

        $this->load->helper('form');
        $this->Nilai_ujian_model->import_verify($data);
    }
}
