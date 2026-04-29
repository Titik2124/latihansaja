<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table,th,td {
            border:1px solid black;
            border-collapse: collapse;
        }
        table{
            width: 20%;
        }
    </style>
</head>
<body>
    <h2> add a border to a table:</h2>
<form action="" method="POST">
    <table>
        <tr>
            <td>jari-jari</td>
            <td><input type="type" name="jari-jari"></td>
        </tr>
        <tr>
            <td>phi</td>
            <td><input type="text" name="phi"></td>
        </tr>
        <tr>
            <td>alas</td>
            <td><input type="text" name="alas"></td>
        </tr>
        <tr>
            <td>tinggi</td>
            <td><input type="text" name="tinggi"></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="radio" id="segitiga" name="bentuk">
                <label for="segitiga">segitiga</label><br>
                <input type="radio" id="lingkaran" name="bentuk">
                <label for="lingkaran">lingkaran</label>
            </td>    
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="segitiga" name="segitiga">
                <input type="submit" value="lingkaran" name="lingkaran">
            </td>
        </tr>
    </table>
</form>
<?php
    if(isset($_POST["lingkaran"])) {
        $phi = 3.14;
        $jarijari = $_POST["jari-jari"];

        if (!empty($jarijari)) {
            $luas = $phi * ($jarijari * $jarijari);
            echo "<h3> luasnya adalah $luas </h2>";
        }
    }

    if(isset($_POST["segitiga"])) {
        $alas = $_POST["alas"];
        $tinggi = $_POST["tinggi"];
        $luas = 0.5 * $alas * $tinggi;

        echo "<h1>luas segitiga : $luas cm2</h1>";
    }
?>
</body>
</html>