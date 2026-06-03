<?php
require_once "Manusia.php";
class Mahasiswa extends Manusia {
    protected $NIM; protected $jurusan; protected $kelas;
    public function __construct($nama, $nim="", $jurusan="", $kelas="") {
        $this->setNama($nama); $this->NIM=$nim; $this->jurusan=$jurusan; $this->kelas=$kelas;
    }
    public function getNIM(){ return $this->NIM; } public function setNIM($NIM){ $this->NIM=$NIM; }
    public function getJurusan(){ return $this->jurusan; } public function setJurusan($j){ $this->jurusan=$j; }
    public function getKelas(){ return $this->kelas; } public function setKelas($k){ $this->kelas=$k; }
    public function tampilkanInfo(){ return "Nama: {$this->getNama()}<br>NIM: {$this->NIM}<br>Jurusan: {$this->jurusan}<br>Kelas: {$this->kelas}"; }
}
?>
