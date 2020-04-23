<?php
    $koneksi = mysqli_connect("localhost", "root", "", "coronaweb");

    //cek koneksi
    function registrasi($data){
        global $koneksi;

        $nama = $data["nama"];
        $alamat = $data["alamat"];
        $usia = $data["usia"];
        $username = $data["username"];
        $password = $data["password"];

        mysqli_query($koneksi, "INSERT INTO user VALUES('', '$nama', '$alamat', '$usia', '$username', '$password', '1') ");
        return mysqli_affected_rows($koneksi);
    }
?> 