<?php
$connection = mysqli_connect("localhost","root","","paweb");
if(mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>