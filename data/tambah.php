<?php

include '../aset/header.php';

include '../koneksi.php';

?>

<html>
<head>
    <title>Tambah Data ODP</title>
</head>
<body>
    <div class="container">
        <div class="row mt-4">
            <div class="row-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>Tambah Data ODP</h2>
                    </div>
                    <div class="card-body">
                        <form action="proses-tambah.php" method="post">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="suhu">Suhu</label>
                                <input type="number" name="suhu" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="umur">Umur</label>
                                <input type="number" name="umur" class="form-control">
                            </div>
                            <button type="submit" name="simpan" class="btn btn-primary mr-auto">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>