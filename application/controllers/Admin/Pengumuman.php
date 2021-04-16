<?php

class Pengumuman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Pengumuman_model');
        if (!$this->session->userdata('email')) {
            redirect('admin/auth');
        }
    }
    public function index()
    {
        $data['sidename'] = $this->session->userdata('nama');
        $data['current_user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Admin - Pengumuman";
        $data['page_title'] = "Pengumuman";
        $data['headertitle'] = "Data Pengumuman";
        $data['pengumuman'] = $this->Pengumuman_model->getPengumuman();
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/topbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/content/pengumuman/index', $data);
        $this->load->view('admin/layout/theme');
        $this->load->view('admin/layout/footer');
    }

    public function tambah()
    {
        $this->form_validation->set_rules(
            'judul',
            'Judul',
            'required',
            [
                'required' => 'Judul Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'pengumuman',
            'Pengumuman',
            'required',
            [
                'required' => 'Pengumuman Harus diisi'
            ]
        );

        $this->form_validation->set_rules(
            'created_by',
            'Created_by',
            'required',
            [
                'required' => 'Created_by Harus diisi'
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $data['sidename'] = $this->session->userdata('nama');
            $data['current_user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $data['title'] = "Admin - Tambah Pengumuman";
            $data['page_title'] = "Tambah Pengumuman";
            $data['headertitle'] = "Tambah Data Pengumuman";
            $data['pengumuman'] = $this->Pengumuman_model->getPengumuman();
            $this->load->view('admin/layout/header', $data);
            $this->load->view('admin/layout/topbar', $data);
            $this->load->view('admin/layout/sidebar', $data);
            $this->load->view('admin/content/pengumuman/tambah', $data);
            $this->load->view('admin/layout/theme');
            $this->load->view('admin/layout/footer');
        } else {
            $this->Pengumuman_model->tambah();
            $this->session->set_flashdata('pengumuman', 'Dibuat');
            redirect('admin/pengumuman');
        }
    }

    public function ubah($id = null)
    {
        $this->form_validation->set_rules(
            'judul',
            'Judul',
            'required',
            [
                'required' => 'Judul Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'pengumuman',
            'Pengumuman',
            'required',
            [
                'required' => 'Pengumuman Harus diisi'
            ]
        );

        $this->form_validation->set_rules(
            'created_by',
            'Created_by',
            'required',
            [
                'required' => 'Created_by Harus diisi'
            ]
        );
        if ($this->form_validation->run() == FALSE) {
            $data['sidename'] = $this->session->userdata('nama');
            $data['current_user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $data['title'] = "Admin - Ubah Pengumuman";
            $data['page_title'] = "Ubah Pengumuman";
            $data['headertitle'] = "Ubah Data Pengumuman";
            $data['pengumuman'] = $this->Pengumuman_model->getPengumumanById($id);
            $this->load->view('admin/layout/header', $data);
            $this->load->view('admin/layout/topbar', $data);
            $this->load->view('admin/layout/sidebar', $data);
            $this->load->view('admin/content/pengumuman/ubah', $data);
            $this->load->view('admin/layout/theme');
            $this->load->view('admin/layout/footer');
        } else {
            $this->Pengumuman_model->ubah();
            $this->session->set_flashdata('pengumuman', 'Diubah');
            redirect('admin/pengumuman');
        }
    }

    public function hapus($id = null)
    {
        $this->form_validation->set_rules(
            'id',
            'id',
            'required'
        );
        if ($this->form_validation->run() == FALSE) {
            $data['sidename'] = $this->session->userdata('nama');
            $data['current_user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $data['title'] = "Admin - Hapus Pengumuman";
            $data['page_title'] = "Hapus Pengumuman";
            $data['headertitle'] = "Hapus Data Pengumuman";
            $data['pengumuman'] = $this->Pengumuman_model->getPengumumanById($id);
            $this->load->view('admin/layout/header', $data);
            $this->load->view('admin/layout/topbar', $data);
            $this->load->view('admin/layout/sidebar', $data);
            $this->load->view('admin/content/pengumuman/hapus', $data);
            $this->load->view('admin/layout/theme');
            $this->load->view('admin/layout/footer');
        } else {
            $this->Pengumuman_model->hapus($id);
            $this->session->set_flashdata('pengumuman', 'Dihapus');
            redirect('admin/pengumuman');
        }
    }

    public function detail($id)
    {
        $data['sidename'] = $this->session->userdata('nama');
        $data['current_user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Admin - Detail Pengumuman";
        $data['page_title'] = "Detail Pengumuman";
        $data['headertitle'] = "Detail Data Pengumuman";
        $data['pengumuman'] = $this->Pengumuman_model->getPengumumanById($id);
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/topbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/content/pengumuman/detail', $data);
        $this->load->view('admin/layout/theme');
        $this->load->view('admin/layout/footer');
    }
}
