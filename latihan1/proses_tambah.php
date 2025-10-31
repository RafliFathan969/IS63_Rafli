<?php
    include("koneksi.php");

    $kd_jurusan = $_POST["kd_jur"];
    $nm_jurusan = $_POST["nm_jur"];

    $query = "INSERT INTO keahlian (kd_jurusan,nm_jurusan) 
    VALUES ('$kd_jurusan', '$nm_jurusan')";

    $tambah = mysqli_query($koneksi, $query);


    if($tambah){
        header("location:index.php");
    } else {
        echo "Gagal menambahkan data";
    }

?>