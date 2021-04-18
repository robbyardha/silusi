<?php
class Pengumumanuser extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Nilai_ujian_model');
        $this->load->model('Sekolah_model');
        $this->load->model('Pengumuman_model');
        $this->load->model('Jadwal_pengumuman_model');
    }
    public function index($keyword = null, $id = null)
    {
        $data['nis'] = null;
        if ($this->input->post('keyword') != null) {
            $keyword = $this->input->post('keyword');
            $data['nis'] =  $this->Nilai_ujian_model->cari($keyword);
        } else {
        }
        $data['title'] = "SILUSI - Landing";
        $data['sekolah'] = $this->Sekolah_model->getSekolah();
        $data['pengumuman'] = $this->Pengumuman_model->getPengumumanByIdOrderby($id);
        // var_dump($this->db->last_query());
        // die;
        $data['jadwal'] = $this->Jadwal_pengumuman_model->getAturJadwal();
        $this->load->view('user/layout/header', $data);
        $this->load->view('user/layout/navbar');
        $this->load->view('user/content/pengumuman_user', $data);
        $this->load->view('user/layout/footer');
    }

    public function detail($id = null)
    {
        $data['nis'] = null;
        if ($this->input->post('keyword') != null) {
            $keyword = $this->input->post('keyword');
            $data['nis'] =  $this->Nilai_ujian_model->cari($keyword);
        } else {
        }
        $data['title'] = "SILUSI - Landing";
        $data['sekolah'] = $this->Sekolah_model->getSekolah();
        $data['pengumuman'] = $this->Pengumuman_model->getPengumumanByIdOrderby($id);
        // var_dump($this->db->last_query());
        // die;
        $data['jadwal'] = $this->Jadwal_pengumuman_model->getAturJadwal();
        $this->load->view('user/layout/header', $data);
        $this->load->view('user/layout/navbar');
        $this->load->view('user/content/pengumuman_detail', $data);
        $this->load->view('user/layout/footer');
    }
}
