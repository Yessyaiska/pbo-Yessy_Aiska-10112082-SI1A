<?php


class manusia{

    protected $nama="Ardi";
    var $kelas = "SI 2";

    protected function nama(){
        return "Nama : " .$this->nama;
    }

    protected function tampilkan_nama(){
        return $this->nama();
    }

    protected function tampilkan_kelas(){
        return "Kelas : ".$this->kelas;
    }

}


$manusia = new manusia();


echo $manusia->tampilkan_nama()."<br />";
echo $manusia->tampilkan_kelas();
?>