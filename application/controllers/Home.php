<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Nilai_ujian_model');
        $this->load->model('Sekolah_model');
        $this->load->model('Pengumuman_model');
        $this->load->model('Jadwal_pengumuman_model');
    }
    public function index($keyword = null)
    {
        $data['nis'] = null;
        if ($this->input->post('keyword') != null) {
            $keyword = $this->input->post('keyword');
            $data['nis'] =  $this->Nilai_ujian_model->cari($keyword);
        } else {
        }

        $data['title'] = "SILUSI - Landing";
        $data['sekolah'] = $this->Sekolah_model->getSekolah();
        $data['pengumuman'] = $this->Pengumuman_model->getPengumuman();
        $data['jadwal'] = $this->Jadwal_pengumuman_model->getAturJadwal();
        $data['nilai'] = $this->Nilai_ujian_model->getNilai();
        $data['nilai_mapel'] = $this->Nilai_ujian_model->nilai_mapel($keyword);
        $this->load->view('user/layout/header', $data);
        $this->load->view('user/layout/navbar');
        $this->load->view('user/content/home', $data);
        $this->load->view('user/layout/footer');
    }

    public function cetak_skl($nis_siswa = null)
    {
        $data['title'] = "SILUSI - Landing";
        $data['sekolah'] = $this->Sekolah_model->getSekolah();
        $data['pengumuman'] = $this->Pengumuman_model->getPengumuman();
        $data['jadwal'] = $this->Jadwal_pengumuman_model->getAturJadwal();
        $data['nilai'] = $this->Nilai_ujian_model->getNilaiById($nis_siswa);
        $this->load->view('user/layout/header', $data);
        $this->load->view('user/layout/navbar');
        $this->load->view('user/content/cetak_skl', $data);
        $this->load->view('user/layout/footer');
    }
}
