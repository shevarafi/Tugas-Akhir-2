<?php
$connect = mysqli_connect("localhost","root","","covid-19");

// check connection
if(mysqli_connect_error()){
    echo "koneksi database gagal : " . mysqli_connect_error();
}