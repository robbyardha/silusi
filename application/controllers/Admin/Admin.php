<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('admin/auth');
        }
        $this->load->model('Nilai_ujian_model');
    }
    public function index()
    {
        $data['sidename'] = $this->session->userdata('nama');
        $data['current_user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Admin - Dashboard";
        $data['page_title'] = "Dashboard";
        $data['nilai'] = $this->Nilai_ujian_model->getNilai();
        $data['nilai_count'] = $this->Nilai_ujian_model->count();
        $data['nilai_countlulus'] = $this->Nilai_ujian_model->countLulus();
        $data['nilai_counttidaklulus'] = $this->Nilai_ujian_model->countTidakLulus();
        // var_dump($data['nilai_count']);
        // die;
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/topbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/content/admin', $data);
        $this->load->view('admin/layout/theme');
        $this->load->view('admin/layout/footer', $data);
    }
}
