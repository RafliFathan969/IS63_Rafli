<?php
    #1. Meng-koneksikan ke PHP ke MySQL
    include("../koneksi.php");

    #2. Mengambil value dari Form Tambah
    $nama = $_POST['nama'];
    $nisn = $_POST['nisn'];
    $tp_lahir = $_POST['tp_lahir'];
    $tg_lahir = $_POST['tg_lahir'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $jk = $_POST['jk'];
    $jur = $_POST['jur'];
    $gelombang = $_POST['gelombang'];
    $nama_foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];

    #3. Query Insert (proses tambah data)
    $query = "INSERT INTO biodata (nama,nisn,tp_lahir,tg_lahir,alamat,email,jk,jurusans_id,gelombangs_id,foto) 
    VALUES ('$nama', '$nisn', '$tp_lahir', '$tg_lahir', '$alamat', '$email', '$jk', '$jur', '$gelombang', '$nama_foto')";

    $tambah = mysqli_query($koneksi, $query);

    if($tambah){
        header("location:index.php");
    } else {
        echo "Gagal menambahkan data";
    }

    move_uploaded_file($tmp_foto, "../gambar/$nama_foto");
?>