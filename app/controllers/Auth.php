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
        $this->view('auth/login');
        $this->view('templates/footer');
    }
}
