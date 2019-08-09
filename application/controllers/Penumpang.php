<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penumpang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penumpang_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = 'Menu Penumpang';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['penumpang'] = $this->Penumpang_model->getAllPenumpang();

        if ($this->input->post('keyword')) {
            $data['penumpang'] = $this->Penumpang_model->cariDataPenumpang();
        }
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar_user', $data);
        $this->load->view('templates/topbar_user', $data);
        $this->load->view('penumpang/index', $data);
        $this->load->view('templates/footer_user');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Penumpang';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['penumpang'] = $this->Penumpang_model->getPenumpangById($id);
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar_user', $data);
        $this->load->view('templates/topbar_user', $data);
        $this->load->view('penumpang/detail', $data);
        $this->load->view('templates/footer_user');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Ubah Data Penumpang';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['penumpang'] = $this->Penumpang_model->getPenumpangById($id);
        $data['gender'] = ['Laki-laki', 'Perempuan'];
        $data['jam'] = ['05:00:00', '06:45:00'];

        $this->form_validation->set_rules('nama', 'Name', 'required');
        $this->form_validation->set_rules('telepon', 'Phone Number', 'required|numeric');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('tanggal', 'Date', 'required|date');
        $this->form_validation->set_rules('jam', 'Time', 'required|date');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/sidebar_user', $data);
            $this->load->view('templates/topbar_user', $data);
            $this->load->view('penumpang/ubah', $data);
            $this->load->view('templates/footer_user');
        } else {
            $this->Penumpang_model->ubahDataPenumpang();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('penumpang');
        }
    }

    public function update($id)
    {
        $data['judul'] = 'Pesan Tiket';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['penumpang'] = $this->Penumpang_model->getPenumpangById($id);

        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar_user', $data);
        $this->load->view('templates/topbar_user', $data);
        $this->load->view('penumpang/update', $data);
        $this->load->view('templates/footer_user');
    }

    public function executive($id)
    {
        $data['judul'] = 'Pesan Tiket Kelas Eksekutif';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['penumpang'] = $this->Penumpang_model->getPenumpangById($id);

        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar_user', $data);
        $this->load->view('templates/topbar_user', $data);
        $this->load->view('penumpang/executive', $data);
        $this->load->view('templates/footer_user');
    }

    public function executive_senen($id)
    {
        $data['judul'] = 'Ubah Data Penumpang';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['penumpang'] = $this->Penumpang_model->getPenumpangById($id);
        $data['gender'] = ['Laki-laki', 'Perempuan'];
        $data['jam'] = ['05:00:00', '06:45:00'];

        $this->form_validation->set_rules('nama', 'Name', 'required');
        $this->form_validation->set_rules('telepon', 'Phone Number', 'required|numeric');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('tanggal', 'Date', 'required|date');
        $this->form_validation->set_rules('jam', 'Time', 'required|date');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/sidebar_user', $data);
            $this->load->view('templates/topbar_user', $data);
            $this->load->view('penumpang/executive_senen', $data);
            $this->load->view('templates/footer_user');
        } else {
            $this->Penumpang_model->ubahDataPenumpang();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('penumpang');
        }
    }

    public function executive_gambir($id)
    {
        $data['judul'] = 'Ubah Data Penumpang';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['penumpang'] = $this->Penumpang_model->getPenumpangById($id);
        $data['gender'] = ['Laki-laki', 'Perempuan'];
        $data['jam'] = ['05:15:00', '07:00:00'];

        $this->form_validation->set_rules('nama', 'Name', 'required');
        $this->form_validation->set_rules('telepon', 'Phone Number', 'required|numeric');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('tanggal', 'Date', 'required|date');
        $this->form_validation->set_rules('jam', 'Time', 'required|date');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/sidebar_user', $data);
            $this->load->view('templates/topbar_user', $data);
            $this->load->view('penumpang/executive_gambir', $data);
            $this->load->view('templates/footer_user');
        } else {
            $this->Penumpang_model->ubahDataPenumpang();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('penumpang');
        }
    }

    public function executive_poncol($id)
    {
        $data['judul'] = 'Ubah Data Penumpang';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['penumpang'] = $this->Penumpang_model->getPenumpangById($id);
        $data['gender'] = ['Laki-laki', 'Perempuan'];
        $data['jam'] = ['09:00:00', '12:45:00'];

        $this->form_validation->set_rules('nama', 'Name', 'required');
        $this->form_validation->set_rules('telepon', 'Phone Number', 'required|numeric');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('tanggal', 'Date', 'required|date');
        $this->form_validation->set_rules('jam', 'Time', 'required|date');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/sidebar_user', $data);
            $this->load->view('templates/topbar_user', $data);
            $this->load->view('penumpang/executive_poncol', $data);
            $this->load->view('templates/footer_user');
        } else {
            $this->Penumpang_model->ubahDataPenumpang();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('penumpang');
        }
    }

    public function bisnis()
    {
        $data['judul'] = 'Pesan Tiket Kelas Bisnis';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar_user', $data);
        $this->load->view('templates/topbar_user', $data);
        $this->load->view('penumpang/executive', $data);
        $this->load->view('templates/footer_user');
    }

    public function bisnis_senen($id)
    {
        $data['judul'] = 'Ubah Data Penumpang';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['penumpang'] = $this->Penumpang_model->getPenumpangById($id);
        $data['gender'] = ['Laki-laki', 'Perempuan'];
        $data['jam'] = ['05:30:00', '07:20:00'];

        $this->form_validation->set_rules('nama', 'Name', 'required');
        $this->form_validation->set_rules('telepon', 'Phone Number', 'required|numeric');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('tanggal', 'Date', 'required|date');
        $this->form_validation->set_rules('jam', 'Time', 'required|date');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/sidebar_user', $data);
            $this->load->view('templates/topbar_user', $data);
            $this->load->view('penumpang/bisnis_senen', $data);
            $this->load->view('templates/footer_user');
        } else {
            $this->Penumpang_model->ubahDataPenumpang();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('penumpang');
        }
    }

    public function bisnis_gambir($id)
    {
        $data['judul'] = 'Ubah Data Penumpang';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['penumpang'] = $this->Penumpang_model->getPenumpangById($id);
        $data['gender'] = ['Laki-laki', 'Perempuan'];
        $data['jam'] = ['05:45:00', '07:45:00'];

        $this->form_validation->set_rules('nama', 'Name', 'required');
        $this->form_validation->set_rules('telepon', 'Phone Number', 'required|numeric');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('tanggal', 'Date', 'required|date');
        $this->form_validation->set_rules('jam', 'Time', 'required|date');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/sidebar_user', $data);
            $this->load->view('templates/topbar_user', $data);
            $this->load->view('penumpang/bisnis_gambir', $data);
            $this->load->view('templates/footer_user');
        } else {
            $this->Penumpang_model->ubahDataPenumpang();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('penumpang');
        }
    }

    public function bisnis_poncol($id)
    {
        $data['judul'] = 'Ubah Data Penumpang';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['penumpang'] = $this->Penumpang_model->getPenumpangById($id);
        $data['gender'] = ['Laki-laki', 'Perempuan'];
        $data['jam'] = ['09:15:00', '13:00:00'];

        $this->form_validation->set_rules('nama', 'Name', 'required');
        $this->form_validation->set_rules('telepon', 'Phone Number', 'required|numeric');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('tanggal', 'Date', 'required|date');
        $this->form_validation->set_rules('jam', 'Time', 'required|date');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/sidebar_user', $data);
            $this->load->view('templates/topbar_user', $data);
            $this->load->view('penumpang/bisnis_poncol', $data);
            $this->load->view('templates/footer_user');
        } else {
            $this->Penumpang_model->ubahDataPenumpang();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('penumpang');
        }
    }

    public function hapus($id)
    {
        $this->Penumpang_model->hapusDataPenumpang($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('penumpang');
    }

    // public function laporan_pdf()
    // {


    //     $this->load->library('pdf');
    //     $this->pdf->setPaper('A4', 'potrait');
    //     $this->pdf->filename="laporan.pdf";
    //     $this->pdf->load_view('laporan_pdf', $data)
    // }
}
