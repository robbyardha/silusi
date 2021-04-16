<?php

class Nilai_ujian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Siswa_model');
        $this->load->model('Nilai_ujian_model');
    }
    public function index()
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
        $this->load->view('admin/content/nilaisiswa/index', $data);
        $this->load->view('admin/layout/theme');
        $this->load->view('admin/layout/footer');
    }
}
