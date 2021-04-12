<?php
class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = "SILUSI - Landing";
        $this->load->view('user/layout/header', $data);
        $this->load->view('user/layout/navbar');
        $this->load->view('user/content/home');
        $this->load->view('user/layout/footer');
    }
}
