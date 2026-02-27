<?php
    include("koneksi.php");
    $nama_unit = $_POST['nama_unit'];
    $no_rangka = $_POST['no_rangka'];
    $tahun_produksi = $_POST['tahun_produksi'];
    $harga_jual = $_POST['harga_jual'];
    $status = $_POST['status_stok'];
    $nama_foto = $_FILES['foto_unit']['name'];
    $tmp_foto = $_FILES['foto_unit']['tmp_name'];

    $query = "INSERT INTO kendaraan (nama_unit,no_rangka,tahun_produksi,harga_jual,status_stok,foto_unit) 
    VALUES ('$nama_unit', '$no_rangka', '$tahun_produksi', '$harga_jual', '$status','$nama_foto')";

    $tambah = mysqli_query($koneksi, $query);
        move_uploaded_file($tmp_foto, "gambar/$nama_foto");

    if($tambah){
        header("location:index.php");
    } else {
        echo "Gagal menambahkan data";
    }
?>