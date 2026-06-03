<?php
class Buah2 {
    public $nama;
    public $warna;
    public $bobot;

    public function setNama($n) { $this->nama = $n; }

    protected function setWarna($w) { $this->warna = $w; }

    private function setBobot($b) { $this->bobot = $b; }

    public function setInfo($nama, $warna, $bobot) {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->bobot = $bobot;
    }

    public function tampilkanInfo() {
        return "Nama Buah: {$this->nama}<br>
                Warna: {$this->warna}<br>
                Bobot: {$this->bobot} gram";
    }
}

$apel = new Buah2();
$apel->setInfo("Apel", "Merah", 250);
echo $apel->tampilkanInfo();
?>
