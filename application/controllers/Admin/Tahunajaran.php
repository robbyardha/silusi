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

    public function tambah()
    {
        $this->form_validation->set_rules(
            'tahunajaran',
            'Tahun Ajaran',
            'required|is_unique[tahun_ajaran.tahun_ajaran]',
            [
                'required' => 'Tahun Ajaran harus diisi',
                'is_unique' => 'Tahun Ajaran Sudah terecord'
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $data['sidename'] = $this->session->userdata('nama');
            $data['current_user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $data['title'] = "Admin - Tambah Tahun Ajaran";
            $data['page_title'] = "Tambah Tahun Ajaran";
            $data['headertitle'] = "Tambah Data Tahun Ajaran";
            $data['tahunajaran'] = $this->Tahunajaran_model->getTahunajaran();
            $this->load->view('admin/layout/header', $data);
            $this->load->view('admin/layout/topbar', $data);
            $this->load->view('admin/layout/sidebar', $data);
            $this->load->view('admin/content/tahunajaran/tambah', $data);
            $this->load->view('admin/layout/theme');
            $this->load->view('admin/layout/footer');
        } else {
            $this->Tahunajaran_model->tambah();
            $this->session->set_flashdata('tahunajaran', 'Ditambah');
            redirect('admin/tahunajaran');
        }
    }

    public function ubah($id = null)
    {
        $this->form_validation->set_rules(
            'tahunajaran',
            'Tahun Ajaran',
            'required|is_unique[tahun_ajaran.tahun_ajaran]',
            [
                'required' => 'Tahun Ajaran harus diisi',
                'is_unique' => 'Tahun Ajaran Sudah terecord'
            ]
        );
        if ($this->form_validation->run() == FALSE) {
            $data['sidename'] = $this->session->userdata('nama');
            $data['current_user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $data['title'] = "Admin - Ubah Tahun Ajaran";
            $data['page_title'] = "Ubah Tahun Ajaran";
            $data['headertitle'] = "Ubah Data Tahun Ajaran";
            $data['tahunajaran'] = $this->Tahunajaran_model->getTahunajaranById($id);
            $this->load->view('admin/layout/header', $data);
            $this->load->view('admin/layout/topbar', $data);
            $this->load->view('admin/layout/sidebar', $data);
            $this->load->view('admin/content/tahunajaran/ubah', $data);
            $this->load->view('admin/layout/theme');
            $this->load->view('admin/layout/footer');
        } else {
            $this->Tahunajaran_model->ubah();
            $this->session->set_flashdata('tahunajaran', 'Diubah');
            redirect('admin/tahunajaran');
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
            $data['title'] = "Admin - Hapus Tahun Ajaran";
            $data['page_title'] = "Hapus Tahun Ajaran";
            $data['headertitle'] = "Hapus Data Tahun Ajaran";
            $data['tahunajaran'] = $this->Tahunajaran_model->getTahunajaranById($id);
            $this->load->view('admin/layout/header', $data);
            $this->load->view('admin/layout/topbar', $data);
            $this->load->view('admin/layout/sidebar', $data);
            $this->load->view('admin/content/tahunajaran/hapus', $data);
            $this->load->view('admin/layout/theme');
            $this->load->view('admin/layout/footer');
        } else {
            $this->Tahunajaran_model->hapus();
            $this->session->set_flashdata('tahunajaran', 'Dihapus');
            redirect('admin/tahunajaran');
        }
    }

    public function aktifkan($id = null)
    {
        $this->form_validation->set_rules(
            'id',
            'id',
            'required'
        );
        if ($this->form_validation->run() == FALSE) {
            $data['sidename'] = $this->session->userdata('nama');
            $data['current_user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $data['title'] = "Admin - Hapus Tahun Ajaran";
            $data['page_title'] = "Hapus Tahun Ajaran";
            $data['headertitle'] = "Hapus Data Tahun Ajaran";
            $data['tahunajaran'] = $this->Tahunajaran_model->getTahunajaranById($id);
            $this->load->view('admin/layout/header', $data);
            $this->load->view('admin/layout/topbar', $data);
            $this->load->view('admin/layout/sidebar', $data);
            $this->load->view('admin/content/tahunajaran/aktifkan', $data);
            $this->load->view('admin/layout/theme');
            $this->load->view('admin/layout/footer');
        } else {
            $this->Tahunajaran_model->aktifkan();
            $this->session->set_flashdata('tahunajaran', 'Diaktifkan');
            redirect('admin/tahunajaran');
        }
    }
}
