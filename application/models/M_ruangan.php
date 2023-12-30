<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_ruangan extends CI_Model
{

    public function tampil_data($table)
    {
        $this->db->order_by('id_ruangan', 'ASC');
        return $this->db->get($table);
    }
    public function tambah_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function gambar($id, $gambar)
    {
        $this->db->set('gambar', $gambar);
        $this->db->where('id_ruangan', $id);
        return $this->db->update('truangan');
    }
    public function ubah_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function ubah_data_aksi($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hargaRuangan()
    {
        $this->db->select('*');
        $this->db->from('truangan');
        // $this->db->order_by('id_ruangan', 'ASC');
        return $this->db->get();
    }
    public function tampilgambar($id_ruangan)
    {
        $this->db->select('*');
        $this->db->from('tgambar');
        $this->db->where('id_ruangan', $id_ruangan);
        $query = $this->db->get();
        return $query->result();
    }
}
