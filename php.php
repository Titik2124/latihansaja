<?php
if (isset($_POST["hitung"])) {
    $namabarang=$_POST ["nama"];
    $harga=$_POST ["harga"];
    $total=$harga-($harga*0.025);
    
    echo "<p>total harga $namabarang adalah Rp $total</p>"
}
?>