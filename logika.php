<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    # STRUKTUR LOGIKA
    # IF, ELSEIF, ELSE
    # SWITCH

    # OPERATOR PERBANDINGAN (== != > < >= <=)
    # OPERATOR LOGIKA ( AND OR) (&& ||)

    $nilai = 50;

    if($nilai > 50){
        echo "Kamu Lulus";
        if($nilai >90){
            echo ", Nilai A";
        }
    }else{
        echo "Kamu Tidak Lulus";
        if($nilai >30){
            echo ", Harus Ikut Remedial";
        }
    }
    ?>
</body>
</html>