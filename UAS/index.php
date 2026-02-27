<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../biodata/css/all.css">
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
                        <b>Selamat Datang</b>
                        <a href="form_tambah.php" class="float-end btn btn-primary btn-sm"><i class="fa-solid fa-user-plus"></i> Tambah Kendaraan</a>
                    </div>
                    <div class="card-body" method="POST">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">No Rangka</th>
                                    <th scope="col">Tahun</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                #1.Koneksi
                                include("koneksi.php");

                                #2.Query menampilkan data
                                $qry = "SELECT * FROM kendaraan";

                                #3.Menjalankan query
                                $tampil = mysqli_query($koneksi, $qry);

                                #4.Looping hasil query
                                $nomor = 1;
                                foreach ($tampil as $data) {
                                    ?>
                                    <tr>
                                        <th scope="row"><?= $nomor++ ?></th>
                                        <td><?= $data['nama_unit'] ?></td>
                                        <td><?= $data['no_rangka'] ?></td>
                                        <td><?= $data['tahun_produksi'] ?></td>
                                        <td><?= $data['status_stok'] ?></td>
                                        <td>
                                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $data['id_kendaraan'] ?>"><i class="fa-solid fa-user"></i></button>
                                            <a href="formedit.php?id=<?=$data['id_kendaraan']?>" class="btn btn-info btn-sm"><i class="fa-solid fa-user-pen"></i></a>
                                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalhapus<?= $data['id_kendaraan'] ?>"><i class="fa-solid fa-trash"></i></button>
                                            
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal<?= $data['id_kendaraan'] ?>" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Data Detail
                                                                <?= $data['nama_unit'] ?>
                                                            </h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Nama</td>
                                                                        <th scope="row"><?= $data['nama_unit'] ?></th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>No Rangka</td>
                                                                        <th scope="row"><?= $data['no_rangka'] ?></th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Tahun</td>
                                                                        <th scope="row"><?= $data['tahun_produksi'] ?></th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Status</td>
                                                                        <th scope="row"><?= $data['status_stok'] ?></th>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal Hapus-->
                                            <div class="modal fade" id="modalhapus<?= $data['id_kendaraan'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Yakin Data Dengan Nama <?= $data['nama_unit'] ?> Ingin Dihapus?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <a href="proseshapus.php?id=<?=$data['id_kendaraan']?>" class="btn btn-danger">Hapus</a>
                                                        </div>
                                                    </div>
                                                </div>
                                        </td>
                                </tbody>
                        </div>
                    </div>
                </div>
            </div>
            </div>
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
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="../biodata/js/all.js"></script>
</body>
</html>