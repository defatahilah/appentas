<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penyewaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_penyewaan');
        $this->load->model('m_permohonan');
        date_default_timezone_set('Asia/Makassar');
    }

    public function index()
    {
        $data['title'] = 'APPENTAS - Jadwal Penyewaan';
        $data['tpenyewaan'] = $this->m_penyewaan->tampil_byuser('tpenyewaan');
        $this->load->view('templatesb/header', $data);
        //$this->load->view('templates/sidebar');
        $this->load->view('templatesb/topbar', $data);
        $this->load->view('user/Penyewaan', $data);
        $this->load->view('templatesb/footer');
    }

    public function checkout()
    {
        $id_sewa = $this->uri->segment(4);
        $data['title'] = 'APPENTAS - Checkout';
        $data['tpenyewaan'] = $this->m_penyewaan->tampilcheckout($id_sewa);
        $this->load->view('templates/header', $data);
        //$this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/checkout', $data);
        $this->load->view('templates/footer');
    }

    public function konfirmasipenyewaan()
    {

        $this->form_validation->set_rules(
            'suratcek',
            'suratcek',
            'trim|required|is_unique[tpenyewaan.id_permohonan]',
            array(
                'required' => 'Id tidak boleh kosong',
                'is_unique' => 'Id sudah ada/sudah melakukan konfirmasi'
            )
        );

        $penyewaan = array(
            'data_ruangan' => $this->m_penyewaan->tampil_data_ruangan(),
            'data_permohonan' => $this->m_penyewaan->tampil_data_permohonan()

        );

        if ($this->form_validation->run() == false) {
            $this->session->unset_userdata('id_permohonan');
            $data['title'] = 'APPENTAS - Konfirmasi Penyewaan';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/konfirmasipenyewaan');
            $this->load->view('templates/footer');
        } else {
            $id_permohonan = $this->input->post('suratcek');
            $data = $this->db->get_where('tpermohonan', ['id_permohonan' => $id_permohonan])->row_array();
            if ($data == "") {
                $data['title'] = 'APPENTAS - Id Salah';
                $this->load->view('templates/header', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('user/idsalah', $data);
                $this->load->view('templates/footer');
            } else {
                $datapermohonan = [
                    'id_permohonan' => $id_permohonan,
                ];
                $this->session->set_userdata($datapermohonan);
                $this->tambah_penyewaan();
            }
        }
    }

    public function konfirmasipembayaran()
    {
        $data['title'] = 'APPENTAS - Konfirmasi';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/konfirmasipembayaran', $data);
        $this->load->view('templates/footer');
    }

    public function detailpembayaran()
    {

        $this->form_validation->set_rules(
            'invoicecek',
            'invoicecek',
            'trim|required|is_unique[tpenyewaan.id_sewa]',
            array(
                'required' => 'Invoice tidak boleh kosong',
                'is_unique' => 'Invoice sudah ada/sudah melakukan konfirmasi'
            )
        );

        $hasil = $this->m_penyewaan->detailkonfirmasi($this->input->post('invoicecek'));
        $data['title'] = 'APPENTAS - Detail Pembayaran';
        if ($hasil != null) {
            $data['detail'] = $hasil;
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/detailpembayaran', $data);
            $this->load->view('templates/footer');
        } elseif ($this->form_validation->run() == false) {
            $this->konfirmasipembayaran();
        } else {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/invoicesalah', $data);
            $this->load->view('templates/footer');
        }
    }

    public function berhasil()
    {
        if (empty($_FILES['buktibayar']['name'])) {
            $this->form_validation->set_rules(
                'buktibayar',
                'required',
                array('required' => 'Anda belum upload bukti transfer.')
            );
        }
        $config['upload_path'] = './assets/bukti';
        $config['allowed_types'] = 'png|jpg|jpeg|pdf';
        $config['max_size'] = '10000';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('buktibayar')) {
            $data['title'] = 'APPENTAS - Gagal';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/gagal', $data);
            $this->load->view('templates/footer');
        } else {
            $gambar = $this->upload->data('file_name');
            $this->m_penyewaan->gambar($this->input->post('id_sewa'), $gambar);
            $data['title'] = 'APPENTAS - Terima Kasih';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/berhasil', $data);
            $this->load->view('templates/footer');
        }
    }

    public function tambah_penyewaan($id_permohonan = null)
    {


        $penyewaan = array(
            'data_ruangan' => $this->m_penyewaan->tampil_data_ruangan(),
            'data_permohonan' => $this->m_penyewaan->tampil_data_permohonan()

        );
        if ($id_permohonan == null) {

            $id = $this->m_permohonan->konfirmasiid($this->input->post('suratcek'));
        } else {
            $id = $this->m_permohonan->konfirmasiid($id_permohonan);
        }

        $data['detail'] = $id;
        $data['title'] = 'APPENTAS - Pemesanan';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/tambah_penyewaan', $penyewaan);
        $this->load->view('templates/footer');
    }

    public function ruangan()
    {

        $id_ruangan = $this->input->post('id_ruangan');
        $data = $this->m_penyewaan->jqRuangan($id_ruangan);
        echo json_encode($data);
    }



    public function tambah_penyewaan_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_penyewaan($this->input->post('id_permohonan'));
        } else {
            $tgl_sewa  = $this->input->post('tgl_sewa');
            $id_permohonan = $this->input->post('id_permohonan');
            $nm_kegiatan    = $this->input->post('nm_kegiatan');
            $id_ruangan =  $this->input->post('id_ruangan');
            $potongan = $this->input->post('potongan');
            $quantity_r = $this->input->post('quantity_r');
            $lm_sewa = $this->input->post('lm_sewa');
            $peserta = $this->input->post('peserta');
            $tgl_mulai = $this->input->post('tgl_mulai');
            $tgl_berakhir = $this->input->post('tgl_berakhir');
            $penyelenggara = $this->input->post('penyelenggara');
            $total_biaya = $this->input->post('total_biaya');

            $data = array(
                'tgl_sewa'   => $tgl_sewa,
                'id_permohonan'  => $id_permohonan,
                'nm_kegiatan'     => $nm_kegiatan,
                'id_ruangan'  => $id_ruangan,
                'potongan'  => $potongan,
                'quantity_r'  => $quantity_r,
                'lm_sewa'  => $lm_sewa,
                'peserta'  => $peserta,
                'tgl_mulai'  => $tgl_mulai,
                'tgl_berakhir'  => $tgl_berakhir,
                'penyelenggara'  => $penyelenggara,
                'konfirmasi'  => 'Menunggu',
                'total_biaya'  => $total_biaya,
                'is_read2' => '0',



            );

            $id_sewa = $this->m_penyewaan->tambah_data($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Jadwal Berhasil Ditambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('C_User/Penyewaan/checkout/' . $id_sewa);
        }
    }

    public function cektanggal()
    {

        echo $this->m_penyewaan->cektanggal(
            $this->input->post('id_ruangan'),
            $this->input->post('tgl_mulai'),
            $this->input->post('tgl_berakhir')

        );

        //$data['id_ruangan'] = getNamaR();
    }
    public function cektanggalruangan()
    {

        echo $this->m_penyewaan->cektanggalruangan(
            $this->input->post('id_ruangan'),
            $this->input->post('tanggal')

        );
    }

    public function _rules()
    {

        $this->form_validation->set_rules(
            'tgl_sewa',
            'Tanggal Sewa'

        );
        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required',
            array('required' => 'Nama harus diisi.')
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
            'nm_kegiatan',
            'Nama Kegiatan',
            'required',
            array('required' => 'Nama Kegiatan harus diisi.')
        );
        $this->form_validation->set_rules(
            'nm_ruangan',
            'Nama Ruangan'

        );
        $this->form_validation->set_rules(
            'harga',
            'Harga'


        );



        $this->form_validation->set_rules(
            'potongan',
            'potongan'

        );
        $this->form_validation->set_rules(
            'quantity_r',
            'Jumlah Ruangan'

        );
        $this->form_validation->set_rules(
            'lm_sewa',
            'Lama Sewa'

        );
        $this->form_validation->set_rules(
            'peserta',
            'Jumlah Peserta',
            'required',
            array('required' => 'Jumlah Peserta harus diisi dulu')
        );
        $this->form_validation->set_rules(
            'tgl_mulai',
            'Tanggal Mulai',
            'required',
            array('required' => 'Tanggal Mulai harus dipilih.')
        );
        $this->form_validation->set_rules(
            'tgl_berakhir',
            'Tanggal Berakhir',
            'required',
            array('required' => 'Tanggal Berakhir harus dipilih.')
        );

        $this->form_validation->set_rules(
            'penyelenggara',
            'Penyelenggara',
            'required',
            array('required' => 'Penyelenggara harus diisi dulu.')
        );
        $this->form_validation->set_rules(
            'total_biaya',
            'Total Biaya'

        );
    }
}
