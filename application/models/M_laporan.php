<?php

class M_laporan extends CI_Model
{

    public function tampil_penyewaan()
    {
        $this->db->select('*');
        $this->db->from('tpenyewaan')
            ->join('truangan', 'tpenyewaan.id_ruangan=truangan.id_ruangan')
            ->group_by('tgl_sewa')
            ->order_by('tpenyewaan.tgl_sewa', 'DESC');

        $query = $this->db->get();

        $return = array();
    }

    public function sub_buku_pinjam($no_pinjam)
    {
        $this->db->select('buku.judul, pinjam.id_pinjam')
            ->from('pinjam')
            ->join('buku', 'pinjam.id_buku = buku.id_buku')
            ->where('pinjam.no_pinjam', $no_pinjam);
        return $this->db->get()->result();
    }

    public function sub_pengarang($barcode)
    {
        $this->db->select('buku.id_pengarang, pengarang.id_pengarang, pengarang.nama_pengarang')
            ->from('pengarang')
            ->join('buku', 'pengarang.id_pengarang = buku.id_pengarang')
            ->where('buku.barcode', $barcode);
        return $this->db->get()->result();
    }

    public function filter_kembali($tgl_awal, $tgl_akhir)
    {
        $this->db->select('*');
        $this->db->from('pengembalian')
            ->join('anggota', 'pengembalian.nis=anggota.nis')
            ->join('buku', 'pengembalian.id_buku=buku.id_buku')
            ->where('pengembalian.tgl_pinjam >=', $tgl_awal)
            ->where('pengembalian.tgl_pinjam <=', $tgl_akhir)
            ->group_by('nama_siswa')
            ->group_by('tgl_dikembalikan')
            ->order_by('pengembalian.tgl_dikembalikan', 'DESC');

        $query = $this->db->get();

        $return = array();

        foreach ($query->result() as $pinjam) {
            $return[$pinjam->no_pinjam] = $pinjam;
            $return[$pinjam->no_pinjam]->sub_buku_kembali = $this->sub_buku_kembali($pinjam->no_pinjam);
        }

        return $return;
    }

    public function filter_pinjam($tgl_awal, $tgl_akhir)
    {
        $this->db->select('*');
        $this->db->from('pinjam')
            ->join('anggota', 'pinjam.nis=anggota.nis')
            ->join('buku', 'pinjam.id_buku=buku.id_buku')
            ->where('pinjam.tgl_pinjam >=', $tgl_awal)
            ->where('pinjam.tgl_pinjam <=', $tgl_akhir)
            ->group_by('nama_siswa')
            ->group_by('tgl_pinjam')
            ->order_by('pinjam.tgl_pinjam', 'DESC');

        $query = $this->db->get();

        $return = array();

        foreach ($query->result() as $pinjam) {
            $return[$pinjam->no_pinjam] = $pinjam;
            $return[$pinjam->no_pinjam]->sub_buku_pinjam = $this->sub_buku_pinjam($pinjam->no_pinjam);
        }

        return $return;
    }

    public function tampil_buku()
    {
        $this->db->select('*');
        $this->db->from('buku')
            ->join('kategori', 'buku.id_kategori=kategori.id_kategori')
            ->join('asal_buku', 'buku.id_asal=asal_buku.id_asal')
            ->join('penerbit', 'buku.id_penerbit=penerbit.id_penerbit')
            ->join('pengarang', 'buku.id_pengarang=pengarang.id_pengarang')
            ->group_by('judul');

        $query = $this->db->get();

        $return = array();

        foreach ($query->result() as $buku) {
            $return[$buku->id_pengarang] = $buku;
            $return[$buku->id_pengarang]->sub_pengarang = $this->sub_pengarang($buku->barcode);
        }

        return $return;
    }

    public function tampil_kategori()
    {
        $this->db->select("kategori.nama_kategori as nama_kategori, kategori.id_kategori as id_kategori, COUNT(buku.id_buku) as jumlah")
            ->from("kategori")
            ->join("buku", "kategori.id_kategori = buku.id_kategori", "left")
            ->group_by("kategori.nama_kategori");
        return $this->db->get()->result();
    }

    public function tampil_asal()
    {
        $this->db->select("asal_buku.nama_asal as nama_asal, asal_buku.id_asal as id_asal, COUNT(buku.id_buku) as jumlah")
            ->from('asal_buku')
            ->join("buku", "asal_buku.id_asal = buku.id_asal", "left")
            ->group_by("asal_buku.nama_asal");
        return $this->db->get()->result();
    }

    public function tampil_anggota()
    {
        $this->db->select('*');
        $this->db->from('anggota')
            ->join('kelas', 'anggota.id_kelas=kelas.id_kelas')
            ->join('jurusan', 'anggota.id_jurusan=jurusan.id_jurusan');

        return $this->db->get()->result();
    }

    public function tampil_kelas()
    {
        $this->db->select('*');
        $this->db->from('kelas');
        return $this->db->get()->result();
    }

    public function tampil_jurusan()
    {
        $this->db->select('*');
        $this->db->from('jurusan');
        return $this->db->get()->result();
    }
}
