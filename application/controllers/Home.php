<?php

class Home extends CI_Controller{
    public function index(){
        $this->load->view('index.php');
    }

    public function dashboard(){
        $this->load->view('dashboard.php');
    }
}

?>