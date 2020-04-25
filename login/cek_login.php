<?php

session_start(); 

include '../koneksi.php';

if(isset($_POST['btnLogin'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
    $res = mysqli_query($connect,$sql);
    $count = mysqli_numb_rows($connect);

    if($count == 1){
        $data_login = mysqli_fetch_assoc($res);
        $_SESSION['id_petugas'] = $data_login['id_petugas'];
        $_SESSION['nama'] = $data_login['nama'];

        header ("location: http://localhost/covid_19/index.php");
    }
    else{
            header ("location: http://localhost/covid_19/login/index.php");
        }
}
?>