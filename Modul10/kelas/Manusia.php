<?php
class Manusia {
    protected $name; protected $nik="123212131243243"; protected $umur;
    public function getNama(){ return $this->name; } public function setNama($n){ $this->name=$n; }
    public function getNIK(){ return $this->nik; }
    public function getUmur(){ return $this->umur; } public function setUmur($u){ $this->umur=$u; }
    public function tampilkanIdentitas(){ return "Nama: {$this->name}<br>Umur: {$this->umur} tahun<br>NIK: {$this->nik}"; }
}
?>
