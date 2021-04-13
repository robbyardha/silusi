<?php
class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Siswa_model');
    }
    public function index()
    {
        $data['sidename'] = $this->session->userdata('nama');
        $data['current_user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Admin - Siswa";
        $data['page_title'] = "Siswa";
        $data['headertitle'] = "Data Siswa";
        $data['siswa'] = $this->Siswa_model->getSiswa();
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/topbar');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/content/siswa/index', $data);
        $this->load->view('admin/layout/theme');
        $this->load->view('admin/layout/footer');
    }
}
