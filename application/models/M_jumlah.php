<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_jumlah extends CI_Model
{
    function data_ruangan()
    {
        $query = $this->db->query("SELECT * FROM truangan");
        $total = $query->num_rows();
        return $total;
    }
    function data_permohonan()
    {
        $query = $this->db->query("SELECT * FROM tpermohonan ");
        $total = $query->num_rows();
        return $total;
    }
    function data_permohonan_notif()
    {
        $query = $this->db->query("SELECT * FROM tpermohonan where is_read='0' ");
        $total = $query->num_rows();
        return $total;
    }

    function data_penyewaan()
    {
        $query = $this->db->query("SELECT * FROM tpenyewaan  ");
        $total = $query->num_rows();
        return $total;
    }
    function data_penyewaan_notif()
    {
        $query = $this->db->query("SELECT * FROM tpenyewaan where is_read2='0' ");
        $total = $query->num_rows();
        return $total;
    }
    function data_penyewaanuser()
    {
        $query = $this->db->query("SELECT * FROM tpenyewaan WHERE konfirmasi = 'Sudah Dikonfirmasi'");
        $total = $query->num_rows();
        return $total;
    }
}
