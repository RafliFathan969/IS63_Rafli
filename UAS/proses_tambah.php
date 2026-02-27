<?php
    include("koneksi.php");
    $nama_unit = $_POST['nama_unit'];
    $no_rangka = $_POST['no_rangka'];
    $tahun_produksi = $_POST['tahun_produksi'];
    $harga_jual = $_POST['harga_jual'];
    $status = $_POST['status_stok'];

    $query = "INSERT INTO kendaraan (nama_unit,no_rangka,tahun_produksi,harga_jual,status_stok) 
    VALUES ('$nama_unit', '$no_rangka', '$tahun_produksi', '$harga_jual', '$status')";

    $tambah = mysqli_query($koneksi, $query);

    if($tambah){
        header("location:index.php");
    } else {
        echo "Gagal menambahkan data";
    }
?>