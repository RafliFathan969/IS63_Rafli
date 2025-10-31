<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
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
                        <h2>Bidang Studi Siswa</h2>
                    </div>
                    <div class="card-body" method="POST">
                        <form action="proses_tambah.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Kode Jurusan</label>
                                <select class="form-control" name="kd_jur" id="">
                                    <option value="">-Pilih Jurusan-</option>
                                    <option value="TI">TEKNIK</option>
                                    <option value="TM">KEDOKTERAN</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Jurusan</label>
                                <select class="form-control" name="nm_jur" id="">
                                    <option value="">-Pilih Jurusan-</option>
                                    <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                                    <option value="TEKNIK MESIN">TEKNIK MESIN</option>
                                    <option value="TEKNIK ELEKTRO">TEKNIK ELEKTRO</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>