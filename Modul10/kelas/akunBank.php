<?php
class akunBank {
    protected $accountNumber;
    protected $jmlUang;
    protected $nama;

    public function __construct($no, $nominal) {
        $this->accountNumber = $no;
        $this->jmlUang = $nominal;
    }

    public function getNama() { return $this->nama; }
    public function setNama($n) { $this->nama = $n; }
    public function getAccountNumber() { return $this->accountNumber; }

    public function tambahUang($nominal) {
        $this->jmlUang += $nominal;
        return $this->jmlUang;
    }

    public function kurangiUang($nominal) {
        if ($this->jmlUang >= $nominal) {
            $this->jmlUang -= $nominal;
        } else {
            echo "<span style='color:red;'>Saldo tidak mencukupi!</span><br>";
        }
        return $this->jmlUang;
    }

    public function tampilkanUang() { return $this->jmlUang; }

    public function hitungPajak() { return $this->jmlUang * 0.11; }

    public function tampilkanInfo() {
        return "Nama: {$this->nama}<br>
                Nomor Akun: {$this->accountNumber}<br>
                Saldo: Rp {$this->jmlUang}<br>
                Pajak (11%): Rp {$this->hitungPajak()}";
    }
}
?>
