<?php

class Transaksi extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('pemasukan_model');
        $this->load->model('pengeluaran_model');
        $this->load->library('form_validation');
    }

    // Pemasukkan
    public function pemasukan(){
        $pemasukan = $this->pemasukan_model;
        $validation = $this->form_validation;
        $validation->set_rules($pemasukan->rules());

        if($validation->run()){
            $pemasukan->save();
            $this->session->set_flashdata('flash', 'pemasukan');
            redirect('laporan/pemakaian');
        }

        $data['date'] = $date_now = date('Y-m-d');
        $this->load->view('transaksi/pemasukan/index', $data);
    }

    // Pengeluaran
    public function pengeluaran(){
        $pengeluaran = $this->pengeluaran_model;
        $validation = $this->form_validation;
        $validation->set_rules($pengeluaran->rules());

        if($validation->run()){
            $pengeluaran->save();
            $this->session->set_flashdata('flash', 'pengeluaran');
            redirect('laporan/pemakaian');
        }

        $data['date'] = $date_now = date('Y-m-d');
        $this->load->view('transaksi/pengeluaran/index', $data);
    }

    // Tagihan
    public function tagihan(){
        $data['date'] = $date_now = date('Y-m-d');
        $this->load->view('transaksi/tagihan/index', $data);
    }
}