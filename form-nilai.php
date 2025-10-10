<?php
    if(isset($_POST['btn'])){
        $nama = $_POST['nm'];
        $nilai = $_POST['nl'];

        if($nilai >= 85){
            echo "Halo $nama, nilai $nilai, Grade A";
        }elseif($nilai >= 70){
            echo "Halo $nama, nilai $nilai, Grade B";
        }elseif($nilai >= 60){
            echo "Halo $nama, nilai $nilai, Grade C";
        }elseif($nilai >= 50){
            echo "Halo $nama, nilai $nilai, Grade D";
        }else{
            echo "Halo $nama, nilai $nilai, Grade E";
        }
        echo "<hr>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Nilai</h1>
    <form action="form-nilai.php" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nm"></td>
            </tr>
            <tr>
                <td>Nilai</td>
                <td><input type="text" name="nl"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="btn">Proses</button></td>
            </tr>
        </table>
    </form>
</body>
</html>