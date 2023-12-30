<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{

    public function tampil_data($table)
    {

        return $this->db->get($table);
    }

    public function foto($id_admin, $foto)
    {
        $this->db->set('foto', $foto);
        $this->db->where('id_admin', $id_admin);
        return $this->db->update('tadmin');
    }
}
