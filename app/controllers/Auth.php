<?php

class Auth extends Databases
{
    public function index()
    {
        $this->login();
    }

    public function login()
    {
        $this->view('templates/header', $data = ['title' => 'Sign In']);
        $data = $this->model('Barang_model')->getBarang();
        $this->view('auth/login', $data);
        $this->view('templates/footer');
    }

    public function proses()
    {
        if (isset($_POST['submit'])) {
            $username = htmlentities($_POST['username']);
            $pass = htmlentities($_POST['password']);
            $query = $this->connect->query("SELECT * FROM users WHERE username = '$username'");
            $query->execute();
            $data = $query->fetch();
            if (count($data) > 0) {
                if (password_verify($pass, $data['password'])) {
                    echo 'true';
                    header('Location: ' . BASEURL . '/home/index');
                } else {
                    echo 'username atau password salah';
                }
            } else {
                echo 'username atau password salah';
            }
        }
    }
}
