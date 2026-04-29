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
<h2>Program Kalkulator</h2>
<table>
<form action="" method="POST">
    <tr>
        <td>Bilangan 1</td>
        <td><input type="number" id="fname" name="bilangan1"></td>
    </tr>
    <tr>
        <td>Operator</td>
        <td><select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option></td>
    </tr>
    <tr>
        <td>Bilangan 2</td>
        <td><input type="number" id="fname" name="bilangan2"></td>
    </tr>
    <tr>
        <td colspan= "3">
            <input type="submit" value="Hitung" name="Hitung">
    </tr>
</table>
</form>
</body>
</html>

<?php
if(isset($_POST["Hitung"])) {
    $bilangansatu = $_POST["bilangan1"];
    $operator = $_POST["operator"];
    $bilangandua = $_POST["bilangan2"];
    $hasil= 0;

if ($operator=="+") {
    $hasil = $bilangansatu + $bilangandua;
} elseif ($operator =="-"){
    $hasil = $bilangansatu - $bilangandua;
} elseif ($operator =="*"){
    $hasil = $bilangansatu * $bilangandua;
} elseif ($operator =="/"){
    if ($bilangandua == 0) {
        echo "Error: Tidak bisa membagi dengan noll";
        exit;
    } else {
        $hasil = $bilangansatu / $bilangandua;
    }
} else {
    echo "Operator tidak dikenali.";
    exit;
}
    echo "<p>Hasil Perhitungan $bilangansatu $operator $bilangandua = $hasil</p>";

}
?>