<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Dompdf;
use Dompdf\Options;

class PDFlib extends Dompdf
{
    protected $ci;
    private $filename;

    public function __construct()
    {
        parent::__construct();
        $this->ci = &get_instance();
    }

    public function setFileName($filename)
    {
        $this->filename = $filename;
    }

    public function loadView($viewFile, $data = array())
    {
        $options = new Options();
        //   <-- Set root nya ke /var/www/html/nama-project
        $options->setChroot(FCPATH);
        $options->setDefaultFont('courier');

        $this->setOptions($options);

        $html = $this->ci->load->view($viewFile, $data, true);
        $this->loadHtml($html);
        $this->render();
        $canvas = $this->getCanvas();
        $w = $canvas->get_width();
        $h = $canvas->get_height();
        $this->stream($this->filename, ['Attachment' => 0]);
    }
}

/* End of file PDFlib.php */