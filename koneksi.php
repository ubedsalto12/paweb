<?php
$connection = mysqli_connect("localhost","root","","db_lukisan");
if(mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>