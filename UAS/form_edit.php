<?php
include_once("koneksi.php");
$idedit = $_GET['id'];
$qry = "SELECT * FROM kendaraan WHERE id_kendaraan='$idedit'";
$edit = mysqli_query($koneksi,$qry);
$data = mysqli_fetch_array($edit);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Dealer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body style="background-color:#232954">
    <?php
    include_once("navbar.php");
    ?>

    <div class="container">
        <div class="row my-5">
            <div class="col-8 m-auto">
                <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
                    <div class="card-header text-center">
                        <b>Aplikasi Dealer</b>
                    </div>
                    <div class="card-body" method="POST">
                        <form action="proses_edit.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id_kendaraan" value="<?=$data['id_kendaraan']?>">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Unit</label>
                                <input value="<?=$data['nama_unit']?>" name="nama_unit" type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">No Rangka</label>
                                <input value="<?=$data['no_rangka']?>" name="no_rangka" type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tahun Produksi</label>
                                <input value="<?=$data['tahun_produksi']?>" name="tahun_produksi" type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Harga</label>
                                <input value="<?=$data['harga_jual']?>" name="harga_jual" type="number" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Status</label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status_stok" <?php echo $data['status_stok']=='tersedia' ? 'checked' : '' ?>
                                    id="inlineRadio1" value="tersedia">
                                    <label class="form-check-label" for="inlineRadio1">Tersedia</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status_stok" <?php echo $data['status_stok']=='terjual' ? 'checked' : '' ?>
                                    id="inlineRadio2" value="terjual">
                                    <label class="form-check-label" for="inlineRadio2">Terjual</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Foto</label>
                                <input name="foto_unit" type="file" accept="image/.jpg,image/.png" class="form-control"
                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>