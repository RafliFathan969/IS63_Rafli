<?php
    include("koneksi.php");
    $id_kendaraan = $_POST['id_kendaraan'];
    $nama_unit = $_POST['nama_unit'];
    $no_rangka = $_POST['no_rangka'];
    $tahun_produksi = $_POST['tahun_produksi'];
    $harga_jual = $_POST['harga_jual'];
    $status = $_POST['status_stok'];

    $query = "UPDATE kendaraan SET nama_unit='$nama_unit', no_rangka='$no_rangka', tahun_produksi='$tahun_produksi', harga_jual='$harga_jual', status_stok='$status' 
    WHERE id_kendaraan='$id_kendaraan'";

    $tambah = mysqli_query($koneksi, $query);

    if($tambah){
        header("location:index.php");
    } else {
        echo "Update gagal";
    }
?>