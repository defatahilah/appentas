<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_penyewaan extends CI_Model
{

    public function tampil_data()
    {
        $this->db->order_by('id_sewa', 'DESC');
        $this->db->select('tpenyewaan.id_sewa as id_sewa, tpenyewaan.tgl_sewa as tgl_sewa,tpenyewaan.id_permohonan as id_permohonan,
         tpenyewaan.nm_kegiatan as nm_kegiatan,
        tpenyewaan.id_ruangan as id_ruangan, tpenyewaan.quantity_r as quantity_r, tpenyewaan.lm_sewa as lm_sewa,tpenyewaan.peserta as peserta,
        tpenyewaan.tgl_mulai as tgl_mulai, tpenyewaan.tgl_berakhir as tgl_berakhir, 
         tpenyewaan.penyelenggara as penyelenggara, tpenyewaan.buktibyr as buktibyr,
        tpenyewaan.total_biaya as total_biaya, tpenyewaan.konfirmasi as konfirmasi,
        truangan.nm_ruangan as nm_ruangan, truangan.harga as harga, truangan.potongan as potongan,
        tpermohonan.id_permohonan as id_permohonan, tpermohonan.nama as nama,tpermohonan.alamat as alamat,
        tpermohonan.email as email, tpermohonan.no_telp as no_telp
        ');
        $this->db->from('tpenyewaan');
        $this->db->join('truangan', 'truangan.id_ruangan=tpenyewaan.id_ruangan');
        $this->db->join('tpermohonan', 'tpermohonan.id_permohonan=tpenyewaan.id_permohonan');
        $query = $this->db->get();
        return $query->result();
    }

    public function tampil_data_notif()
    {
        $this->db->order_by('tgl_sewa', 'DESC');
        $this->db->select('tpenyewaan.id_sewa as id_sewa, tpenyewaan.tgl_sewa as tgl_sewa,tpenyewaan.id_permohonan as id_permohonan,
         tpenyewaan.nm_kegiatan as nm_kegiatan,
        tpenyewaan.id_ruangan as id_ruangan, tpenyewaan.quantity_r as quantity_r, tpenyewaan.lm_sewa as lm_sewa,tpenyewaan.peserta as peserta,
        tpenyewaan.tgl_mulai as tgl_mulai, tpenyewaan.tgl_berakhir as tgl_berakhir, 
         tpenyewaan.penyelenggara as penyelenggara, tpenyewaan.buktibyr as buktibyr,
        tpenyewaan.total_biaya as total_biaya, tpenyewaan.konfirmasi as konfirmasi,tpenyewaan.is_read2 as is_read2,
        truangan.nm_ruangan as nm_ruangan, truangan.harga as harga, truangan.potongan as potongan,
        tpermohonan.id_permohonan as id_permohonan, tpermohonan.nama as nama,tpermohonan.alamat as alamat,
        tpermohonan.email as email, tpermohonan.no_telp as no_telp
        ');
        $this->db->from('tpenyewaan');
        $this->db->join('truangan', 'truangan.id_ruangan=tpenyewaan.id_ruangan');
        $this->db->join('tpermohonan', 'tpermohonan.id_permohonan=tpenyewaan.id_permohonan');
        $this->db->where('is_read2', '0');
        $query = $this->db->get();
        return $query->result();
    }

    public function tampil_byuser()
    {
        $this->db->order_by('tgl_sewa', 'DESC');
        $this->db->select('tpenyewaan.id_sewa as id_sewa, tpenyewaan.tgl_sewa as tgl_sewa,tpenyewaan.id_permohonan as id_permohonan,
         tpenyewaan.nm_kegiatan as nm_kegiatan, 
        tpenyewaan.id_ruangan as id_ruangan, tpenyewaan.quantity_r as quantity_r, tpenyewaan.lm_sewa as lm_sewa,tpenyewaan.peserta as peserta,
        tpenyewaan.tgl_mulai as tgl_mulai, tpenyewaan.tgl_berakhir as tgl_berakhir, 
         tpenyewaan.penyelenggara as penyelenggara, tpenyewaan.buktibyr as buktibyr,
        tpenyewaan.total_biaya as total_biaya, tpenyewaan.konfirmasi as konfirmasi,
        truangan.nm_ruangan as nm_ruangan, truangan.harga as harga, truangan.potongan as potongan,
        tpermohonan.id_permohonan as id_permohonan, tpermohonan.nama as nama,tpermohonan.alamat as alamat,
        tpermohonan.email as email, tpermohonan.no_telp as no_telp
        ');
        $this->db->from('tpenyewaan');
        $this->db->join('truangan', 'truangan.id_ruangan=tpenyewaan.id_ruangan');
        $this->db->join('tpermohonan', 'tpermohonan.id_permohonan=tpenyewaan.id_permohonan');
        $this->db->where('tpenyewaan.konfirmasi', 'Sudah Dikonfirmasi');
        $currentDate = date('Y-m-d');
        $this->db->where('tpenyewaan.tgl_berakhir >=', $currentDate);
        $query = $this->db->get();
        return $query->result();
    }

    public function tampilcheckout($id_sewa)
    {
        $this->db->select('tpenyewaan.id_sewa as id_sewa, tpenyewaan.tgl_sewa as tgl_sewa,tpenyewaan.id_permohonan as id_permohonan,
        tpenyewaan.id_ruangan as id_ruangan,  tpenyewaan.potongan as potongan,
        tpenyewaan.penyelenggara as penyelenggara, tpenyewaan.quantity_r as quantity_r, tpenyewaan.lm_sewa as lm_sewa,tpenyewaan.peserta as peserta,
        tpenyewaan.konfirmasi as konfirmasi, tpenyewaan.total_biaya as total_biaya,
        truangan.nm_ruangan as nm_ruangan, truangan.harga as harga, 
        tpermohonan.id_permohonan as id_permohonan, tpermohonan.nama as nama,tpermohonan.alamat as alamat,
        tpermohonan.email as email, tpermohonan.no_telp as no_telp
        ');
        $this->db->from('tpenyewaan');
        $this->db->join('truangan', 'truangan.id_ruangan=tpenyewaan.id_ruangan');
        $this->db->join('tpermohonan', 'tpermohonan.id_permohonan=tpenyewaan.id_permohonan');
        $this->db->where('tpenyewaan.id_sewa', $id_sewa);
        $query = $this->db->get();
        return $query->result();
    }

    public function detailkonfirmasi($id_sewa)
    {
        $this->db->select('tpenyewaan.id_sewa as id_sewa, tpenyewaan.tgl_sewa as tgl_sewa,tpenyewaan.id_permohonan as id_permohonan,
        tpenyewaan.nm_kegiatan as nm_kegiatan, tpenyewaan.id_ruangan as id_ruangan,  tpenyewaan.potongan as potongan,
        tpenyewaan.penyelenggara as penyelenggara, tpenyewaan.buktibyr as buktibyr, tpenyewaan.quantity_r as quantity_r, tpenyewaan.lm_sewa as lm_sewa,tpenyewaan.peserta as peserta,
        tpenyewaan.konfirmasi as konfirmasi, tpenyewaan.total_biaya as total_biaya,
        truangan.nm_ruangan as nm_ruangan, truangan.harga as harga,
        tpermohonan.id_permohonan as id_permohonan, tpermohonan.nama as nama,tpermohonan.alamat as alamat,
        tpermohonan.email as email, tpermohonan.no_telp as no_telp 
        ');
        $this->db->from('tpenyewaan');
        $this->db->join('truangan', 'truangan.id_ruangan=tpenyewaan.id_ruangan');
        $this->db->join('tpermohonan', 'tpermohonan.id_permohonan=tpenyewaan.id_permohonan');
        $this->db->where('id_sewa', $id_sewa);
        $this->db->where('konfirmasi', 'Menunggu');
        $query = $this->db->get();
        return $query->result();
        //return $this->db->get_where('tpenyewaan', array('id_sewa' => $id_sewa, 'konfirmasi' => 'Menunggu'))->result();
    }

    public function tambah_data($data)
    {
        $this->db->insert('tpenyewaan', $data);
        return $this->db->insert_id();
    }



    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function ubah_data($id_sewa)
    {
        $this->db->select('tpenyewaan.id_sewa as id_sewa, tpenyewaan.tgl_sewa as tgl_sewa,tpenyewaan.id_permohonan as id_permohonan,
         tpenyewaan.nm_kegiatan as nm_kegiatan, 
        tpenyewaan.id_ruangan as id_ruangan, tpenyewaan.quantity_r as quantity_r, tpenyewaan.lm_sewa as lm_sewa,tpenyewaan.peserta as peserta,
        tpenyewaan.tgl_mulai as tgl_mulai, tpenyewaan.tgl_berakhir as tgl_berakhir, 
        tpenyewaan.penyelenggara as penyelenggara, tpenyewaan.konfirmasi as konfirmasi,
        tpenyewaan.total_biaya as total_biaya,
        truangan.nm_ruangan as nm_ruangan, truangan.harga as harga,truangan.potongan as potongan,
        tpermohonan.id_permohonan as id_permohonan, tpermohonan.nama as nama,tpermohonan.alamat as alamat,
        tpermohonan.email as email, tpermohonan.no_telp as no_telp');
        $this->db->from('tpenyewaan');
        $this->db->join('truangan', 'truangan.id_ruangan=tpenyewaan.id_ruangan');
        $this->db->join('tpermohonan', 'tpermohonan.id_permohonan=tpenyewaan.id_permohonan');
        $this->db->where('tpenyewaan.id_sewa', $id_sewa);
        $query = $this->db->get();
        return $query->result();
    }
    public function ubah_data_notif($id_sewa)
    {
        $this->db->select('tpenyewaan.id_sewa as id_sewa, tpenyewaan.tgl_sewa as tgl_sewa,tpenyewaan.id_permohonan as id_permohonan,
         tpenyewaan.nm_kegiatan as nm_kegiatan, 
        tpenyewaan.id_ruangan as id_ruangan, tpenyewaan.quantity_r as quantity_r, tpenyewaan.lm_sewa as lm_sewa,tpenyewaan.peserta as peserta,
        tpenyewaan.tgl_mulai as tgl_mulai, tpenyewaan.tgl_berakhir as tgl_berakhir, 
        tpenyewaan.penyelenggara as penyelenggara, tpenyewaan.buktibyr as buktibyr,tpenyewaan.konfirmasi as konfirmasi,
        tpenyewaan.total_biaya as total_biaya,tpenyewaan.is_read2 as is_read2,
        truangan.nm_ruangan as nm_ruangan, truangan.harga as harga,truangan.potongan as potongan,
        tpermohonan.id_permohonan as id_permohonan, tpermohonan.nama as nama,tpermohonan.alamat as alamat,
        tpermohonan.email as email, tpermohonan.no_telp as no_telp');
        $this->db->from('tpenyewaan');
        $this->db->join('truangan', 'truangan.id_ruangan=tpenyewaan.id_ruangan');
        $this->db->join('tpermohonan', 'tpermohonan.id_permohonan=tpenyewaan.id_permohonan');
        $this->db->where('tpenyewaan.id_sewa', $id_sewa);
        $this->db->where('is_read2', '0');
        $query = $this->db->get();
        return $query->result();
    }

    public function ubah_data_aksi($where, $data)
    {
        $this->db->set($data);
        $this->db->where($where);
        $this->db->update('tpenyewaan');
    }
    public function ubah_data_aksi_notif($where, $data)
    {
        $this->db->set($data);
        $this->db->where($where);
        $this->db->update('tpenyewaan');
    }

    public function tampil_data_ruangan()
    {
        $this->db->select('*');
        $this->db->from('truangan');
        $this->db->order_by('id_ruangan', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
    public function tampil_data_permohonan()
    {
        $this->db->select('*');
        $this->db->from('tpermohonan');
        $this->db->order_by('id_permohonan', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
    //public function dataRuangan()
    // {
    //   $this->db->select('*');
    // $this->db->from('truangan');
    // $this->db->order_by('id_ruangan', 'ASC');
    //return $this->db->get()->result();
    //}
    public function jqRuangan($id_ruangan)
    {
        $this->db->select('*');
        $this->db->from('truangan');
        if (is_array($id_ruangan)) {
            $this->db->where_in('id_ruangan', $id_ruangan);
        } else {
            $this->db->where('id_ruangan', $id_ruangan);
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function gambar($id, $gambar)
    {
        $this->db->set('buktibyr', $gambar);
        $this->db->where('id_sewa', $id);
        return $this->db->update('tpenyewaan');
    }

    public function acc($id)
    {
        $this->db->set('konfirmasi', 'Sudah Dikonfirmasi');
        $this->db->where('id_sewa', $id);

        return $this->db->update('tpenyewaan');
    }
    public function tolak($id)
    {
        $this->db->set('konfirmasi', 'Ditolak');
        $this->db->where('id_sewa', $id);
        return $this->db->update('tpenyewaan');
    }
    public function datapenyewaan()
    {

        $query = $this->db->query("SELECT * FROM tpenyewaan JOIN truangan ON tpenyewaan.id_ruangan = truangan.id_ruangan JOIN tpermohonan ON tpenyewaan.id_permohonan = tpermohonan.id_permohonan WHERE konfirmasi = 'Sudah Dikonfirmasi' ORDER BY id_sewa ASC");

        return $query->result();
    }

    public function gettahun()
    {
        $query = $this->db->query("SELECT YEAR(tgl_mulai) AS tahun FROM tpenyewaan JOIN truangan ON tpenyewaan.id_ruangan = truangan.id_ruangan JOIN tpermohonan ON tpenyewaan.id_permohonan = tpermohonan.id_permohonan GROUP BY YEAR(tgl_mulai) ORDER BY YEAR (tgl_mulai) and konfirmasi ='Sudah Dikonfirmasi' ASC");

        return $query->result();
    }



    public function filterbybulan($tahun1, $bulanawal)
    {
        $query = $this->db->query("SELECT * FROM tpenyewaan JOIN truangan ON tpenyewaan.id_ruangan = truangan.id_ruangan 
        JOIN tpermohonan ON tpenyewaan.id_permohonan = tpermohonan.id_permohonan 
        WHERE YEAR(tgl_mulai) = '$tahun1' 
        and MONTH(tgl_mulai) = '$bulanawal'and konfirmasi ='Sudah Dikonfirmasi' ");

        return $query->result();
    }

    /* public function cektanggal($id_ruangan, $tanggal)
    {
        $query = $this->db->get_where('tpenyewaan', array('id_ruangan' => $id_ruangan, 'tgl_mulai' => $tanggal));
        return $query->num_rows();
    }*/
    public function cektanggal($id_ruangan, $tanggal1, $tanggal2)
    {
        $tanggal1 = date('Y-m-d', strtotime($tanggal1));
        $tanggal2 = date('Y-m-d', strtotime($tanggal2));
        $query = $this->db->query("SELECT * FROM tpenyewaan WHERE id_ruangan = $id_ruangan AND (tgl_mulai <= '$tanggal1' AND  tgl_berakhir >= '$tanggal1') OR (tgl_mulai <= '$tanggal2' AND tgl_berakhir >= '$tanggal2')");

        /*$query = $this->db->query("SELECT * from tpenyewaan WHERE id_ruangan = id_ruangan
         AND day (tgl_mulai) >= $tanggal1  AND day (tgl_berakhir) <= $tanggal2  ");


        $this->db->select('*');
        $this->db->from('tpenyewaan');
        $this->db->where('id_ruangan', $id_ruangan);
        $this->db->where('tgl_mulai >= date ("' . $tanggal1 . '")')
            ->where('tgl_berakhir <= date("' . $tanggal2 . '")');*/

        //$query = $this->db->get();
        //echo $this->db->last_query();
        return $query->num_rows();
    }

    public function cektanggalruangan($id_ruangan, $tanggal)
    {

        $this->db->select('*');
        $this->db->from('tpenyewaan');
        $this->db->where('id_ruangan', $id_ruangan);
        $this->db->where('tgl_mulai <=', $tanggal);
        $this->db->where('tgl_berakhir >=', $tanggal);
        $query = $this->db->get();
        return $query->num_rows();
    }
}
