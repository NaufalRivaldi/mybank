<?php

class Pengeluaran_model extends CI_Model{
    private $_table = 'tb_transaksi';
    public $kode_transaksi;
    public $id_user;
    public $tgl_transaksi;
    public $keterangan;
    public $jenis = 'pengeluaran';
    public $nominal;

    public function rules(){
        return [
            [
                'field' => 'id_user',
                'label' => 'id_user',
                'rules' => 'required'
            ],
            [
                'field' => 'tgl_transaksi',
                'label' => 'tgl_transaksi',
                'rules' => 'required'
            ],
            [
                'field' => 'keterangan',
                'label' => 'keterangan',
                'rules' => 'required'
            ],
            [
                'field' => 'nominal',
                'label' => 'nominal',
                'rules' => 'required|numeric'
            ]
        ];
    }

    public function setKode(){
        if(!empty($this->getLastKode())){
            $kode = $this->getLastKode();
        }else{
            $kode = "T000";
        }

        $number = substr($kode, 1, strlen($kode));
        $val = $number + 1;
        $zero = strlen($val);
        if($zero == 1){
            $zero = "00";
        }else if($zero == 2){
            $zero = "0";
        }else{
            $zero = "";
        }
        
        $number = 'T'.$zero.$val;
        return $number;
    }

    public function getLastKode(){
        $query = $this->db->limit(1)->order_by('kode_transaksi', 'DESC')->get($this->_table)->row();

        if(empty($query)){
            $kode = "";
        }else{
            $kode = $query->kode_transaksi;
        }

        return $kode;
    }

    public function save(){
        $post = $this->input->post();
        $this->kode_transaksi = $this->setKode();
        $this->id_user = $post['id_user'];
        $this->tgl_transaksi = $post['tgl_transaksi'];
        $this->keterangan = $post['keterangan'];
        $this->nominal = $post['nominal'];

        $this->spending($this->nominal, $this->id_user);
        $this->minTabungan($this->nominal, $this->id_user, $post['simpan']);
        return $this->db->insert($this->_table, $this);
    }

    public function spending($nominal, $id_user){
        $user = $this->db->get_where('tb_user', ['id_user' => $id_user])->row();
        $nominal = $user->saldo - $nominal;
        
        $data = array('saldo' => $nominal);
        return $this->db->update('tb_user', $data , array('id_user' => $id_user));
    }

    public function minTabungan($nominal, $id_user, $simpan){
        if($simpan == 2){
            $user = $this->db->get_where('tb_user', ['id_user' => $id_user])->row();
            $nominal = $user->tabungan - $nominal;
            
            $data = array('tabungan' => $nominal);
            return $this->db->update('tb_user', $data , array('id_user' => $id_user));
        }
    }
}