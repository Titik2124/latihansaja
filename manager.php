<?php
session_start();
if($_SESSION["ses_tipe"]==2){
?>
Ini adalah halaman manager. <a href="logout.php">Log Out</a>
<?php
} else {
    echo "Anda belum Login.";
}
?>