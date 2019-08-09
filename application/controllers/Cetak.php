<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cetak extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Penumpang_model');
    }
    public function index()
    {
        $this->load->library('pdf');
        $data['penumpang'] = $this->Penumpang_model->getAllPenumpang();
        $html = $this->load->view('cetak/v_index', $data, true);
        $filename = 'laporan' . time();
        $this->pdf->generate($html, $filename, true, 'A4', 'landscape');
    }
    public function cetak($id)
    {
        $this->load->library('pdf');
        $data['penumpang'] = $this->Penumpang_model->getPenumpangById($id);
        $html = $this->load->view('cetak/v_cetak', $data, true);
        $filename = 'laporan' . time();
        $this->pdf->generate($html, $filename, true, 'A4', 'potrait');
    }
}
