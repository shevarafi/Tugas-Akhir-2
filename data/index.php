<?php

include '../koneksi.php';

$sql = "SELECT * FROM data ORDER BY nama";

$res = mysqli_query($connect, $sql);

$kasus = array();

while ($data = mysqli_fetch_assoc($res)){
    $kasus[] = $data;
}

include '../aset/header.php';
?>

<div class="card">
  <div class="card-header">
    <h2 class="card-title">Data ODP</h2>
 </div>
 <div class="card-body">
    <table class="table table-hover table-dark"><a href="tambah.php">+Tambah Data ODP</a>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Suhu</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Umur</th>
            <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $no = 1;
        foreach ($kasus as $k) { ?>

        <tr>
            <th scope="row"><?= $no ?></th>
            <td><?= $k['nama'] ?></th>
            <td><?= $k['alamat'] ?></th>
            <td><?= $k['suhu'] ?></th>
            <td><?= $k['tanggal'] ?></th>
            <td><?= $k['umur'] ?></th>
        <td>
            <a href="detail.php?id_data=<?= $k['id_data']; ?>" class="badge badge-success">Detail</a> 
            <a href="edit.php?id_data=<?= $k['id_data']; ?>" class="badge badge-warning">Edit</a>
            <a href="hapus.php?id_data=<?= $k['id_data']; ?>" class="badge badge-danger">Hapus</a>
        </td>
        </tr>
    
    <?php
        $no++;
    }
    ?>
  </tbody>
</table>

  </div>
</div>

<?php
include '../aset/footer.php';
?>
