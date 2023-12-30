<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penyewaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_penyewaan');
        $this->load->model('m_permohonan');
        $this->load->model('m_jumlah');
        $this->load->helper(array('url'));
        date_default_timezone_set('Asia/Makassar');
        logged_in();
    }

    public function index()
    {
        $data['admin']   = $this->db->get_where('tadmin', ['username' =>
        $this->session->userdata('username')])->row_array();

        $data['title'] = 'APPENTAS - Jadwal Penyewaan';
        $data['tpenyewaan'] = $this->m_penyewaan->tampil_data('tpenyewaan');
        $data['data_ruangan'] = $this->m_penyewaan->tampil_data_ruangan();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin');
        $this->load->view('templates/topbaradmin', $data);
        $this->load->view('admin/Penyewaan', $data);
        $this->load->view('templates/footer');
    }
    public function notifpenyewaan()
    {
        $id_sewa = $this->uri->segment(4);

        $data['admin']   = $this->db->get_where('tadmin', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'APPENTAS - Jadwal Penyewaan';
        $data['tpenyewaan'] = $this->m_penyewaan->ubah_data_notif($id_sewa, 'tpenyewaan');
        $this->db->set('is_read2', '1');
        $this->db->where('id_sewa', $id_sewa);
        $this->db->update('tpenyewaan');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin');
        $this->load->view('templates/topbaradmin', $data);
        $this->load->view('admin/Penyewaan', $data);
        $this->load->view('templates/footer');
    }
    public function gettot()
    {
        $tot = $this->m_jumlah->data_penyewaan_notif();
        $msg = 'Tidak ada Notifikasi';
        $result['tot'] = $tot;
        $result['msg'] = $msg;
        echo json_encode($result);
    }
    public function laporan()
    {
        $data['admin']   = $this->db->get_where('tadmin', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'APPENTAS - Jadwal Penyewaan';
        $data['tpenyewaan'] = $this->m_penyewaan->tampil_data('tpenyewaan');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin');
        $this->load->view('templates/topbaradmin', $data);
        $this->load->view('admin/laporan', $data);
        $this->load->view('templates/footer');
    }
    public function tampilperiode()
    {
        $data['admin']   = $this->db->get_where('tadmin', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'Laporan';

        $data = json_decode(json_encode($data), true);
        $data['tahun'] = $this->m_penyewaan->gettahun();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin', $data);
        $this->load->view('templates/topbaradmin', $data);
        $this->load->view('admin/tampilperiode', $data);
        $this->load->view('templates/footer', $data);
    }
    public function tampildata()
    {
        $data['admin']   = $this->db->get_where('tadmin', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'Laporan';


        $tahun1 = $this->input->post('tahun1');
        $bulanawal = $this->input->post('bulanawal');

        $data['tahun'] = $tahun1;
        $data['bulanawal'] = $bulanawal;

        $data['tpenyewaan'] = $this->m_penyewaan->filterbybulan($tahun1, $bulanawal);
        $data = json_decode(json_encode($data), true);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin', $data);
        $this->load->view('templates/topbaradmin', $data);
        $this->load->view('admin/tampillaporan', $data);
        $this->load->view('templates/footer', $data);
    }
    public function cetakpenyewaan()
    {

        $data['tpenyewaan'] = $this->m_penyewaan->datapenyewaan();
        $data = json_decode(json_encode($data), true);
        $this->load->view('admin/cetakexcelall', $data);
    }
    public function cetakpenyewaanpdf()
    {


        $data['title'] = "Laporan  Keseluruhan";


        $data['admin']   = $this->db->get_where('tadmin', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['tpenyewaan'] = $this->m_penyewaan->datapenyewaan();
        $data = json_decode(json_encode($data), true);
        $this->load->view('admin/cetakpdfall', $data);
    }

    public function cetakpriode()
    {
        $data['title'] = 'Laporan';
        $data['admin']   = $this->db->get_where('tadmin', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data = json_decode(json_encode($data), true);
        $data['tahun'] = $this->m_penyewaan->gettahun();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin', $data);
        $this->load->view('templates/topbaradmin', $data);
        $this->load->view('admin/cetakfilter', $data);
        $this->load->view('templates/footer', $data);
    }

    public function filter()
    {

        $excel = $this->input->post('excel');
        $pdf = $this->input->post('pdf');
        $tahun1 = $this->input->post('tahun1');
        $bulanawal = $this->input->post('bulanawal');

        $data['admin']   = $this->db->get_where('tadmin', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['tahun'] = $tahun1;
        /**$data['bulanawal'] = $bulanawal;/** */
        $data['bulanawal'] = getBulan($bulanawal);
        $data['tpenyewaan'] = $this->m_penyewaan->filterbybulan($tahun1, $bulanawal);
        $data = json_decode(json_encode($data), true);
        $this->load->view('admin/cetakexcel', $data);
    }
    public function filterpdf()
    {


        $tahun1 = $this->input->post('tahun1');
        $bulanawal = $this->input->post('bulanawal');

        $data['tahun'] = $tahun1;
        $data['bulanawal'] = getBulan($bulanawal);
        $data['admin']   = $this->db->get_where('tadmin', ['username' =>
        $this->session->userdata('username')])->row_array();

        $data['tpenyewaan'] = $this->m_penyewaan->filterbybulan($tahun1, $bulanawal);
        $data = json_decode(json_encode($data), true);
        $this->load->view('admin/cetakpdf', $data);
    }
    public function download($gambar)
    {

        $this->load->helper('download');
        force_download(FCPATH . '/assets/bukti/' . $gambar, null);
    }

    public function acc($id_sewa)
    {
        $this->m_penyewaan->acc($id_sewa);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success role="alert">
        Status Dikonfirmasi
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button></div>');
        $this->index();
    }
    public function tolak($id_sewa)
    {
        $this->m_penyewaan->tolak($id_sewa);
        $this->session->set_flashdata('pesan', '<div class="alert alert-secondary role="alert">
        Status Ditolak
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button></div>');
        $this->index();
    }


    public function hapus_penyewaan_aksi($id_sewa)
    {
        $where = array('id_sewa' => $id_sewa);
        $this->m_penyewaan->hapus_data($where, 'tpenyewaan');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Jadwal Berhasil Dihapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
        redirect('Penyewaan');
    }

    public function ubah_penyewaan()
    {
        $data['admin']   = $this->db->get_where('tadmin', ['username' =>
        $this->session->userdata('username')])->row_array();
        $id_sewa = $this->uri->segment(2);
        $data['title'] = 'APPENTAS';
        $penyewaan = array(
            'data_penyewaan' => $this->m_penyewaan->ubah_data($id_sewa),
            'data_ruangan' => $this->m_penyewaan->tampil_data_ruangan(),
            'data_permohonan' => $this->m_penyewaan->tampil_data_permohonan()
        );

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin');
        $this->load->view('admin/Penyewaan', $penyewaan);
        $this->load->view('templates/footer');
    }

    public function ubah_penyewaan_aksi_notif()
    {
        $id_sewa             = $this->input->post('id_sewa');
        $tgl_sewa  = $this->input->post('tgl_sewa');
        $id_permohonan  = $this->input->post('id_permohonan');
        $nm_kegiatan    = $this->input->post('nm_kegiatan');
        $id_ruangan = $this->input->post('id_ruangan');
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
            'quantity_r'  => $quantity_r,
            'lm_sewa'  => $lm_sewa,
            'peserta'  => $peserta,
            'tgl_mulai'  => $tgl_mulai,
            'tgl_berakhir'  => $tgl_berakhir,
            'penyelenggara'  => $penyelenggara,
            'konfirmasi'  => 'Menunggu',
            'total_biaya'  => $total_biaya,
        );

        $where = array('id_sewa' => $id_sewa);

        $this->m_penyewaan->ubah_data_aksi_notif($where, $data, 'tpenyewaan');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success role="alert">
            Data Penyewaan Diubah!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
        redirect('Penyewaan');
    }
    public function ubah_penyewaan_aksi()
    {
        $id_sewa             = $this->input->post('id_sewa');
        $nm_kegiatan    = $this->input->post('nm_kegiatan');
        $id_ruangan = $this->input->post('id_ruangan');
        $quantity_r = $this->input->post('quantity_r');
        $lm_sewa = $this->input->post('lm_sewa');
        $peserta = $this->input->post('peserta');
        $tgl_mulai = $this->input->post('tgl_mulai');
        $tgl_berakhir = $this->input->post('tgl_berakhir');
        $penyelenggara = $this->input->post('penyelenggara');
        $total_biaya = $this->input->post('total_biaya');
        $konfirmasi_input = $this->input->post('konfirmasi');

        if ($konfirmasi_input === 'Sudah Dikonfirmasi') {
            $konfirmasi = 'Sudah Dikonfirmasi';
        } elseif ($konfirmasi_input === 'Menunggu') {
            $konfirmasi = 'Menunggu';
        } else {
            // Nilai default jika tidak cocok dengan kondisi di atas
            $konfirmasi = 'Menunggu';
        }

        $data = array(

            'nm_kegiatan'     => $nm_kegiatan,
            'id_ruangan'  => $id_ruangan,
            'quantity_r'  => $quantity_r,
            'lm_sewa'  => $lm_sewa,
            'peserta'  => $peserta,
            'tgl_mulai'  => $tgl_mulai,
            'tgl_berakhir'  => $tgl_berakhir,
            'penyelenggara'  => $penyelenggara,
            'konfirmasi' => $konfirmasi,
            'total_biaya'  => $total_biaya,
        );

        $where = array('id_sewa' => $id_sewa);

        $this->m_penyewaan->ubah_data_aksi($where, $data, 'tpenyewaan');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success role="alert">
            Data Penyewaan Diubah!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
        redirect('Penyewaan');
    }

    public function ruangan()
    {

        $id_ruangan = $this->input->post('id_ruangan');
        $data = $this->m_penyewaan->jqRuangan($id_ruangan);
        echo json_encode($data);
    }

    public function _rules()
    {
        $this->form_validation->set_rules(
            'tgl_sewa',
            'Tanggal Sewa',
            'required',
            array('required' => 'Tanggal Sewa harus diisi.')
        );
        $this->form_validation->set_rules(
            'id_permohonan',
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
            'trim|required|valid_email',
            array(
                'required' => 'Email tidak boleh kosong',
                'valid_email' => 'Email tidak benar'
            )
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
            'id_ruangan',
            'Nama Ruangan',
            'required',
            array('required' => 'Ruangan harus dipilih.')
        );
        $this->form_validation->set_rules(
            'harga',
            'Harga'


        );

        $this->form_validation->set_rules(
            'quantity_r',
            'Jumlah Ruangan',
            'required',
            array('required' => 'Jumlah Ruangan harus diisi.')
        );
        $this->form_validation->set_rules(
            'lm_sewa',
            'Lama Sewa'

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
            'keterangan',
            'Keterangan'

        );
        $this->form_validation->set_rules(
            'total_biaya',
            'Total Biaya'

        );
    }

    /*public function print()
    {

        $data['tpenyewaan'] = $this->m_admin->tampil_data('tpenyewaan')->result();
        $this->load->view('admin/print', $data);
    }*/
}
