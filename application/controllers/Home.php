<?php

class Home extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index(){
        $this->load->view('index.php');
    }

    public function daftar(){
        $this->load->view('daftar.php');
    }

    public function dashboard(){
        $this->user_model->cekLogin();

        $this->load->view('dashboard.php');
    }
}

?>