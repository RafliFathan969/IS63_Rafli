<?php
    if(isset($_POST['tbl'])){
    $hari = $_POST['hr'];

    switch($hari){
        case 1:
            echo "Hari Minggu";
            break;
        case 2:
            echo "Hari Senin";
            break;
        case 3:
            echo "Hari Selasa";
            break;
        case 4:
            echo "Hari Rabu";
            break;
        case 5:
            echo "Hari kamis";
            break;
        case 6:
            echo "Hari Jum'at";
            break;
        case 7:
            echo "Hari Sabtu";
            break;

        default:
            echo "Tidak ada hari";
            break;
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
    <h1>Hari</h1>
    <form action="form-switch.php" method="POST">
        <table>
            <tr>
                <td>Tuliskan Angka Hari</td>
                <td><input type="number" name="hr"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="tbl">Cari</button></td>
            </tr>
        </table> 
    </form>
</body>
</html>