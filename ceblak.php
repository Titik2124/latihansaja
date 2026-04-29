<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
    <h2>Aplikasi Pemesanan Seblak</h2>
    <form action="" method="POST">
    <table>
        <tr>
            <td>nama pemesan</td>
            <td>:</td>
            <td><input type="text" id="fname" name="namapemesan"></td>
        </tr>
        <tr>
            <td>harga</td>
            <td>:</td>
            <td><input type="number" value="5000" name="harga"></td>
        </tr>
        <tr>="tidak pedas">tidak pedas</option>
                <option value="pedas">pedas</option>
                <option value="extra pedas">extra pedas</option>
        </tr>
        <tr>
            <td><input type="submit" value="hitung" name="hasilhitung"></td>
        </tr>
    </table>
    </form>
</body>
</html>
<?php

if (isset($_POST["hasilhitung"])){
    $namapemesan = $_POST["namapemesan"];
    $harga = $_POST["harga"];
    $level = $_POST["level"];
}
if ($level =="tidakpedas"){
    $hasilhitung = $harga;
}
else if($level=="pedas"){
    $hasilhitung = $harga + ($harga * 0.5);
}
else if($level=="extrapedas"){
    $hasilhitung = $harga + ($harga * 0.10);
    echo "<p>total harga $namapemesan adalah Rp:$hasilhitung</p>";

}
?>