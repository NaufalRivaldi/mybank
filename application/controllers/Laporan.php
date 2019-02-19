<?php

class Laporan extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('laporan_model');
    }

    // pemakaian uang
    public function pemakaian(){
        $data['tgl'] = $this->laporan_model->tglTransaksi();
        $this->load->view('laporan/pemakaian/list', $data);
    }
}