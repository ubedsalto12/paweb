<?php
error_reporting(0);
include 'connection.php';
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="icon" href="gambar/logopage.jpeg">
    <title>Admin</title>
</head>
<body class="home">

    <div class="sidebar">
        <p><b>Max Ackermann</b></p>
        <a class="active" href="admin.html"><i class="material-icons">home</i>Home</a>
        <a href="kelola.php"><i class="material-icons">edit</i>Manage Collection</a>
        <a href="user.php"><i class="material-icons">group</i>User</a>
        <a href="dashboard.php"><i class="material-icons">dashboard</i>Dashboard</a>
        <a href="logout.php"><i class="material-icons">logout</i>Logout</a>
      </div>
    <div class="content">
        <h1>Hello Max Ackermann</h1>
        <h1 id ="current-time"></h1>
        <h1 id="current-date"></h1>
    </div>
    <footer>
        <p>Copyright &copy; 2022 Max Ackerman. All right reserved</p>
    </footer>

    <script>
        let time = document.getElementById("current-time");
        setInterval(()=>{
            let d = new Date();
            time.innerHTML = d.toLocaleTimeString();
        },1000)
        let date = document.getElementById("current-date");
        setInterval(()=>{
            let d = new Date();
            date.innerHTML = d.toLocaleDateString();
        },1000)
        
    </script>
    
  
</body>
</html>