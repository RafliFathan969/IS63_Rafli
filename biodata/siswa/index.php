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
    include_once("../navbar.php");
    ?>

    <div class="container">
        <div class="row my-5">
            <div class="col-8 m-auto">
                <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
                    <div class="card-header text-center">
                        <b>Biodata Siswa</b>
                    </div>
                    <div class="card-body" method="POST">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">NISN</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                #1.Koneksi
                                include("../koneksi.php");

                                #2.Query menampilkan data
                                $qry = "SELECT * FROM biodata";

                                #3.Menjalankan query
                                $tampil = mysqli_query($koneksi, $qry);

                                #4.Looping hasil query
                                $nomor = 1;
                                foreach ($tampil as $data) {
                                    ?>
                                    <tr>
                                        <th scope="row"><?= $nomor++ ?></th>
                                        <td><?= $data['nama'] ?></td>
                                        <td><?= $data['nisn'] ?></td>
                                        <td><?= $data['tg_lahir'] ?></td>
                                        <td>
                                            <button class="btn btn-warning btn-sm">detail</button>
                                            <button class="btn btn-warning btn-sm">edit</button>
                                            <button class="btn btn-warning btn-sm">hapus</button>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                        </table>
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