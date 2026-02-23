<?php

class PegadaianSyariah {

    // ===== Variabel (Property) =====
    private $pinjaman;
    private $bunga;
    private $lama;
    private $telat;

    // ===== Constructor =====
    public function __construct($pinjaman, $bunga, $lama, $telat) {
        $this->pinjaman = $pinjaman;
        $this->bunga = $bunga;
        $this->lama = $lama;
        $this->telat = $telat;
    }

    // ===== Function Hitung Total Pinjaman =====
    public function totalPinjaman() {
        return $this->pinjaman + ($this->pinjaman * $this->bunga / 100);
    }

    // ===== Function Hitung Angsuran Bulanan =====
    public function angsuran() {
        return $this->totalPinjaman() / $this->lama;
    }

    // ===== Function Hitung Denda =====
    public function denda() {
        return $this->angsuran() * 0.0015 * $this->telat;
    }

    // ===== Function Total Pembayaran =====
    public function totalBayar() {
        return $this->angsuran() + $this->denda();
    }

    // ===== Function Tampilkan =====
    public function tampilkan() {
        echo "<h2>TOKO PEGADAIAN SYARIAH</h2>";
        echo "Besar Pinjaman : Rp. " . number_format($this->pinjaman,0,',','.') . "<br>";
        echo "Bunga : {$this->bunga}%<br>";
        echo "Total Pinjaman : Rp. " . number_format($this->totalPinjaman(),0,',','.') . "<br>";
        echo "Lama Angsuran : {$this->lama} bulan<br>";
        echo "Angsuran / Bulan : Rp. " . number_format($this->angsuran(),0,',','.') . "<br>";
        echo "Keterlambatan : {$this->telat} hari<br>";
        echo "Denda : Rp. " . number_format($this->denda(),0,',','.') . "<br>";
        echo "Total Pembayaran : Rp. " . number_format($this->totalBayar(),0,',','.') . "<br>";
    }
}


// ===== Object =====
$pegadaian = new PegadaianSyariah(1000000, 10, 5, 40);

// ===== Output =====
$pegadaian->tampilkan();

?>