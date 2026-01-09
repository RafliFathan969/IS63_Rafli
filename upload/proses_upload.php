<?php
$ket = $_POST['ket'];

// 1. nama file
$nama_foto = $_FILES['upload']['name'];
echo "Nama Foto : $nama_foto<br>";

// 2. tipe file
$tipe_foto = $_FILES['upload']['type'];
echo "Tipe Foto : $tipe_foto<br>";

// 3. ukuran file
$ukuran_foto = $_FILES['upload']['size'];
echo "Ukuran Foto : $ukuran_foto<br>";

// 4. temporary file
$tmp_foto = $_FILES['upload']['tmp_name'];
echo "Temporary File : $tmp_foto<br>";

// 5. jenis error
$error_foto = $_FILES['upload']['error'];
echo "Kode Error : $error_foto<br>";

echo $ket;

// upload file
move_uploaded_file($tmp_foto, "foto/$nama_foto");
?>
<hr>
<img src="foto/<?=$nama_foto?>" alt="">
<hr>
<a href="index.php">Kembali</a>