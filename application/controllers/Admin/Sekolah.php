<?php

class Sekolah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Sekolah_model');
        if (!$this->session->userdata('email')) {
            redirect('admin/auth');
        }
    }
    public function index()
    {
        $this->form_validation->set_rules(
            'nama_sekolah',
            'Nama Sekolah',
            'required',
            [
                'required' => 'Nama Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'alamat_sekolah',
            'Alamat Sekolah',
            'required',
            [
                'required' => 'Nama Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'notlp_sekolah',
            'Nomor Telephone Sekolah',
            'required',
            [
                'required' => 'Nama Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'logo_sekolah',
            'Logo Sekolah',
            'required',
            [
                'required' => 'Nama Harus diisi'
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $data['sidename'] = $this->session->userdata('nama');
            $data['current_user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $data['title'] = "Admin - Sekolah";
            $data['page_title'] = "Sekolah";
            $data['headertitle'] = "Data Sekolah";
            $data['sekolah'] = $this->Sekolah_model->getSekolah();
            $this->load->view('admin/layout/header', $data);
            $this->load->view('admin/layout/topbar');
            $this->load->view('admin/layout/sidebar');
            $this->load->view('admin/content/sekolah/index', $data);
            $this->load->view('admin/layout/theme');
            $this->load->view('admin/layout/footer');
        } else {
        }
    }

    public function tambah()
    {

        $this->form_validation->set_rules(
            'nama_sekolah',
            'Nama Sekolah',
            'required',
            [
                'required' => 'Nama Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'alamat_sekolah',
            'Alamat Sekolah',
            'required',
            [
                'required' => 'Nama Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'notlp_sekolah',
            'Nomor Telephone Sekolah',
            'required',
            [
                'required' => 'Nama Harus diisi'
            ]
        );
        if ($this->form_validation->run() == false) {
            $data['sidename'] = $this->session->userdata('nama');
            $data['current_user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $data['title'] = "Admin - Tambah Sekolah";
            $data['page_title'] = "Tambah Sekolah";
            $data['headertitle'] = "Tambah Data Sekolah";
            $data['sekolah'] = $this->Sekolah_model->getSekolah();
            $this->load->view('admin/layout/header', $data);
            $this->load->view('admin/layout/topbar');
            $this->load->view('admin/layout/sidebar');
            $this->load->view('admin/content/sekolah/tambah', $data);
            $this->load->view('admin/layout/theme');
            $this->load->view('admin/layout/footer');
        } else {
            $this->Sekolah_model->tambah();
            $this->session->set_flashdata('sekolah', 'Ditambah');
            redirect('admin/sekolah');
        }
    }

    public function ubah($id = '$id')
    {
        $this->form_validation->set_rules(
            'nama_sekolah',
            'Nama Sekolah',
            'required',
            [
                'required' => 'Nama Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'alamat_sekolah',
            'Alamat Sekolah',
            'required',
            [
                'required' => 'Nama Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'notlp_sekolah',
            'Nomor Telephone Sekolah',
            'required',
            [
                'required' => 'Nama Harus diisi'
            ]
        );
        if ($this->form_validation->run() == FALSE) {
            $data['sidename'] = $this->session->userdata('nama');
            $data['current_user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $data['title'] = "Admin - Ubah Sekolah";
            $data['page_title'] = "Ubah Sekolah";
            $data['headertitle'] = "Ubah Data Sekolah";
            $data['sekolah'] = $this->Sekolah_model->getSekolahById($id);
            $this->load->view('admin/layout/header', $data);
            $this->load->view('admin/layout/topbar');
            $this->load->view('admin/layout/sidebar');
            $this->load->view('admin/content/sekolah/ubah', $data);
            $this->load->view('admin/layout/theme');
            $this->load->view('admin/layout/footer');
        } else {
            $this->Sekolah_model->ubah();
            $this->session->set_flashdata('sekolah', 'Diubah');
            redirect('admin/sekolah');
        }
    }

    public function hapus($id = '$id')
    {
        $this->form_validation->set_rules(
            'id',
            'Id',
            'required'
        );
        if ($this->form_validation->run() == FALSE) {
            $data['sidename'] = $this->session->userdata('nama');
            $data['current_user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $data['title'] = "Admin - Hapus Sekolah";
            $data['page_title'] = "Hapus Sekolah";
            $data['headertitle'] = "Hapus Data Sekolah";
            $data['sekolah'] = $this->Sekolah_model->getSekolahById($id);
            $this->load->view('admin/layout/header', $data);
            $this->load->view('admin/layout/topbar');
            $this->load->view('admin/layout/sidebar');
            $this->load->view('admin/content/sekolah/hapus', $data);
            $this->load->view('admin/layout/theme');
            $this->load->view('admin/layout/footer');
        } else {
            $this->Sekolah_model->hapus();
            $this->session->set_flashdata('sekolah', 'Dihapus');
            redirect('admin/sekolah');
        }
    }
}
