<html>
<head><title>membuat login</title></head>
<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-color: cornflowerblue;
}

h1 {
  color: white;
  text-align: center;
  padding: 50px;
  margin: 50px;
  font-size: 50px;
}

p {
  font-family: verdana;
  font-size: 20px;
}
div {
  background-color: white;
  width: 200px;
  border: 10px white;
  padding: 100px;
  margin: auto;
  border-radius: 10px;
  box-shadow: 5px 5px 15px 0px rgba(0, 0, 0, 0.20);
  border-radius: 8px;
}
table{
font-size: 20px;
margin: auto;
padding: 30px;
text-align:left;
}



</style>
</head>
<body>

<h1>WELCOME</h1>

</body>
</html>
<body>
  <div class="login">

    <form action="" method="POST">
        <table>
            <tr><td>Pengguna</td><td><input type="text" name="fpengguna"></td></tr>
            <tr><td>Password</td><td><input type="password" name="fpassword"></td></tr>
            <tr><td><input type="submit" name="flogin" value="log in"></td></tr>
</table>

</form>
</div>
</body>
</html>
<?php
session_start();
include "koneksi.php";
if(isset($_POST["flogin"])){
    $pengguna=$_POST["fpengguna"];
    $Password=md5($_POST["fpassword"]);
    $query=mysqli_query($koneksi, "select * from pengguna where username='$pengguna' and password='$Password'");
    $cek=mysqli_num_rows($query);
    if($cek==1){
        $data=mysqli_fetch_array($query);
        $_SESSION['ses_tipe']=$data["TIPE"];
        if($_SESSION['ses_tipe']==1){
            header("location:admin.php");
        } else if($_SESSION['ses_tipe']==2){
            header('location:manager.php');
        } else {
            echo 'tipe user tidak ditemukan';
        }
    } else {
        echo "pengguna/password salah!";
    }

}
?>
