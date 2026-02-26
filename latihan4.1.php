<?php

function formatRupiah($angka) {
    return "Rp " . number_format($angka, 0, ",", ".");
}

class Produk {
    public $namaPembeli;
    public $namaBarang;
    public $hargaBarang;
    public $jumlahBeli;

    public function hitungSubtotal() {
        return $this->hargaBarang * $this->jumlahBeli;
    }

    public function hitungTotalDenganDiskon($persenDiskon) {
        $subtotal = $this->hitungSubtotal();
        $diskon = ($persenDiskon / 100) * $subtotal;
        return $subtotal - $diskon;
    }
}

$data = [
    'namaPembeli' => "yeci",
    'namaBarang' => "Sepatu",
    'hargaBarang' => 100000,
    'jumlahBeli' => 2
];

$belanja = new Produk();
$belanja->namaPembeli = $data["namaPembeli"];
$belanja->namaBarang = $data["namaBarang"];
$belanja->hargaBarang = $data["hargaBarang"];
$belanja->jumlahBeli = $data["jumlahBeli"];

echo "<h2>STRUK BELANJA TOTAL</h2>";
echo "Pembeli : " . $belanja->namaPembeli . "<br>";
echo "Barang : " . $belanja->namaBarang . "<br>";
echo "Subtotal : " . formatRupiah($belanja->hitungSubtotal()) . "<br>";
echo "Total (Diskon 10%) : " . formatRupiah($belanja->hitungTotalDenganDiskon(10)) . "<br>";

?>
