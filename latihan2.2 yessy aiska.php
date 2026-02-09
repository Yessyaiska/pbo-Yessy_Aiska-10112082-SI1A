<?php
class belanja{
    public string $namapembeli="yeci"; //Nama Pembeli bertype data string
    public string $namabarang="pensil"; //nama barang bertype data string
    public int $hargabarang=3000; 
    public int $jumlahbarang=2;
    public float $totalbayar=6000;
    public float $diskon=0.05;

    public static float $pajak = 0.02;


    public function __construct ($namapembeli) {
        $this-> namapembeli = $namapembeli;
    }

    public function hitungtotal (): float {
        $subtotal = $this->hargabarang * $this->jumlahbarang;
        return $subtotal;
    }
    public function tampilrincian($namapembeli): void{
        echo "Nama Pembeli : " . $this->namapembeli . "<br>";
        echo "Nama Barang : " . $this->namabarang . "<br>";
        echo "Harga Barang : " .$this->hargabarang . "<br>";
        echo "Jumlah Barang : " . $this->jumlahbarang . "<br";
        echo "hitungtotal : " . $this->hitungtotal() . "<br>";
    }
}
$belanaja1=new belanja( namapembeli : "yeci");
$belanaja1->tampilrincian( namapembeli : $belanja1->$namapembeli);

?>
