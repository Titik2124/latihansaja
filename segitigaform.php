<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
    <h2>segitiga form</h2>
<form action="" method="POST">
        Alas :
        <input type="number" id="fname" name="alas"><br><br>
        Tinggi :
        <input type="number" id="iname" name="tinggi"><br><br>
        <input type="submit" value="hitung" name="hitung">
</form>
</body>
</html>
<?php
    if (isset($_POST["hitung"])){
        $alas = $_POST["alas"];
        $tinggi = $_POST["tinggi"];
        $luas = 0.5 * $alas * $tinggi;

        //echo "alas segitiga: $alas cm <br>";
        //echo "tinggi segitiga: $tinggi cm ,br>";
        //echo "luas segitiga adalah: $luas cm2";
        echo "<h1>luas segitiga : $luas cm2</h1>";
    }
?>