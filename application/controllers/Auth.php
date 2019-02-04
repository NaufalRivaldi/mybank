<?php

class Auth extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('form_validation');
    }

    public function daftar(){
        $user = $this->user_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if($validation->run()){
            $user->save();
            redirect('home');
        }else{
            redirect('home/daftar');
        }
    }
}

?>