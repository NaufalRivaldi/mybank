<?php

class Auth extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('form_validation');
        $this->load->library('email');
    }

    public function login(){
        $post = $this->input->post();
        $username = $post['username'];
        $password = md5($post['pass']);

        $row = $this->user_model->cekUser($username, $password);
        
        if($row > 0){
            $array_session = array(
                'nama' => $username,
                'status' => 'login'
            );

            $this->session->set_userdata($array_session);
            $this->session->set_flashdata('flash', 'login');
            redirect('home/dashboard');
        }else{
            $this->session->set_flashdata('flash', 'login-gagal');
            redirect('home/');
        }

    }

    public function daftar(){
        $user = $this->user_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if($validation->run()){
            $user->save();

            // email function
            // $config['protocol'] = "smtp";
            // $config['smtp_host'] = "smtp.gmail.com";
            // $config['smtp_port'] = "465";
            // $config['smtp_user'] = "naufal.rivaldi33@gmail.com";
            // $config['smtp_pass'] = "Denpasar123";
            // $config['charset'] = "utf-8";
            // $config['mailtype'] = "html";
            // $config['newline'] = "\r\n";

            // $this->email->initialize($config);

            // $post = $this->input->post();
            // $nama = $post['nama'];
            // $username = $post['username'];
            // $pass = $post['pass'];
            // $email = $post['email'];

            // $this->email->from('naufal.rivaldi33@gmail.com', 'Naufal Rivaldi');
            // $this->email->to($email);
            // $this->email->subject('Akun MyBank');
            // $this->email->message('Selamat '.$nama.' telah melakukan registrasi pada website kami, berikut info akun anda untuk melakukan login :
            //     <ul>
            //         <li>Username : '.$username.'</li>
            //         <li>Password : '.$pass.'</li>
            //     </ul>
            //     Selamat mengatur keuangan anda :)
            // ');

            // send email
            // if($this->email->send()){
            //     echo "email terkirim";
            // }else{
            //     echo "email gagal";
            // }
            
            $this->session->set_flashdata('flash', 'daftar');
            redirect('home');
        }else{
            $this->session->set_flashdata('flash', 'daftar-gagal');
            redirect('home/daftar');
        }
    }
}

?>