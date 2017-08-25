<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {

// yang ini buat ngeprint ya kim
    public function prints1a()
    {
        $this->load->view('print-grafik1a');
    }

    public function prints1b()
    {
        $this->load->view('print-grafik1b');
    }

    public function prints2a()
    {
        $this->load->view('print-grafik2a');
    }

    public function prints2b()
    {
        $this->load->view('print-grafik2b');
    }

    public function prints3a()
    {
        $this->load->view('print-grafik3a');
    }

    public function prints3b()
    {
        $this->load->view('print-grafik3b');
    }
    // sampe sini yaa kim
    
}

