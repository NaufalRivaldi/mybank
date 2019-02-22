<?php

class Laporan_model extends CI_Model{
    private $_table = 'tb_transaksi';

    public function tglTransaksi(){
        $query = $this->db->group_by('tgl_transaksi')->order_by('tgl_transaksi', 'DESC')->get($this->_table)->result();

        foreach ($query as $key => $value) {
            $data[] = $value->tgl_transaksi;
        }

        return $data;
    }
}