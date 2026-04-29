<?php
session_start();
if(isset($_SESSION['ses_uname'])=='admin'){
    ?>
    ini halaman admin. <a href="logout.php">Log Out</a>
    <?php
} else {
    echo "Inii halaman admin";
}
?>