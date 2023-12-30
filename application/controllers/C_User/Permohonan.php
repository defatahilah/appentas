<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Permohonan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_permohonan');
        $this->load->model('m_penyewaan');
        $this->load->helper(array('url'));
        date_default_timezone_set('Asia/Makassar');
    }


    public function tambah_permohonan()
    {

        $data['title'] = 'APPENTAS - Pengajuan Permohonan';
        $this->load->view('templatesb/header', $data);
        //$this->load->view('templates/sidebar');
        $this->load->view('user/tambah_permohonan');
        $this->load->view('templates/footer');
    }



    public function tambah_permohonan_aksi()
    {


        $this->_rules();
        if (empty($_FILES['surat']['name'])) {
            $this->form_validation->set_rules(
                'surat',
                'Permohonan',
                'required',
                array('required' => 'Surat permohonan tidak boleh kosong')
            );
        }



        if ($this->form_validation->run() == FALSE) {

            $this->tambah_permohonan();
        } else {
            $tgl_surat  = $this->input->post('tgl_surat');
            $nama    = $this->input->post('nama');
            $alamat    = $this->input->post('alamat');
            $email    = $this->input->post('email');
            $no_telp   = $this->input->post('kodearea') . $this->input->post('no_telp');
            $surat = $_FILES['surat'];
            if ($surat = '') {
            } else {

                $config['upload_path'] = './assets/surat';
                $config['allowed_types'] = 'doc|docx|pdf|';
                $config['max_size'] = '100000';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('surat')) {
                    $data['title'] = 'APPENTAS - Gagal';
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('user/suratgagal', $data);
                    $this->load->view('templates/footer');
                } else {

                    $surat = $this->upload->data('file_name');
                    $this->m_permohonan->surat($this->input->post('surat'), $surat);
                    $data['title'] = 'APPENTAS - Terima Kasih';

                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('user/suratberhasil', $data);
                    $this->load->view('templates/footer');
                }
            }
            $data = array(
                'tgl_surat'   => $tgl_surat,
                'nama'     => $nama,
                'alamat'     => $alamat,
                'email'     => $email,
                'no_telp'    => $no_telp,
                'permohonan'    => $surat,
                'is_read' => '0',


            );

            $this->m_permohonan->tambah_data($data, 'tpermohonan');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Permohonan Berhasil Ditambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules(
            'nama',
            'Nama Pemohon',
            'required',
            array('required' => 'Isi nama anda terlebih dahulu.')
        );

        $this->form_validation->set_rules(
            'alamat',
            'Alamat',
            'required',
            array('required' => 'Alamat harus diisi.')
        );
        $this->form_validation->set_rules(
            'email',
            'Email',

            array()
        );
        $this->form_validation->set_rules(
            'no_telp',
            'Nomor Telepon/WA',
            'trim|required|numeric',
            array(
                'required' => 'Nomor Telpon/WA tidak boleh kosong',
                'numeric' => 'Nomor Telpon/WA tidak boleh memuat huruf'
            )
        );

        $this->form_validation->set_rules(
            'surat',
            'required',
            array('required' => 'Anda belum upload surat permohonan.')
        );
    }
}
