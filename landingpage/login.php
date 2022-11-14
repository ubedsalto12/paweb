<?php
    include 'connect.php';
    session_start();
    error_reporting(0);

    if (isset($_SESSION['email'])) {
        header("Location: index.php");
    }

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $pass = md5($_POST['pass']);

        $sql = "SELECT * FROM user WHERE email='$email' AND pass='$pass'";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['email'] = $row['email'];
            header("Location: index.php");
        } elseif ($email=='max123@gmail.com' AND $pass=='maxarts') {
            header("Location: admin.html");
        }
        else {
            echo "
            <script>
            alert('Email Or Password Is Wrong')
            window.location.href='../pa web/login.php';
            </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../pa web/pict/frame.png">
    <link rel="stylesheet" type="text/css" href="reglog.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p style="font-size: 2rem; font-weight:850;" align="center">LOGIN</p><br>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="pass" required>
            </div>
            <div class="input-group">
            <button name="submit" class="btn">Login</button>
            </div>
            <p class="login-register-text" align="center">Don't Have An Account?
                <a href="register.php">Register</a>
            </p>
        </form>
    </div>
</body>
</html>