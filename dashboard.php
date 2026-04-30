<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul>
        <li><a href="dashboard.php?page=dashboard">Dashboard</a></li>
        <li><a href="dashboard.php?page=manajemenanggota">Manajemen Anggota</a></li>
        <li>Data Peminjaman</li>
</ul>
<hr>
<nav>
<ul>
        <li>Dashbord</li>
        <li>Manajemen Anggota</li>
        <li>Laporan & Statistik</li>
        <li>Scanner kehadiran</li>
        <li>Log Out</li>
</ul>
</nav>
</hr>
<main>
        <h2>Dashbord</h2>
        <section>
            <div>
                <p>[Ikon Manajemen]</p>
                <h3>Manajemen Anggota</h3>
</div>
<div>
    <p>[Ikon Scanner]</p>
    <h3>Scanner Kehadiran</h3>
</div>
<div>
    <p>[Ikon Laporan]</p>
    <h3>Laporan & Statistik</h3>
</div>
<div>
    <p>[Ikon Keluar]</p>
    <h3>Log Out</h3>
</div>
</section>
</main>
</hr>

</body>
</html>

<?php
if(isset($_GET['page'])){
    $page = $_GET["page"];
    switch($page){
        case "alat":
            include "alat.php";
            break;
        case "member":
            include "member.php";
            break;
    }
}
?>