<?php

include '../koneksi.php';

include 'proses-edit.php';

include '../aset/header.php';

$id_data = $_GET['id_data'];
$query = mysqli_query($connect, "SELECT * FROM data WHERE id_data = '$id_data'");
$data = mysqli_fetch_assoc($query);
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Edit</h3>
                </div>
                <div class="card-body">
                <form action="" method="post">
            <table>
                <input type="hidden" name="id_data" value="<?= $data['id_data']; ?>">
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" value="<?= $data['nama']; ?>" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="<?= $data['alamat']; ?>" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="suhu">Suhu</label>
                            <input type="number" class="form-control" name="suhu" value="<?= $data['suhu']; ?>" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" value="<?= $data['tanggal']; ?>" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="umur">Umur</label>
                            <input type="number" class="form-control" name="umur" value="<?= $data['umur']; ?>" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><button type="submit" class="btn btn-primary" name="simpan">Simpan</button></td>
                </tr>
            </table>
        </form>
        </div>
    </div>
</div>
</div>
</div>

<?php
include '../aset/footer.php';
?>
