<?php

class Jadwal_pengumuman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Jadwal_pengumuman_model');
        if (!$this->session->userdata('email')) {
            redirect('admin/auth');
        }
    }
    public function index()
    {
        $data['sidename'] = $this->session->userdata('nama');
        $data['current_user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Admin - Atur Jadwal Pengumuman";
        $data['page_title'] = "Atur Jadwal Pengumuman";
        $data['headertitle'] = "Data Atur Jadwal Pengumuman";
        $data['jadwal'] = $this->Jadwal_pengumuman_model->getAturJadwal();
        // $data['nilai_siswa'] = $this->Nilai_ujian_model->joinSiswaAndNilai();
        // var_dump($this->db->last_query());
        // die;
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/topbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/content/aturjadwal/index', $data);
        $this->load->view('admin/layout/theme');
        $this->load->view('admin/layout/footer');
    }

    public function tambah()
    {
        $this->form_validation->set_rules(
            'nama_jadwal',
            'Nama Jadwal',
            'required'
        );
        $this->form_validation->set_rules(
            'tanggal_awal',
            'Tanggal Awal',
            'required'
        );
        $this->form_validation->set_rules(
            'waktu_awal',
            'Waktu Awal',
            'required'
        );
        $this->form_validation->set_rules(
            'tanggal_akhir',
            'Tanggal akhir',
            'required'
        );
        $this->form_validation->set_rules(
            'waktu_akhir',
            'Waktu akhir',
            'required'
        );
        if ($this->form_validation->run() == FALSE) {
            $data['sidename'] = $this->session->userdata('nama');
            $data['current_user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $data['title'] = "Admin - Tambah Jadwal Pengumuman";
            $data['page_title'] = "Tambah Jadwal Pengumuman";
            $data['headertitle'] = "Data Tambah Jadwal Pengumuman";
            $data['jadwal'] = $this->Jadwal_pengumuman_model->getAturJadwal();
            // $data['nilai_siswa'] = $this->Nilai_ujian_model->joinSiswaAndNilai();
            // var_dump($this->db->last_query());
            // die;
            $this->load->view('admin/layout/header', $data);
            $this->load->view('admin/layout/topbar', $data);
            $this->load->view('admin/layout/sidebar', $data);
            $this->load->view('admin/content/aturjadwal/tambah', $data);
            $this->load->view('admin/layout/theme');
            $this->load->view('admin/layout/footer');
        } else {
            $this->Jadwal_pengumuman_model->tambah();
            $this->session->set_flashdata('jadwalpengumuman', 'Ditambah');
            redirect('admin/jadwal_pengumuman');
        }
    }

    public function ubah($id)
    {
        $this->form_validation->set_rules(
            'nama_jadwal',
            'Nama Jadwal',
            'required'
        );
        $this->form_validation->set_rules(
            'tanggal_awal',
            'Tanggal Awal',
            'required'
        );
        $this->form_validation->set_rules(
            'waktu_awal',
            'Waktu Awal',
            'required'
        );
        $this->form_validation->set_rules(
            'tanggal_akhir',
            'Tanggal akhir',
            'required'
        );
        $this->form_validation->set_rules(
            'waktu_akhir',
            'Waktu akhir',
            'required'
        );
        if ($this->form_validation->run() == FALSE) {
            $data['sidename'] = $this->session->userdata('nama');
            $data['current_user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $data['title'] = "Admin - Tambah Jadwal Pengumuman";
            $data['page_title'] = "Tambah Jadwal Pengumuman";
            $data['headertitle'] = "Data Tambah Jadwal Pengumuman";
            $data['jadwal'] = $this->Jadwal_pengumuman_model->getAturJadwalById($id);
            // $data['nilai_siswa'] = $this->Nilai_ujian_model->joinSiswaAndNilai();
            // var_dump($this->db->last_query());
            // die;
            $this->load->view('admin/layout/header', $data);
            $this->load->view('admin/layout/topbar', $data);
            $this->load->view('admin/layout/sidebar', $data);
            $this->load->view('admin/content/aturjadwal/ubah', $data);
            $this->load->view('admin/layout/theme');
            $this->load->view('admin/layout/footer');
        } else {
            $this->Jadwal_pengumuman_model->ubah();
            $this->session->set_flashdata('jadwalpengumuman', 'Diubah');
            redirect('admin/jadwal_pengumuman');
        }
    }
    public function hapus($id)
    {
        $this->form_validation->set_rules(
            'id',
            'Id',
            'required'
        );
        if ($this->form_validation->run() == FALSE) {
            $data['sidename'] = $this->session->userdata('nama');
            $data['current_user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $data['title'] = "Admin - Tambah Jadwal Pengumuman";
            $data['page_title'] = "Tambah Jadwal Pengumuman";
            $data['headertitle'] = "Data Tambah Jadwal Pengumuman";
            $data['jadwal'] = $this->Jadwal_pengumuman_model->getAturJadwalById($id);
            // $data['nilai_siswa'] = $this->Nilai_ujian_model->joinSiswaAndNilai();
            // var_dump($this->db->last_query());
            // die;
            $this->load->view('admin/layout/header', $data);
            $this->load->view('admin/layout/topbar', $data);
            $this->load->view('admin/layout/sidebar', $data);
            $this->load->view('admin/content/aturjadwal/hapus', $data);
            $this->load->view('admin/layout/theme');
            $this->load->view('admin/layout/footer');
        } else {
            $this->Jadwal_pengumuman_model->hapus();
            $this->session->set_flashdata('jadwalpengumuman', 'Dihapus');
            redirect('admin/jadwal_pengumuman');
        }
    }
}
