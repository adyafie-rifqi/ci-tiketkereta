<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penumpang_model');
    }
    public function index()
    {
        $data['judul'] = 'Pesan Tiket';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar_user', $data);
        $this->load->view('templates/topbar_user', $data);
        $this->load->view('transaksi/index', $data);
        $this->load->view('templates/footer_user');
    }
    public function daftar()
    {
        $data['judul'] = 'Daftar Penumpang';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['penumpang'] = $this->Penumpang_model->getAllPenumpang();

        if ($this->input->post('keyword')) {
            $data['penumpang'] = $this->Penumpang_model->cariDataPenumpang();
        }
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar_user', $data);
        $this->load->view('templates/topbar_user', $data);
        $this->load->view('transaksi/daftar', $data);
        $this->load->view('templates/footer_user');
    }
    public function detail($id)
    {
        $data['judul'] = 'Detail';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['penumpang'] = $this->Penumpang_model->getPenumpangById($id);
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar_user', $data);
        $this->load->view('templates/topbar_user', $data);
        $this->load->view('transaksi/detail', $data);
        $this->load->view('templates/footer_user');
    }
    public function executive()
    {
        $data['judul'] = 'Pesan Tiket Kelas Eksekutif';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar_user', $data);
        $this->load->view('templates/topbar_user', $data);
        $this->load->view('transaksi/executive', $data);
        $this->load->view('templates/footer_user');
    }

    public function bisnis()
    {
        $data['judul'] = 'Pesan Tiket Kelas Bisnis';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar_user', $data);
        $this->load->view('templates/topbar_user', $data);
        $this->load->view('transaksi/bisnis', $data);
        $this->load->view('templates/footer_user');
    }

    // Kelas Eksekutif

    public function executive_senen()
    {
        $data['judul'] = 'Pesan Tiket Kelas Eksekutif';
        $data['stasiun'] = 'Stasiun Pasar Senen Jakarta';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['gender'] = ['Laki-laki', 'Perempuan'];
        $data['jam'] = ['05:00:00', '06:45:00'];

        $this->form_validation->set_rules('nama', 'Name', 'trim|required');
        $this->form_validation->set_rules('telepon', 'Phone Number', 'trim|required|numeric');
        $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
        $this->form_validation->set_rules('tanggal', 'Date', 'trim|required|date');
        $this->form_validation->set_rules('jam', 'Time', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/sidebar_user', $data);
            $this->load->view('templates/topbar_user', $data);
            $this->load->view('transaksi/executive_senen', $data);
            $this->load->view('templates/footer_user');
        } else {
            $this->Penumpang_model->tambahDataPenumpang();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('transaksi/daftar');
        }
    }
    public function executive_gambir()
    {
        $data['judul'] = 'Pesan Tiket Kelas Eksekutif';
        $data['stasiun'] = 'Stasiun Gambir Jakarta';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['gender'] = ['Laki-laki', 'Perempuan'];
        $data['jam'] = ['05:15:00', '07:00:00'];

        $this->form_validation->set_rules('nama', 'Name', 'trim|required');
        $this->form_validation->set_rules('telepon', 'Phone Number', 'trim|required|numeric');
        $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
        $this->form_validation->set_rules('tanggal', 'Date', 'trim|required|date');
        $this->form_validation->set_rules('jam', 'Time', 'trim|required');
        $this->form_validation->set_rules('jurusan', 'Destination', 'trim|required');
        $this->form_validation->set_rules('harga', 'Price', 'trim|required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/sidebar_user', $data);
            $this->load->view('templates/topbar_user', $data);
            $this->load->view('transaksi/executive_gambir', $data);
            $this->load->view('templates/footer_user');
        } else {
            $this->Penumpang_model->tambahDataPenumpang();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('transaksi/daftar');
        }
    }
    public function executive_poncol()
    {
        $data['judul'] = 'Pesan Tiket Kelas Eksekutif';
        $data['stasiun'] = 'Stasiun Poncol Semarang';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['gender'] = ['Laki-laki', 'Perempuan'];
        $data['jam'] = ['09:00:00', '12:45:00'];

        $this->form_validation->set_rules('nama', 'Name', 'trim|required');
        $this->form_validation->set_rules('telepon', 'Phone Number', 'trim|required|numeric');
        $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
        $this->form_validation->set_rules('tanggal', 'Date', 'trim|required|date');
        $this->form_validation->set_rules('jam', 'Time', 'trim|required');
        $this->form_validation->set_rules('jurusan', 'Destination', 'trim|required');
        $this->form_validation->set_rules('harga', 'Price', 'trim|required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/sidebar_user', $data);
            $this->load->view('templates/topbar_user', $data);
            $this->load->view('transaksi/executive_poncol', $data);
            $this->load->view('templates/footer_user');
        } else {
            $this->Penumpang_model->tambahDataPenumpang();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('transaksi/daftar');
        }
    }

    // Kelas Bisnis

    public function bisnis_senen()
    {
        $data['judul'] = 'Pesan Tiket Kelas Bisnis';
        $data['stasiun'] = 'Stasiun Pasar Senen Jakarta';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['gender'] = ['Laki-laki', 'Perempuan'];
        $data['jam'] = ['05:30:00', '07:20:00'];

        $this->form_validation->set_rules('nama', 'Name', 'trim|required');
        $this->form_validation->set_rules('telepon', 'Phone Number', 'trim|required|numeric');
        $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
        $this->form_validation->set_rules('tanggal', 'Date', 'trim|required|date');
        $this->form_validation->set_rules('jam', 'Time', 'trim|required');
        $this->form_validation->set_rules('jurusan', 'Destination', 'trim|required');
        $this->form_validation->set_rules('harga', 'Price', 'trim|required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/sidebar_user', $data);
            $this->load->view('templates/topbar_user', $data);
            $this->load->view('transaksi/bisnis_senen', $data);
            $this->load->view('templates/footer_user');
        } else {
            $this->Penumpang_model->tambahDataPenumpang();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('transaksi/daftar');
        }
    }
    public function bisnis_gambir()
    {
        $data['judul'] = 'Pesan Tiket Kelas Bisnis';
        $data['stasiun'] = 'Stasiun Gambir Jakarta';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['gender'] = ['Laki-laki', 'Perempuan'];
        $data['jam'] = ['05:45:00', '07:45:00'];

        $this->form_validation->set_rules('nama', 'Name', 'trim|required');
        $this->form_validation->set_rules('telepon', 'Phone Number', 'trim|required|numeric');
        $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
        $this->form_validation->set_rules('tanggal', 'Date', 'trim|required|date');
        $this->form_validation->set_rules('jam', 'Time', 'trim|required');
        $this->form_validation->set_rules('jurusan', 'Destination', 'trim|required');
        $this->form_validation->set_rules('harga', 'Price', 'trim|required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/sidebar_user', $data);
            $this->load->view('templates/topbar_user', $data);
            $this->load->view('transaksi/bisnis_gambir', $data);
            $this->load->view('templates/footer_user');
        } else {
            $this->Penumpang_model->tambahDataPenumpang();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('transaksi/daftar');
        }
    }
    public function bisnis_poncol()
    {
        $data['judul'] = 'Pesan Tiket Kelas Bisnis';
        $data['stasiun'] = 'Stasiun Poncol Semarang';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['gender'] = ['Laki-laki', 'Perempuan'];
        $data['jam'] = ['09:15:00', '13:00:00'];

        $this->form_validation->set_rules('nama', 'Name', 'trim|required');
        $this->form_validation->set_rules('telepon', 'Phone Number', 'trim|required|numeric');
        $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
        $this->form_validation->set_rules('tanggal', 'Date', 'trim|required|date');
        $this->form_validation->set_rules('jam', 'Time', 'trim|required');
        $this->form_validation->set_rules('jurusan', 'Destination', 'trim|required');
        $this->form_validation->set_rules('harga', 'Price', 'trim|required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/sidebar_user', $data);
            $this->load->view('templates/topbar_user', $data);
            $this->load->view('transaksi/bisnis_poncol', $data);
            $this->load->view('templates/footer_user');
        } else {
            $this->Penumpang_model->tambahDataPenumpang();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('transaksi/daftar');
        }
    }
}
