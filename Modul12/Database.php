<?php

class Database
{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "db_praktikum11";
    private $port = 3306;
    public $con;

    public function __construct()
    {
        $this->con = new mysqli(
            $this->host,
            $this->user,
            $this->pass,
            $this->db,
            $this->port
        );

        if ($this->con->connect_error) {
            die("Koneksi dengan database gagal: " . $this->con->connect_error);
        }
    }
}
?>