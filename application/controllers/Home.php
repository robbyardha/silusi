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
        $this->load->library('session');
    }
    public function index($keyword = null)
    {
        $data['nis'] = null;
        if ($this->input->post('keyword') != null) {
            $keyword = $this->input->post('keyword');
            $data['nis'] =  $this->Nilai_ujian_model->cari($keyword);
            $this->session->set_userdata('keyword', $keyword);
            // 'item' will be erased after 300 seconds
            $this->session->mark_as_temp('keyword', 60);
            // var_dump($this->session->mark_as_temp('keyword', 60));
            // die;
        } else {
        }

        $data['title'] = "SILUSI - Landing";
        $data['sekolah'] = $this->Sekolah_model->getSekolah();
        $data['pengumuman'] = $this->Pengumuman_model->getPengumuman();
        $data['jadwal'] = $this->Jadwal_pengumuman_model->getAturJadwal();
        $data['nilai'] = $this->Nilai_ujian_model->getNilai();
        $data['nilai_mapel'] = $this->Nilai_ujian_model->nilai_mapel($keyword);
        $data['nilai_sum'] = $this->Nilai_ujian_model->nilai_sum($keyword);
        $data['getnumrowsmapel'] = $this->Nilai_ujian_model->getNumRowsMapel($keyword);
        // var_dump($data['getnumrowsmapel']);
        // die;
        // var_dump($data['nilai_mapel']);
        // die;
        // var_dump($this->db->last_query());
        // die;
        $this->load->view('user/layout/header', $data);
        $this->load->view('user/layout/navbar');
        $this->load->view('user/content/home', $data);
        $this->load->view('user/layout/footer');
    }

    public function cetak_skl($nis_siswa = null)
    {
        if (!$this->session->userdata('keyword')) {
            redirect('Home');
        }
        if ($this->session->mark_as_temp('keyword', 60) == false) {
            $this->session->unset_userdata('keyword');
            $this->session->sess_destroy();
            redirect('Home');
        }

        $data['title'] = "SILUSI - Landing";
        $data['sekolah'] = $this->Sekolah_model->getSekolah();
        $data['pengumuman'] = $this->Pengumuman_model->getPengumuman();
        $data['jadwal'] = $this->Jadwal_pengumuman_model->getAturJadwal();
        $data['nilai'] = $this->Nilai_ujian_model->getNilaiById($nis_siswa);
        $data['nilai_mapel'] = $this->Nilai_ujian_model->nilai_mapel($nis_siswa);
        // $data['nilai_sum'] = $this->Nilai_ujian_model->nilai_sum($nis_siswa);
        $data['nilai_sum_nusp'] = $this->Nilai_ujian_model->nilai_sum_nusp($nis_siswa);
        $data['getnumrowsmapel'] = $this->Nilai_ujian_model->getNumRowsMapel($nis_siswa);
        $data['kelompokaumum'] = $this->Nilai_ujian_model->getKelompokMapelUmumA($nis_siswa);
        $data['kelompokbumum'] = $this->Nilai_ujian_model->getKelompokMapelUmumB($nis_siswa);
        $data['kelompokcpeminatan'] = $this->Nilai_ujian_model->getKelompokMapelPeminatanC($nis_siswa);
        $data['kelompoklintasminat'] = $this->Nilai_ujian_model->getKelompokMapelLintasMinat($nis_siswa);
        // var_dump($data['nilai_sum_nusp']);
        // die;
        // var_dump($data['nilai_sum']);
        // die;
        // $this->load->library('pdf');
        // $this->pdf->setPaper('legal', 'potrait');
        // $this->pdf->filename = "SKL_Arcds.pdf";
        // $this->pdf->load_view('user/content/cetak_skl', $data);
        // $custom_paper_f4 = array(0, 0, 2100, 3300);
        // $this->pdf->setPaper($custom_paper_f4, 'potrait');
        // $this->pdf->setPaper('A4', 'potrait');
        // $this->pdf->load_view('user/content/cetak_skl', $data);
        // $this->load->view('user/content/cetak_skl', $data);
        $this->load->library('pdflib');
        $times = time();
        $this->pdflib->setFileName("Surat Keterangan Lulus2021_$times.pdf");
        $this->pdflib->setPaper('folio', 'potrait');
        $this->pdflib->loadView('user/content/cetak_skl', $data);
    }
}
