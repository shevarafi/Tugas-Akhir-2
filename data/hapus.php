<?php

include '../koneksi.php';

$id_data = $_GET['id_data'];

$query = "DELETE FROM data  WHERE id_data = '$id_data'";

$data = mysqli_query($connect,$query);

if(! $data){
    die("Gagal Menghapus Date: " .mysqli_errno($connect). "-".mysqli_error($connect));
}
else{
    echo "<script>alert('Data Berhasil Dihapus.'); window.location='index.php'; </script>"; 
}
?>