<?php

class Tahunajaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Tahunajaran_model');
        if (!$this->session->userdata('email')) {
            redirect('admin/auth');
        }
    }
    public function index()
    {
        $data['sidename'] = $this->session->userdata('nama');
        $data['current_user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Admin - Tahun Ajaran";
        $data['page_title'] = "Tahun Ajaran";
        $data['headertitle'] = "Data Tahun Ajaran";
        $data['tahunajaran'] = $this->Tahunajaran_model->getTahunajaran();
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/topbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/content/tahunajaran/index', $data);
        $this->load->view('admin/layout/theme');
        $this->load->view('admin/layout/footer');
    }
}
