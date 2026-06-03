<?php
class Buah {
    public $nama;
    protected $warna;
    private $berat;

    public function setNama($n) { $this->nama = $n; }
    public function getNama() { return $this->nama; }

    protected function setWarna($w) { $this->warna = $w; }
    protected function getWarna() { return $this->warna; }

    private function setBerat($b) { $this->berat = $b; }
    private function getBerat() { return $this->berat; }

    public function setInfo($nama, $warna, $berat) {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->berat = $berat;
    }

    public function tampilkanInfo() {
        return "Nama Buah: {$this->nama}<br>
                Warna: {$this->warna}<br>
                Berat: {$this->berat} gram";
    }
}

$mango = new Buah();
$mango->setInfo("Mangga", "Kuning", 300);
echo $mango->tampilkanInfo();
?>
