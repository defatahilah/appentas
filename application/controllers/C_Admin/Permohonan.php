<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Permohonan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
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
        $data['title'] = 'APPENTAS - Data Permohonan';
        $data['tpermohonan'] = $this->m_permohonan->tampil_data('tpermohonan');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin');
        $this->load->view('templates/topbaradmin', $data);
        $this->load->view('admin/Permohonan', $data);
        $this->load->view('templates/footer');
    }
    public function notifpermohonan()
    {
        $id_permohonan = $this->uri->segment(4);
        $where = array('id_permohonan' => $id_permohonan);
        $data['admin']   = $this->db->get_where('tadmin', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'APPENTAS - Data Permohonan';
        $data['tpermohonan'] = $this->m_permohonan->ubah_data_notif($where, 'tpermohonan')->result();
        $this->db->set('is_read', '1');
        $this->db->where('id_permohonan', $id_permohonan);
        $this->db->update('tpermohonan');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin');
        $this->load->view('templates/topbaradmin', $data);
        $this->load->view('admin/Permohonan', $data);
        $this->load->view('templates/footer');
    }

    public function download($surat)
    {

        $this->load->helper('download');
        force_download(FCPATH . '/assets/surat/' . $surat, null);
    }

    public function gettot()
    {

        $tot = $this->m_jumlah->data_permohonan_notif();
        $msg = $this->m_permohonan->tampil_data_notif();
        $result['tot'] = $tot;
        $result['msg'] = $msg;
        echo json_encode($result);
    }

    public function tambah_permohonan_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_permohonan();
        } else {

            $tgl_surat    = $this->input->post('tgl_surat');
            $nama    = $this->input->post('nama');
            $alamat    = $this->input->post('alamat');
            $email    = $this->input->post('email');
            $no_telp           = $this->input->post('no_telp');


            $data = array(
                'tgl_surat'   => $tgl_surat,
                'nama'     => $nama,
                'alamat'     => $alamat,
                'email'     => $email,
                'no_telp'    => $no_telp,


            );

            $this->m_permohonan->tambah_data($data, 'tpermohonan');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Permohonan Berhasil Ditambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('Permohonan');
        }
    }

    public function hapus_permohonan_aksi($id_permohonan)
    {
        $where = array('id_permohonan' => $id_permohonan);
        $this->m_permohonan->hapus_data($where, 'tpermohonan');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data permohonan Berhasil Dihapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
        redirect('Permohonan');
    }

    public function ubah_permohonan()
    {
        $id_permohonan = $this->uri->segment(2);
        $where = array('id_permohonan' => $id_permohonan);
        $data['admin']   = $this->db->get_where('tadmin', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'APPENTAS';
        $data['tpermohonan'] = $this->m_permohonan->ubah_data($where, 'tpermohonan')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin');
        $this->load->view('admin/edit_permohonan', $data);
        $this->load->view('templates/footer');
    }

    public function ubah_permohonan_notif_aksi()
    {
        $id_permohonan       = $this->input->post('id_permohonan');
        $tgl_surat       = $this->input->post('tgl_surat');
        $nama       = $this->input->post('nama');
        $alamat            = $this->input->post('alamat');
        $email            = $this->input->post('email');
        $no_telp       = $this->input->post('no_telp');


        $data = array(
            'tgl_surat'   => $tgl_surat,
            'nama'      => $nama,
            'alamat'           => $alamat,
            'email'           => $email,
            'no_telp'      => $no_telp,

        );

        $where = array('id_permohonan' => $id_permohonan);

        $this->m_permohonan->ubah_data_aksi_notif($where, $data, 'tpermohonan');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success role="alert">
            Data Permohonan Diubah!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
        redirect('Permohonan');
    }
    public function ubah_permohonan_aksi()
    {
        $id_permohonan       = $this->input->post('id_permohonan');
        $tgl_surat       = $this->input->post('tgl_surat');
        $nama       = $this->input->post('nama');
        $alamat            = $this->input->post('alamat');
        $email            = $this->input->post('email');
        $no_telp       = $this->input->post('no_telp');


        $data = array(
            'tgl_surat'   => $tgl_surat,
            'nama'      => $nama,
            'alamat'           => $alamat,
            'email'           => $email,
            'no_telp'      => $no_telp,

        );

        $where = array('id_permohonan' => $id_permohonan);

        $this->m_permohonan->ubah_data_aksi($where, $data, 'tpermohonan');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success role="alert">
            Data Permohonan Diubah!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
        redirect('Permohonan');
    }

    public function _rules()
    {
        $this->form_validation->set_rules(
            'permohonan',
            'Permohonan',
            'required',
            array('required' => 'Upload surat permohonan anda terlebih dahulu.')
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
    }
}
