<?php

    session_start();

    include 'koneksi.php';

    if(isset($_POST['login']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT username FROM user WHERE username  = '$username' AND
                  password = '$password'";
        
        $hasil = mysqli_query($koneksi, $query);

        $cek = mysqli_affected_rows($koneksi);

        if($cek == 1)
        {
            $_SESSION['login'] = "logged in";
            header("Location: http://localhost/TopikPerpus/index.php");
        }
        else
        {
            echo "Username atau Password salah.";
        }
    }

?>
