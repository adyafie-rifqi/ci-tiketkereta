<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Menu_model');
        $this->load->library('form_validation');
        is_logged_in();
    }
    public function index()
    {
        $data['judul'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/sidebar_user', $data);
            $this->load->view('templates/topbar_user', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer_user');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">The Menu has been added!</div>');
            redirect('menu');
        }
    }

    public function hapusmenu($id)
    {
        $this->Menu_model->hapusMenu($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">The Menu has been deleted!</div>');
        redirect('menu');
    }

    public function ubahmenu($id)
    {
        $data['judul'] = 'Ubah Menu';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->Menu_model->getMenuById($id);

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/sidebar_user', $data);
            $this->load->view('templates/topbar_user', $data);
            $this->load->view('menu/ubahmenu', $data);
            $this->load->view('templates/footer_user');
        } else {
            $this->Menu_model->ubahMenu();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">The Menu has been updated!</div>');
            redirect('menu');
        }
    }

    public function submenu()
    {
        $data['judul'] = 'Sub Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->model('Menu_model', 'menu');

        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Menu', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'Menu', 'required');
        $this->form_validation->set_rules('icon', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/sidebar_user', $data);
            $this->load->view('templates/topbar_user', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/footer_user');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active'),
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sub menu baru telah ditambahkan</div>');
            redirect('menu/submenu');
        }
    }
}
