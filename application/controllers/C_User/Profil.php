<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'APPENTAS - Profil';
        $this->load->view('templatesb/header', $data);
        //$this->load->view('templates/sidebar', $data);
        $this->load->view('templatesb/topbar', $data);
        $this->load->view('user/profil');
        $this->load->view('templatesb/footer');
    }
}
