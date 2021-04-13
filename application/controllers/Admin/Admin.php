<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('admin/auth');
        }
    }
    public function index()
    {
        $data['sidename'] = $this->session->userdata('nama');
        $data['current_user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Admin - Dashboard";
        $data['page_title'] = "Dashboard";
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/topbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/content/admin');
        $this->load->view('admin/layout/theme');
        $this->load->view('admin/layout/footer');
    }
}
