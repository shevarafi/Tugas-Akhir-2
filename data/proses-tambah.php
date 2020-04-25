<?php

include '../koneksi.php';

if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $suhu = $_POST['suhu'];
    $tanggal = $_POST['tanggal'];
    $umur = $_POST['umur'];
    $id_data = $_POST['id_data'];

    $query = mysqli_query($connect,"INSERT INTO data (nama, alamat, suhu, tanggal, umur, id_data)
    VALUES ('$nama', '$alamat', '$suhu', '$tanggal', '$umur', '$id_data')");

    $count = mysqli_affected_rows($connect);

    if($query > 0){
        header("location: index.php");
    }
    else{
        header("location: tambah.php");
    }
}
else{
    header("location: tambah.php");
}
?>