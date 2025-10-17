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

    $username = "ikram";
    $password = "123456";
    
    if($username == "admin" && $password == "123456"){
        echo "Login Berhasil";
    }elseif($username == "admin" && $password !="123456"){
        echo "Mohon maaf Password kamu salah";
    }elseif($username != "admin" && $password == "123456"){
        echo "Username mu salah woi coba kasih yang benar!!";
    }else{
        echo "Woi lu punya akun apa engga";
    }

    // $nama = "Zilong";
    // $nilai = 0;

    // if($nilai >= 70){
    //     echo "Selamat $nama, Kamu Lulus";
    // }elseif($nilai >= 40){
    //     echo "Hai, $nama. Kamu harus ikut remedial";
    // }elseif($nilai >= 10){
    //     echo "Maaf $nama, kamu Tidak lulus";
    // }else{
    //     echo "Hati-hati $nama, Kamu akan di DO jika tidak memperbaikan nilai di MK lainnya";
    // }

    // if($nilai > 50){
    //     echo "Kamu Lulus";
    //     if($nilai >90){
    //         echo ", Nilai A";
    //     }
    // }else{
    //     echo "Kamu Tidak Lulus";
    //     if($nilai >30){
    //         echo ", Harus Ikut Remedial";
    //     }
    // }

    echo "<hr>";
    ##### SWITCH #####
    $hari = 8;
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
    ?>
</body>
</html>