<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_gambar extends CI_Model
{
    public function tampil_data()
    {
        $this->db->order_by('id_gambar', 'ASC');
        $this->db->select('tgambar.id_gambar as id_gambar, tgambar.gambar as gambar, tgambar.id_ruangan as id_ruangan, truangan.nm_ruangan as nm_ruangan, truangan.harga as harga, truangan.potongan as potongan, truangan.jmlh_r as jmlh_r, truangan.kapasitas as kapasitas, truangan.luas as luas');
        $this->db->from('tgambar');
        $this->db->join('truangan', 'truangan.id_ruangan=tgambar.id_ruangan');
        $query = $this->db->get();
        return $query->result();
    }
}
