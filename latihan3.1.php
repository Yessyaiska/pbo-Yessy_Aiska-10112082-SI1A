<?php
class Kendaraan {
    public string $merk = "Inova";
    public string $warna = "Hitam";
    public string $bahanBakar = "Pertamax";
    public int $harga = 100000000;
    public int $tahun = 2004;
    public int $jumlahRoda = 4;

    public function statusHarga() {
        if ($this->harga > 50000000) {
            return "Mahal";
        } else {
            return "Murah";
        }
    }

    public function statusSubsidi() {
        if ($this->tahun < 2005) {
            return "Mendapat subsidi";
        } else {
            return "Tidak mendapat subsidi";
        }
    }
}

$objekKendaraan = new Kendaraan();

echo "Merk : " . $objekKendaraan->merk . "<br>";
echo "Tahun : " . $objekKendaraan->tahun . "<br>";
echo "Jumlah roda : " . $objekKendaraan->jumlahRoda . "<br>";
echo "Harga : " . $objekKendaraan->harga . "<br>";
echo "Bahan bakar : " . $objekKendaraan->bahanBakar . "<br>";
echo "Status Harga : " . $objekKendaraan->statusHarga() . "<br>";
echo "Status Subsidi : " . $objekKendaraan->statusSubsidi() . "<br><br>";

$objekKendaraan1 = new Kendaraan();
$objekKendaraan1->harga = 30000;
$objekKendaraan1->tahun = 2007;
$objekKendaraan1->merk = "Honda";

echo "Merk : " . $objekKendaraan1->merk . "<br>";
echo "Tahun : " . $objekKendaraan1->tahun . "<br>";
echo "Harga : " . $objekKendaraan1->harga . "<br>";
echo "Status Harga : " . $objekKendaraan1->statusHarga() . "<br>";
echo "Status Subsidi : " . $objekKendaraan1->statusSubsidi() . "<br><br>";

$objekKendaraan2 = new Kendaraan();
$objekKendaraan2->harga = 100000000;
$objekKendaraan2->tahun = 2016;
$objekKendaraan2->merk = "Inova";

echo "Merk : " . $objekKendaraan2->merk . "<br>";
echo "Tahun : " . $objekKendaraan2->tahun . "<br>";
echo "Harga : " . $objekKendaraan2->harga . "<br>";
echo "Status Harga : " . $objekKendaraan2->statusHarga() . "<br>";
echo "Status Subsidi : " . $objekKendaraan2->statusSubsidi() . "<br>";
?>