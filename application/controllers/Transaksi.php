<?php

class Transaksi extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('pemasukan_model');
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
            redirect('home/dashboard');
        }

        $data['date'] = $date_now = date('Y-m-d');
        $this->load->view('transaksi/pemasukan/index', $data);
    }

    // Pengeluaran
    public function pengeluaran(){
        $this->load->view('transaksi/pengeluaran/index');
    }
}