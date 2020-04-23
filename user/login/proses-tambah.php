<?php
    $koneksi = mysqli_connect("localhost", "root", "", "coronaweb");
    
?>
<?php

if(isset($_POST['simpan']))
{
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$usia = $_POST['usia'];
$username = $_POST['username'];
$password = $_POST['password'];
$id_level = 1;
$sql = "INSERT INTO user (nama, alamat, usia, username, password)
            VALUES ($nama, $alamat, $usia, $username, $password)";
  
$res = mysqli_query($koneksi, $sql);

$hitung = mysqli_affected_rows($koneksi);

if($hitung == 1)
{
    header("Location: index.php");
 }
 else 
 {
    header("Location: index.php");
 }
 
}else 
{
   header("Location: index.php");
}

?>
