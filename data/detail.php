<?php

include '../aset/header.php';

include '../koneksi.php';

$id_data = $_GET['id_data'];
$sql = mysqli_query($connect,"SELECT * FROM data WHERE id_data='$id_data'");
$detail = mysqli_fetch_assoc($sql);
?>

<div class="container">
    <div class="row mt-4">
        <div class="col md-7">
        <h2>Detail ODP</h2>
        <hr class="bg-light">
            <table class="table table-bordered">
                <tr>
                    <td>Nama</td>
                    <td><?= $detail['nama'] ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><?= $detail['alamat'] ?></td>
                </tr>
                <tr>
                    <td>Suhu</td>
                    <td><?= $detail['suhu'] ?></td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td><?= $detail['tanggal'] ?></td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td><?= $detail['umur'] ?></td>
                </tr>
                <tr>
                    <td class="text-right" colspan="2">
                        <a href="index.php" class="btn btn-success">
                            <i class="fa fa-angle-double-left">Kembali</i></a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<?php
include '../aset/footer.php';
?>