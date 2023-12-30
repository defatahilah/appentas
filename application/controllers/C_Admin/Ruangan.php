<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ruangan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_ruangan');
        $this->load->model('m_permohonan');
        $this->load->model('m_penyewaan');
        $this->load->model('m_jumlah');
        $this->load->helper(array('url'));
        logged_in();
    }

    public function index()
    {
        $data['admin']   = $this->db->get_where('tadmin', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'APPENTAS - Data Ruangan';
        $data['truangan'] = $this->m_ruangan->tampil_data('truangan')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin');
        $this->load->view('templates/topbaradmin', $data);
        $this->load->view('admin/Ruangan', $data);
        $this->load->view('templates/footer');
    }
    /*public function tambah_ruangan()
    {
        $data['admin']   = $this->db->get_where('tadmin', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'APPENTAS - Input Ruangan';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin');
        $this->load->view('admin/tambah_ruangan');
        $this->load->view('templates/footer');
    }*/
    public function tambahruanganmodal()
    {
        $id_ruangan      = $this->input->post('id_ruangan');
        $nm_ruangan      = $this->input->post('nm_ruangan');
        $harga           = $this->input->post('harga');
        $potongan           = $this->input->post('potongan');
        $jmlh_r      = $this->input->post('jmlh_r');
        $kapasitas      = $this->input->post('kapasitas');

        $data = array(

            'id_ruangan'     => $id_ruangan,
            'nm_ruangan'     => $nm_ruangan,
            'harga'          => $harga,
            'potongan'          => $potongan,
            'jmlh_r'     => $jmlh_r,
            'kapasitas'     => $kapasitas,

        );


        $this->m_ruangan->tambah_data($data, 'truangan');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
Data Ruangan Berhasil Ditambahkan!
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button></div>');
        redirect('Ruangan');
    }

    public function tambah_ruangan_aksi()
    {

        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {

            $id_ruangan      = $this->input->post('id_ruangan');
            $nm_ruangan      = $this->input->post('nm_ruangan');
            $harga           = $this->input->post('harga');
            $potongan           = $this->input->post('potongan');
            $jmlh_r      = $this->input->post('jmlh_r');
            $kapasitas      = $this->input->post('kapasitas');
            $luas      = $this->input->post('luas');
            $gambar = $_FILES['gambar'];

            if ($gambar = '') {
            } else {

                $config['upload_path'] = './assets/img/ruangan';
                $config['allowed_types'] = 'jpg|jpeg|png|';
                $config['max_size'] = '100000';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('gambar')) {
                    $this->index();
                } else {
                    $gambar = $this->upload->data('file_name');
                    $this->m_ruangan->gambar($this->input->post('gambar'), $gambar);
                    $this->index();
                }
                $data = array(

                    'id_ruangan'     => $id_ruangan,
                    'nm_ruangan'     => $nm_ruangan,
                    'harga'          => $harga,
                    'potongan'          => $potongan,
                    'jmlh_r'     => $jmlh_r,
                    'kapasitas'     => $kapasitas,
                    'luas'     => $luas,
                    'gambar'     => $gambar,


                );


                $this->m_ruangan->tambah_data($data, 'truangan');
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Ruangan Berhasil Ditambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
                redirect('Ruangan');
            }
        }
    }


    public function hapus_ruangan_aksi($id_ruangan)
    {
        $where = array('id_ruangan' => $id_ruangan);
        $this->m_ruangan->hapus_data($where, 'truangan');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Ruangan Berhasil Dihapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
        redirect('Ruangan');
    }
    public function editruanganmodal()
    {

        $id_ruangan = $this->input->post('id_ruangan');
        $data =  [
            'id_ruangan'       => $this->input->post('id_ruangan'),
            'nm_ruangan'       => $this->input->post('nm_ruangan'),
            'harga'            => $this->input->post('harga'),
            'potongan'            => $this->input->post('potongan'),
            'jmlh_r'      => $this->input->post('jmlh_r'),
            'kapasitas'      => $this->input->post('kapasitas'),
        ];
        $this->db->where('id_ruangan', $id_ruangan);
        $this->db->update('truangan', $data);
        //$this->m_ruangan->ubah_data_aksi($where, $data, 'truangan');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success role="alert">
        Data Ruangan Diubah!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button></div>');
        $this->index();
    }

    public function ubah_ruangan()
    {

        $id_ruangan = $this->uri->segment(2);
        $where = array('id_ruangan' => $id_ruangan);
        $data['admin']   = $this->db->get_where('tadmin', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'APPENTAS';
        $data['truangan'] = $this->m_ruangan->ubah_data($where, 'truangan')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin');
        $this->load->view('admin/edit_ruangan', $data);
        $this->load->view('templates/footer');
    }

    public function ubah_ruangan_aksi()
    {
        $id_ruangan       = $this->input->post('id_ruangan');
        $nm_ruangan       = $this->input->post('nm_ruangan');
        $harga            = $this->input->post('harga');
        $potongan            = $this->input->post('potongan');
        $jmlh_r      = $this->input->post('jmlh_r');
        $kapasitas      = $this->input->post('kapasitas');
        $luas      = $this->input->post('luas');


        $gambar = $_FILES['gambar'];

        if ($gambar = '') {
        } else {

            $config['upload_path'] = './assets/img/ruangan';
            $config['allowed_types'] = 'jpg|jpeg|png|';
            $config['max_size'] = '100000';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar')) {
                $this->ubah_ruangan();
            } else {
                $gambar = $this->upload->data('file_name');
                $this->m_ruangan->gambar($this->input->post('gambar'), $gambar);
                $this->index();
            }

            $data = array(
                'id_ruangan'      => $id_ruangan,
                'nm_ruangan'      => $nm_ruangan,
                'harga'           => $harga,
                'potongan'           => $potongan,
                'jmlh_r'     => $jmlh_r,
                'kapasitas'     => $kapasitas,
                'luas'     => $luas,
                'gambar'     => $gambar,

            );

            $where = array('id_ruangan' => $id_ruangan);

            $this->m_ruangan->ubah_data_aksi($where, $data, 'truangan');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success role="alert">
            Data Ruangan Diubah!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('Ruangan');
        }
    }

    public function _rules()
    {

        $this->form_validation->set_rules(
            'id_ruangan',
            'Ruangan',
            'required|is_unique[truangan.id_ruangan]',
            array(
                'required' => 'Id Ruangan harus diisi.',
                'is_unique' => 'Id Ruangan tidak boleh sama.'
            )
        );
        $this->form_validation->set_rules(
            'nm_ruangan',
            'Ruangan',
            'required',
            array('required' => 'Nama Ruangan harus diisi.')
        );

        $this->form_validation->set_rules(
            'harga',
            'Harga',
            'required',
            array('required' => 'Harga harus diisi.')
        );
        $this->form_validation->set_rules(
            'potongan',
            'Potongan',
            'required',
            array('required' => 'Potongan harus diisi.')
        );



        $this->form_validation->set_rules(
            'jmlh_r',
            'Potongan',
            'required',
            array('required' => 'Jumlah Ruangan harus diisi.')
        );
        $this->form_validation->set_rules(
            'kapasitas',
            'Potongan',
            'required',
            array('required' => 'Kapasitas harus diisi.')
        );
        $this->form_validation->set_rules(
            'luas',
            'Potongan',
            'required',
            array('required' => 'Luas Bangunan harus diisi.')
        );
    }

    public function get_hargaRuangan()
    {

        // $data['title'] = 'APPENTAS - Jadwal Penyewaan';
        $data['truangan'] =  $this->m_ruangan->hargaRuangan();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin');
        $this->load->view('templates/topbaradmin', $data);
        $this->load->view('user/tambah_penyewaan', $data);
        $this->load->view('templates/footer');
    }
}
