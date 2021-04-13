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
        $this->load->view('admin/layout/topbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/content/siswa/index', $data);
        $this->load->view('admin/layout/theme');
        $this->load->view('admin/layout/footer');
    }

    public function tambah()
    {
        $this->form_validation->set_rules(
            'nis',
            'NIS',
            'required|numeric',
            [
                'required' => 'NIS harus diisi',
                'numeric' => 'Harus berupa angka!'
            ]
        );
        $this->form_validation->set_rules(
            'nomor_ujian',
            'Nomor Ujian',
            'required',
            [
                'required' => 'Nomor Ujian harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required',
            [
                'required' => 'Nama harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'tempat_lahir',
            'Tempat Lahir',
            'required',
            [
                'required' => 'Tempat Lahir harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'tgl_lahir',
            'Tanggal Lahir',
            'required',
            [
                'required' => 'Tanggal Lahir harus diisi'
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $data['sidename'] = $this->session->userdata('nama');
            $data['current_user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $data['title'] = "Admin - Tambah Siswa";
            $data['page_title'] = "Tambah Siswa";
            $data['headertitle'] = "Tambah Data Siswa";
            $data['siswa'] = $this->Siswa_model->getSiswa();
            $this->load->view('admin/layout/header', $data);
            $this->load->view('admin/layout/topbar', $data);
            $this->load->view('admin/layout/sidebar', $data);
            $this->load->view('admin/content/siswa/tambah', $data);
            $this->load->view('admin/layout/theme');
            $this->load->view('admin/layout/footer');
        } else {
            $this->Siswa_model->tambah();
            $this->session->set_flashdata('siswa', 'Ditambah');
            redirect('admin/siswa');
        }
    }

    public function ubah($id)
    {
        $this->form_validation->set_rules(
            'nis',
            'NIS',
            'required|numeric',
            [
                'required' => 'NIS harus diisi',
                'numeric' => 'Harus berupa angka!'
            ]
        );
        $this->form_validation->set_rules(
            'nomor_ujian',
            'Nomor Ujian',
            'required',
            [
                'required' => 'Nomor Ujian harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required',
            [
                'required' => 'Nama harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'tempat_lahir',
            'Tempat Lahir',
            'required',
            [
                'required' => 'Tempat Lahir harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'tgl_lahir',
            'Tanggal Lahir',
            'required',
            [
                'required' => 'Tanggal Lahir harus diisi'
            ]
        );
        if ($this->form_validation->run() == FALSE) {
            $data['sidename'] = $this->session->userdata('nama');
            $data['current_user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $data['title'] = "Admin - Ubah Siswa";
            $data['page_title'] = "Ubah Siswa";
            $data['headertitle'] = "Ubah Data Siswa";
            $data['siswa'] = $this->Siswa_model->getSiswaById($id);
            $this->load->view('admin/layout/header', $data);
            $this->load->view('admin/layout/topbar', $data);
            $this->load->view('admin/layout/sidebar', $data);
            $this->load->view('admin/content/siswa/ubah', $data);
            $this->load->view('admin/layout/theme');
            $this->load->view('admin/layout/footer');
        } else {
            $this->Siswa_model->ubah();
            $this->session->set_flashdata('siswa', 'Diubah');
            redirect('admin/siswa');
        }
    }

    public function hapus($id)
    {
        $this->form_validation->set_rules(
            'id',
            'Id',
            'required',
        );
        if ($this->form_validation->run() == FALSE) {
            $data['sidename'] = $this->session->userdata('nama');
            $data['current_user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $data['title'] = "Admin - Hapus Siswa";
            $data['page_title'] = "Hapus Siswa";
            $data['headertitle'] = "Hapus Data Siswa";
            $data['siswa'] = $this->Siswa_model->getSiswaById($id);
            $this->load->view('admin/layout/header', $data);
            $this->load->view('admin/layout/topbar', $data);
            $this->load->view('admin/layout/sidebar', $data);
            $this->load->view('admin/content/siswa/hapus', $data);
            $this->load->view('admin/layout/theme');
            $this->load->view('admin/layout/footer');
        } else {
            $this->Siswa_model->hapus();
            $this->session->set_flashdata('siswa', 'Dihapus');
            redirect('admin/siswa');
        }
    }

    public function import($id = null)
    {
        $data['sidename'] = $this->session->userdata('nama');
        $data['current_user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Admin - Import Siswa";
        $data['page_title'] = "Import Siswa";
        $data['headertitle'] = "Import Data Siswa";
        $data['siswa'] = $this->Siswa_model->getSiswaById($id);
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/topbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/content/siswa/import', $data);
        $this->load->view('admin/layout/theme');
        $this->load->view('admin/layout/footer');

        $this->load->helper('form');
        $this->Siswa_model->import();
    }

    public function downloadFormat()
    {
        $this->load->helper('download');
        force_download('upload/format_siswa.xlsx', NULL);
    }
}
