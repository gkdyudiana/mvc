<?php

class Databases extends Controller
{
    private $host;
    private $db;
    private $user;
    private $pass;
    public $connect;

    public function __construct()
    {
        try {
            $this->host = 'localhost';
            $this->db = 'db_penjualan';
            $this->user = 'root';
            $this->pass = '';
            $this->connect = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db, $this->user, $this->pass);
        } catch (PDOException $e) {
            echo "Koneksi Gagal!" . $e->getMessage();
        }
    }
}
