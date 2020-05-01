<?php

class Home extends Databases
{

    public function __construct()
    {
        //check session auth
        if (!isset($_SESSION['auth'])) {
            header('Location: ' . BASEURL . '/auth/login');
            exit();
        }
    }

    public function index()
    {
        $this->view('templates/header', $data = ['title' => 'Home']);
        $this->view('home/index');
        $this->view('templates/footer');
    }
}
