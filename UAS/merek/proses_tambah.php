<?php
    include("../koneksi.php");
    $kd_merk = $_POST['kd_merek'];
    $nama_merk = $_POST['nama_merk'];

    $query = "INSERT INTO merk (kd_merk,nama_merk) VALUES ('$kd_merek','$nama_merk')";

    $tambah = mysqli_query($koneksi, $query);

    if($tambah){
        header("location:index.php");
    } else {
        echo "Gagal menambahkan data";
    }
?>