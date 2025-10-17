<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        Pilih Tanggal :
        <select>
            <?php
            for($i=1;$i<=31;$i++){
                echo "<option>$i</option>";
            }
            ?>
        </select>

        <br>
        <br>

        Pilih Bulan :
        <select>
            <?php
            $bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
            foreach($bulan as $data){
                echo "<option>$data</option>";
            }
            ?>
        </select>

        <br>
        <br>

        Pilih Tahun :
        <select>
            <?php
            for($i=2025;$i>=1970;$i--){
                echo "<option>$i</option>";
            }
            ?>
        </select>
    </form>
</body>
</html>