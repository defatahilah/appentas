<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Panduan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'Panduan Pemesanan';
        // $data['antrian'] = $this->Checkout_model->antrianpesanan();
        // $data = json_decode(json_encode($data), true);
        $this->load->view('templatesb/header', $data);
        //$this->load->view('templates/sidebar');
        $this->load->view('templatesb/topbar', $data);
        $this->load->view('user/panduan', $data);
        $this->load->view('templatesb/footer', $data);
    }
}
