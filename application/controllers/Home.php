<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Nilai_ujian_model');
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
        $this->load->view('user/layout/header', $data);
        $this->load->view('user/layout/navbar');
        $this->load->view('user/content/home', $data);
        $this->load->view('user/layout/footer');
    }
}
