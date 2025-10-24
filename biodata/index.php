<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Siswa</title>
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
                        <h2>Biodata Siswa</h2>
                    </div>
                    <div class="card-body" method="POST">
                        <form>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input name="nama" type="teks" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="mb-3">
                                <label for="nisn" class="form-label">NISN</label>
                                <input name="nisn" type="teks" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="tp-lahir" class="form-label">Tempat Lahir</label>
                                <input name="tp-lahir" type="teks" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="tg-lahir" class="form-label">Tanggal Lahir</label>
                                <input name="tg-lahir" type="date" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input name="alamat" type="teks" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input name="email" type="email" class="form-control" id="exampleInputPassword1">
                            </div>
                            Jenis Kelamin
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1"
                                value="Laki-laki">
                                <label class="form-check-label" for="radioDefault1">
                                    Laki-laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2"
                                    value="Perempuan" checked>
                                <label class="form-check-label" for="radioDefault2">
                                    Perempuan
                                </label>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="jurusan" class="form-label">Jurusan</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option value>Pilih Jurusan</option>
                                    <option value="1">IPA</option>
                                    <option value="2">IPS</option>
                                    <option value="3">AGAMA</option>
                                    <option value="3">BAHASA</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Foto</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            Pastikan data nya sudah benar
                            <br>
                            <br>
                            <a href="#" class="btn btn-primary">Kirim</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>