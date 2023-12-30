<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_permohonan extends CI_Model
{

    public function tampil_data()
    {
        $this->db->order_by('id_permohonan', 'DESC');
        $this->db->select('tpermohonan.id_permohonan as id_permohonan,tpermohonan.tgl_surat as tgl_surat,tpermohonan.nama as nama,tpermohonan.alamat as
        alamat,tpermohonan.email as email,tpermohonan.no_telp as no_telp,tpermohonan.permohonan as permohonan,tpermohonan.status as status');
        $this->db->from('tpermohonan');
        $query = $this->db->get();
        return $query->result();
    }
    public function tampil_data_notif()
    {
        $this->db->order_by('id_permohonan', 'DESC');
        $this->db->select('tpermohonan.id_permohonan as id_permohonan,tpermohonan.tgl_surat as tgl_surat,tpermohonan.nama as nama,tpermohonan.alamat as
        alamat,tpermohonan.email as email,tpermohonan.no_telp as no_telp,tpermohonan.permohonan as permohonan,tpermohonan.status as status,
        tpermohonan.is_read as is_read');
        $this->db->from('tpermohonan');
        $this->db->where('is_read', '0');
        $query = $this->db->get();
        return $query->result();
    }
    public function tambah_data($data)
    {
        $this->db->insert('tpermohonan', $data);
        $this->db->join('tpenyewaan', 'tpenyewaan.id_permohonan = tpermohonan.id_permohonan');

        return $this->db->insert_id();
    }

    public function surat($id, $surat)
    {
        $this->db->set('permohonan', $surat);
        $this->db->where('id_permohonan', $id);
        return $this->db->update('tpermohonan');
    }

    public function konfirmasiid($id_permohonan)
    {
        $this->db->select('tpermohonan.id_permohonan as id_permohonan,tpermohonan.tgl_surat as tgl_surat, tpermohonan.nama as nama,tpermohonan.alamat as alamat,
        tpermohonan.email as email, tpermohonan.no_telp as no_telp
        ');
        $this->db->from('tpermohonan');
        $this->db->where('id_permohonan', $id_permohonan);
        $query = $this->db->get();
        return $query->result();
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function ubah_data_notif($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function ubah_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function ubah_data_aksi_notif($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function ubah_data_aksi($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
