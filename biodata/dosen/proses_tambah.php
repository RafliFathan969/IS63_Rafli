<?php
    #1. Meng-koneksikan ke PHP ke MySQL
    include("../koneksi.php");

    #2. Mengambil value dari Form Tambah
    $nidn = $_POST['nidn'];
    $nama = $_POST['nama'];
    $rumpun = $_POST['rumpun'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $nama_foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];

    #3. Query Insert (proses tambah data)
    $query = "INSERT INTO dosen (nama,nidn,rumpun,email,no_hp,foto) 
    VALUES ('$nama', '$nidn', '$rumpun', '$email', '$no_hp', '$nama_foto')";

    $tambah = mysqli_query($koneksi, $query);

    if($tambah){
        header("location:index.php");
    } else {
        echo "Gagal menambahkan data";
    }

    move_uploaded_file($tmp_foto, "foto dosen/$nama_foto");
?>