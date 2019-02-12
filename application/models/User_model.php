<?php

class User_model extends CI_Model{
    private $_table = 'tb_user';
    public $nama;
    public $username;
    public $pass;
    public $email;
    public $saldo = 0;

    public function rules(){
        return [
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required'
            ],
            [
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required'
            ],
            [
                'field' => 'pass',
                'label' => 'Pass',
                'rules' => 'required'
            ],
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required'
            ]
        ];
    }

    public function save(){
        $post = $this->input->post();
        $this->nama = $post['nama'];
        $this->username = $post['username'];
        $this->pass = md5($post['pass']);
        $this->email = $post['email'];

        return $this->db->insert($this->_table, $this);
    }

    public function cekUser($username, $password){
        return $this->db
            ->where('username', $username)
            ->where('pass', $password)->get($this->_table)->num_rows();
    }
}

?>