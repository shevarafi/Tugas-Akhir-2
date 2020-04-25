<?php

include '../koneksi.php';

if(isset($_POST['simpan'])){
    $id_data = $_POST['id_data'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $suhu = $_POST['suhu'];
    $tanggal = $_POST['tanggal'];
    $umur = $_POST['umur'];

    $sql = "UPDATE data SET nama='$nama', alamat='$alamat',suhu='$suhu',tanggal='$tanggal',umur='$umur' WHERE id_data = '$id_data'";

    $res = mysqli_query($sql);

    $count = mysqli_num_rows($query);

    if(count == 1){
        header("location: cek-edit.php");
    }
    else{
        header("location: edit.php");
    }
}
?>