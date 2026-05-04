<?php

// CLASS INDUK
class Tabungan {
    protected $nama;
    private $saldo;

    // constructor
    public function __construct($nama, $saldoAwal) {
        $this->nama = $nama;
        $this->saldo = $saldoAwal;
    }

    // getter saldo (encapsulation)
    public function getSaldo() {
        return $this->saldo;
    }

    public function getNama() {
        return $this->nama;
    }

    // setor
    public function setor($jumlah) {
        if ($jumlah > 0) {
            $this->saldo += $jumlah;
            echo "Berhasil setor Rp" . number_format($jumlah,0,",",".") . "\n";
        } else {
            echo "Jumlah tidak valid!\n";
        }
    }

    // tarik
    public function tarik($jumlah) {
        if ($jumlah > $this->saldo) {
            echo "Saldo tidak cukup!\n";
        } elseif ($jumlah <= 0) {
            echo "Jumlah tidak valid!\n";
        } else {
            $this->saldo -= $jumlah;
            echo "Berhasil tarik Rp" . number_format($jumlah,0,",",".") . "\n";
        }
    }
}

// CLASS ANAK
class Siswa extends Tabungan {
    // bisa ditambah fitur khusus siswa jika perlu
}

// ================= PROGRAM =================

echo "===== PROGRAM TABUNGAN SEKOLAH =====\n";

// buat object siswa (array)
$siswa = [
    1 => new Siswa("Siswa 1", 100000),
    2 => new Siswa("Siswa 2", 150000),
    3 => new Siswa("Siswa 3", 200000)
];

// login siswa
echo "Pilih Login:\n";
echo "1. Siswa 1\n";
echo "2. Siswa 2\n";
echo "3. Siswa 3\n";
echo "Pilih: ";
$login = (int) trim(fgets(STDIN));

// validasi akses (hanya bisa akses miliknya)
if (!isset($siswa[$login])) {
    echo "Login tidak valid!\n";
    exit;
}

// ambil siswa aktif
$user = $siswa[$login];

do {
    echo "\n===== MENU TABUNGAN =====\n";
    echo "Nama  : " . $user->getNama() . "\n";
    echo "Saldo : Rp" . number_format($user->getSaldo(),0,",",".") . "\n";
    echo "--------------------------\n";
    echo "1. Setor Tunai\n";
    echo "2. Tarik Tunai\n";
    echo "3. Cek Saldo\n";
    echo "4. Keluar\n";
    echo "Pilih menu: ";

    $pilih = trim(fgets(STDIN));

    switch ($pilih) {
        case 1:
            echo "Masukkan jumlah setor: ";
            $jumlah = (int) trim(fgets(STDIN));
            $user->setor($jumlah);
            break;

        case 2:
            echo "Masukkan jumlah tarik: ";
            $jumlah = (int) trim(fgets(STDIN));
            $user->tarik($jumlah);
            break;

        case 3:
            echo "Saldo saat ini: Rp" . number_format($user->getSaldo(),0,",",".") . "\n";
            break;

        case 4:
            echo "Terima kasih...\n";
            break;

        default:
            echo "Menu tidak valid!\n";
    }

} while ($pilih != 4);

?>