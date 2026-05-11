<!DOCTYPE html>
<html>
<head>
    <title>PustakaPass - Dashboard</title>
    <link rel="stylesheet" href="styledas.css">
</head>
<body>
    <div class="kotak-kiri">
    <h2 style="color: white; padding: 20px;">PustakaPass</h2>

    <a href="index.php" class="pilihan-menu aktif">Dashboard</a>
    <a href="anggota.php" class="pilihan-menu ">Manajemen Anggota</a>
    <a href="#" class="pilihan-menu">Laporan & Statistik</a>
    <a href="#" class="pilihan-menu">Scanner Kehadiran</a>
    <a href="#" class="pilihan-menu">Log Out</a>
</div>

    <div class="kotak-kanan">
        <h1>Dashboard</h1>

        <div class="area-kotak">
            <div class="kotak-menu warna-biru-muda">Manajemen Anggota</div>
            <div class="kotak-menu">Laporan & Statistik</div>
            <div class="kotak-menu">Scanner Kehadiran</div>
            <div class="kotak-menu warna-biru-muda">Log Out</div>
        </div>
    </div>

</body>
</html>


<?php
if(isset($_GET['page'])){
    $page = $_GET["page"];
    switch($page){
        case "dash":
            include "alat.php";
            break;
        case "member":
            include "member.php";
            break;
    }
}
?>