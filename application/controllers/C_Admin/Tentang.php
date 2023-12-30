<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_ruangan');
        $this->load->model('m_permohonan');
        $this->load->model('m_penyewaan');
        $this->load->model('m_jumlah');
        $this->load->helper(array('url'));
        date_default_timezone_set('Asia/Makassar');
        logged_in();
    }
    public function index()
    {
        $data['admin']   = $this->db->get_where('tadmin', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'APPENTAS - Profil Pembuat';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin', $data);
        $this->load->view('templates/topbaradmin', $data);
        $this->load->view('admin/tentang');
        $this->load->view('templates/footer');
    }
}
