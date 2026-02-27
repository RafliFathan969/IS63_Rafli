<?php
    include("koneksi.php");
    $id_kendaraan = $_POST['id_kendaraan'];
    $nama_unit = $_POST['nama_unit'];
    $no_rangka = $_POST['no_rangka'];
    $tahun_produksi = $_POST['tahun_produksi'];
    $harga_jual = $_POST['harga_jual'];
    $status = $_POST['status_stok'];
    $nama_foto = $_FILES['foto_unit']['name'];
    $tmp_foto = $_FILES['foto_unit']['tmp_name'];

    if($nama_foto != ""){
        $qry = "SELECT * FROM kendaraan WHERE id_kendaraan='$id_kendaraan'";
        $hapus_foto = mysqli_query($koneksi,$qry);
        $data = mysqli_fetch_array($hapus_foto);
        $nama_foto_hapus = $data['foto_unit'];
        $lokasi_foto = "gambar/$nama_foto_hapus";
        if(file_exists($lokasi_foto)){
            unlink($lokasi_foto);
        }
    $query = "UPDATE kendaraan SET nama_unit='$nama_unit', no_rangka='$no_rangka', tahun_produksi='$tahun_produksi', harga_jual='$harga_jual', status_stok='$status', foto_unit='$nama_foto' 
    WHERE id_kendaraan='$id_kendaraan'";
    }else{
        $query = "UPDATE kendaraan SET nama_unit='$nama_unit', no_rangka='$no_rangka', tahun_produksi='$tahun_produksi', harga_jual='$harga_jual', status_stok='$status' 
        WHERE id_kendaraan='$id_kendaraan'";
    }
    $tambah = mysqli_query($koneksi, $query);

    if($tambah){
        header("location:index.php");
    } else {
        echo "Update gagal";
    }
?>