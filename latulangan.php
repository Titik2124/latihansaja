<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>aplikasi konversi suhu</h2>
    <form method="POST" action="">
        <table>
            <tr>
                <td>masukan derajat celcius</td>
                <td><input type="text" id="fname" name="masukan_derajat_celcius"></td>
            </tr>
            <tr>
                <td>pilihan konversi</td>
                <td><select name="pilihan_konversi">
                    <option value="ke fahrenhet">ke fahrenhet</option>
                    <option value="ke kelvin">ke kelvin</option>
            </tr>
            <tr>
                <td><input type="submit" value="hitung" name="hitung"></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
if (isset($_POST["hitung"])){
    $masukanderajatcelcius = $_POST ["masukan_derajat_celcius"];
    $pilihankonversi = $_POST ["pilihan_konversi"];
if ($pilihankonversi=="ke fahrenhat"){
    $hasilhitung = 9/5 * $masukanderajatcelcius+32;
}
else if($pilihankonversi=="ke kelvin"){
    $hasilhitung = $masukanderajatcelcius+273;
}
echo"<p>derajat dalam $hasilhitung adalah $pilihankonversi";
}?>