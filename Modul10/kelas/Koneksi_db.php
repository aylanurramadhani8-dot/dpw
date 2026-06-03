<?php
class Koneksi_db {
    private $db_host = "localhost";
    private $db_user = "user";
    private $db_pass = "password";
    private $db_name = "database";
    private $con = false;
    private $hasil = [];

    public function connect() {
        if(!$this->con){
            $myconn = @mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
            @mysqli_set_charset($myconn, 'utf8');
            if($myconn){ $this->con = true; return true; }
            else { $this->hasil[] = mysqli_connect_error(); return false; }
        }
        return true;
    }
    public function getHasil() { return $this->hasil; }
}
?>
