<!DOCTYPE html>
<html>
<head>
    <title>Form Produk</title>
</head>
<body>

<h2>Form Input Produk</h2>

<form action="proses_produk.php" method="POST">
    Nama Produk : <br>
    <input type="text" name="nama" required><br><br>

    Harga Produk : <br>
    <input type="number" name="harga" required><br><br>

    <button type="submit">Kirim</button>
</form>

</body>
</html>