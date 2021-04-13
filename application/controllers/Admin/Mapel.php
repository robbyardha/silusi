<?php
class Mapel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Mapel_model');
        if (!$this->session->userdata('email')) {
            redirect('admin/auth');
        }
    }
    public function index()
    {
        $data['sidename'] = $this->session->userdata('nama');
        $data['current_user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Admin - Mata Pelajaran";
        $data['page_title'] = "Mata Pelajaran";
        $data['headertitle'] = "Data Mata Pelajaran";
        $data['mapel'] = $this->Mapel_model->getMapel();
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/topbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/content/mapel/index', $data);
        $this->load->view('admin/layout/theme');
        $this->load->view('admin/layout/footer');
    }

    public function tambah()
    {
        $this->form_validation->set_rules(
            'nama_mapel',
            'Mata Pelajaran',
            'required',
            [
                'required' => 'Mata Pelajaran Harus diisi'
            ]
        );
        if ($this->form_validation->run() == FALSE) {
            $data['sidename'] = $this->session->userdata('nama');
            $data['current_user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $data['title'] = "Admin - Tambah Mata Pelajaran";
            $data['page_title'] = "Tambah Mata Pelajaran";
            $data['headertitle'] = "Tambah Data Mata Pelajaran";
            $data['mapel'] = $this->Mapel_model->getMapel();
            $this->load->view('admin/layout/header', $data);
            $this->load->view('admin/layout/topbar', $data);
            $this->load->view('admin/layout/sidebar', $data);
            $this->load->view('admin/content/mapel/tambah', $data);
            $this->load->view('admin/layout/theme');
            $this->load->view('admin/layout/footer');
        } else {
            $this->Mapel_model->tambah();
            $this->session->set_flashdata('mapel', 'Ditambah');
            redirect('admin/mapel');
        }
    }

    public function ubah($id)
    {
        $this->form_validation->set_rules(
            'nama_mapel',
            'Mata Pelajaran',
            'required',
            [
                'required' => 'Mata Pelajaran Harus diisi'
            ]
        );
        if ($this->form_validation->run() == FALSE) {
            $data['sidename'] = $this->session->userdata('nama');
            $data['current_user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $data['title'] = "Admin - Ubah Mata Pelajaran";
            $data['page_title'] = "Ubah Mata Pelajaran";
            $data['headertitle'] = "Ubah Data Mata Pelajaran";
            $data['mapel'] = $this->Mapel_model->getMapelById($id);
            $this->load->view('admin/layout/header', $data);
            $this->load->view('admin/layout/topbar', $data);
            $this->load->view('admin/layout/sidebar', $data);
            $this->load->view('admin/content/mapel/ubah', $data);
            $this->load->view('admin/layout/theme');
            $this->load->view('admin/layout/footer');
        } else {
            $this->Mapel_model->ubah();
            $this->session->set_flashdata('mapel', 'Diubah');
            redirect('admin/mapel');
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
            $data['title'] = "Admin - Hapus Mata Pelajaran";
            $data['page_title'] = "Hapus Mata Pelajaran";
            $data['headertitle'] = "Hapus Data Mata Pelajaran";
            $data['mapel'] = $this->Mapel_model->getMapelById($id);
            $this->load->view('admin/layout/header', $data);
            $this->load->view('admin/layout/topbar', $data);
            $this->load->view('admin/layout/sidebar', $data);
            $this->load->view('admin/content/mapel/hapus', $data);
            $this->load->view('admin/layout/theme');
            $this->load->view('admin/layout/footer');
        } else {
            $this->Mapel_model->hapus();
            $this->session->set_flashdata('mapel', 'Dihapus');
            redirect('admin/mapel');
        }
    }
    public function import($id = null)
    {
        $data['sidename'] = $this->session->userdata('nama');
        $data['current_user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Admin - Hapus Mata Pelajaran";
        $data['page_title'] = "Hapus Mata Pelajaran";
        $data['headertitle'] = "Hapus Data Mata Pelajaran";
        $data['mapel'] = $this->Mapel_model->getMapelById($id);
        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/topbar', $data);
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/content/mapel/import', $data);
        $this->load->view('admin/layout/theme');
        $this->load->view('admin/layout/footer');

        $this->load->helper('form');
        $this->Mapel_model->importExcel();
    }

    public function downloadFormat()
    {
        $this->load->helper('download');
        force_download('upload/format_mapel.xlsx', NULL);
    }
}
