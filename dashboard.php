<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="dashboard.php?page=alat">Data Alat</a></li>
        <li><a href="dashboard.php?page=member">Data Member</a></li>
        <li>Data Peminjaman</li>
</ul>
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