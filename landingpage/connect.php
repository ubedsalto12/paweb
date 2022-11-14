<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "paweb";

    $conn = mysqli_connect($server, $user, $pass, $database);
    if(!$conn){
        die("Failed Connected To Database");
    }
?>