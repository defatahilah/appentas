<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_jumlah');
        $this->load->model('m_admin');
        $this->load->model('m_permohonan');
        $this->load->model('m_penyewaan');
        logged_in();
        /**if (!$this->session->userdata('username')) {
            redirect('Login');
        }*/
    }
    public function dashboard_vadmin()
    {
        $jumlah_data = array(
            'data_ruangan' => $this->m_jumlah->data_ruangan(),
            'data_permohonan' => $this->m_jumlah->data_permohonan(),
            'data_penyewaan' => $this->m_jumlah->data_penyewaan()
        );

        $data['admin']   = $this->db->get_where('tadmin', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'APPENTAS - Admin';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin', $data);
        $this->load->view('templates/topbaradmin', $data);
        $this->load->view('v_admin/index', $jumlah_data);
        $this->load->view('templates/footer');
    }

    public function profil()
    {
        $data['admin']   = $this->db->get_where('tadmin', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'APPENTAS - Profil';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebaradmin', $data);
        $this->load->view('templates/topbaradmin', $data);
        $this->load->view('admin/profil');
        $this->load->view('templates/footer');
    }
    public function editprofil()
    {
        $data['admin']   = $this->db->get_where('tadmin', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'APPENTAS - Profil';
        $this->form_validation->set_rules('admin', 'Nama Admin', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebaradmin', $data);
            $this->load->view('templates/topbaradmin', $data);
            $this->load->view('admin/editprofil');
            $this->load->view('templates/footer');
        } else {

            $id_admin = $this->input->post('id_admin');
            $admin = $this->input->post('admin');
            $username = $this->input->post('username');

            $upload_image = $_FILES['foto']['name'];

            if ($upload_image) {
                $config['upload_path'] = './assets/img/profile/';
                $config['allowed_types'] = 'gif|png|jpg|jpeg';
                $config['max_size'] = '2048';
                $this->load->library('upload', $config);
                //$this->upload->initialize($config);
                if ($this->upload->do_upload('foto')) {
                    $old_image = $data['tadmin']['foto'];
                    if ($old_image != 'profile.png') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $foto = $this->upload->data('file_name');
                    $this->db->set('foto', $foto);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('admin', $admin);
            $this->db->where('username', $username);
            $this->db->update('tadmin');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success role="alert">
            Profil Diubah!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('Profil');
        }
    }
    public function notif()
    {
        $jumlah_notif = array('data_notif' => $this->m_jumlah->data_penyewaannotif());
        $this->load->view('admin/notif', $jumlah_notif);
    }
}
