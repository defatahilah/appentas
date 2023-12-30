<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ruangan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_ruangan');
    }

    public function index()
    {
        $id_ruangan = $this->input->post('id_ruangan');
        $data['title'] = 'APPENTAS - Data Ruangan';
        $data['truangan'] = $this->m_ruangan->tampil_data('truangan')->result();
        //$data['tgambar'] = $this->m_ruangan->tampilgambar($id_ruangan);

        $data = json_decode(json_encode($data), true);
        $this->load->view('templatesb/header', $data);
        // $this->load->view('templates/sidebar');
        $this->load->view('templatesb/topbar', $data);
        $this->load->view('user/Ruangan', $data);
        $this->load->view('templatesb/footer');
    }

    public function tampil_gambar()
    {
        $id_ruangan = $this->input->get('id_ruangan');
        $data = $this->m_ruangan->tampilgambar($id_ruangan);
        $i = 1;
        foreach ($data as $gambar) : ?>
            <div class="carousel-item <?= $i == 1 ? 'active' : '' ?>">
                <img class="d-block w-100" src="<?= base_url('assets/img/ruangan/') ?><?= $gambar->gambar ?>" id="gambardetail">
            </div>
            <?php $i++ ?>
        <?php endforeach ?>
<?php
    }
}
