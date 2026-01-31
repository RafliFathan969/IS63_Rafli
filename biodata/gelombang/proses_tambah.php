<?php
    #1. Meng-koneksikan ke PHP ke MySQL
    include("../koneksi.php");

    #2. Mengambil value dari Form Tambah
    $kd_gel = $_POST['kd_gel'];
    $gelombang = $_POST['gelombang'];

    #3. Query Insert (proses tambah data)
    $query = "INSERT INTO gelombang (kd_gel,gelombang) 
    VALUES ('$kd_gel', '$gelombang')";

    $tambah = mysqli_query($koneksi, $query);

    if($tambah){
        header("location:index.php");
    } else {
        echo "Gagal menambahkan data";
    }

?>