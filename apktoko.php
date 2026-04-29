<!DOCTYPE html>
<html>
<head>
<style>
    table, th, td {
        border: 0px solid;
    }
    table {
        width: 48%
    }
    </style>
</head>
<body>
    <h2>Aplikasi Toko Online</h2>
<table>
    <form action="" method="POST">
    <tr>
        <td>Nama Barang</td>
        <td><input type="text" id="fname" name="Nama"></td>
    </tr>
    <tr>
        <td>Harga Barang</td>
        <td><input type="text" id="fname" name="Harga"></td>
    </tr>
    <tr>
        <td>Jumlah Barang</td>
        <td><input type="text" id="fname" name="Jumlah"></td>
    </tr>
    <tr>
        <td colspan= "2">
            <input type="submit" value="Hitung" name="Hitung">
    </tr>
</table>
</form>
</body>
</html>

<?php

if(isset($_POST["Hitung"])) {
    $namabarang= $_POST["Nama"];
    $hargabarang= $_POST["Harga"];
    $jumlah= $_POST["Jumlah"];
    $harga= $hargabarang * $jumlah;

    echo "<p>Total Harga $namabarang adalah Rp $harga</p>";
    
}
?>