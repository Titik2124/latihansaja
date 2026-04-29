<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
    <h2>Pendaftaran Ekstrakuliuler</h2>
<form action="" method="POST">
    Nama :
    <input type="text" id="fname" name="nama"><br>
    Kelas :
    <input type="text" id="iname" name="kelas"><br><br>
    <input type="submit" value="Daftar" name="simpan">
</form>
</body>
</html>
<?php
if(isset($_POST["simpan"])){
    echo $_POST["nama"];
    echo $_POST["kelas"];
}