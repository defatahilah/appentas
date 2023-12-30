<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_jumlah');
    }
    public function index()
    {
        $jumlah_data = array(
            'data_ruangan' => $this->m_jumlah->data_ruangan(),
            'data_penyewaan' => $this->m_jumlah->data_penyewaanuser()
        );

        $data['title'] = 'APPENTAS BPSDMD Provinsi Kal-Sel';
        $this->load->view('templatesb/header', $data);
        //$this->load->view('templates/sidebar', $data);
        $this->load->view('templatesb/topbar', $data);
        $this->load->view('v_user/index', $jumlah_data);
        $this->load->view('templatesb/footer');
    }
    public function login()
    {
        $this->form_validation->set_rules('username', 'Name', 'trim|required', array('required' => 'Isi Username anda terlebih dahulu '));
        $this->form_validation->set_rules('password', 'Password', 'trim|required', array('required' => 'Isi Password anda terlebih dahulu '));
        //$this->form_validation->set_rules('captcha', 'captcha', 'required', array('required' => 'Isi Captchanya terlebih dahulu '));
        if ($this->form_validation->run() == false) {

            $data['title'] = 'APPENTAS - Login';
            $this->load->view('templates/login_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/login_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $nama = $this->input->post('username');
        $password = $this->input->post('password');

        $this->db->select('username, password')
            ->from('tadmin')
            ->where('username', $nama)
            ->where('password', md5($password));
        $query = $this->db->get();
        $hasil = $query->row_array();
        $po_captcha = $this->input->post('captcha');

        $this->session->set_userdata('username', $hasil['username']);
        if ($hasil) {
            // $this->session->set_userdata('captcha_str', $po_captcha['captcha']);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success role="alert">
                Anda Berhasil Login
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button></div>');
            redirect('Admin');
        } else {
            $this->session->set_flashdata('error', 'Username atau Password salah');
            redirect('Login');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('username');
        //$this->session->sess_destroy();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success role="alert">
        Berhasil Logout
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button></div>');
        redirect('Login');
    }
}
