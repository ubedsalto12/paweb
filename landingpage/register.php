<?php
    include 'connect.php';
    error_reporting(0);
    session_start();

    if (isset($_SESSION['email'])) {
        header("Location: login.php");
    }

    if (isset($_POST['submit'])) {
        $names = $_POST['names'];
        $gender = $_POST['gender'];
        $borndate = $_POST['borndate'];
        $email = $_POST['email'];
        $pass = md5($_POST['pass']);
        $cpass = md5($_POST['cpass']);

        if ($pass == $cpass) {
            $sql = "SELECT * FROM user WHERE email='$email'";
            $result = mysqli_query($conn, $sql);
            if (!$result->num_rows > 0) {
                $sql = "INSERT INTO user (names, gender, borndate, email, pass)
                        VALUES ('$names', '$gender', '$borndate', '$email', '$pass')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "<script>alert('Success To Registration')</script>";
                    $names = "";
                    $gender = "";
                    $borndate = "";
                    $email = "";
                    $_POST['password'] = "";
                    $_POST['cpassword'] = "";
                    header("Location: login.php");
                } else {
                    echo "<script>alert('Wrong Input, Please Fill Out Again')</script>";
                }
            } else {
                echo "<script>alert('Email Is Already Exists')</script>";
            }
        } else {
            echo "<script>alert('Password Not Matched.')</script>";
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
    <title>Register</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p style="font-size: 2rem; font-weight:850;" align="center">REGISTER</p><br>
            <div class="input-group">
                <input type="text" placeholder="Name" name="names" maxlength="30" required>
            </div>
            <div class="input-gender">
                <td>Gender : </td><br>
                <td colspan="3">
                    <input type="radio" name="gender" value="Male" required> Male <br>
                    <input type="radio" name="gender" value="Female" required> Female <br><br>
                </td>
            </div>
            <div class="input-date">
                <td>Birth of Date : </td><br>
                <input type="date" placeholder="Date" name="borndate" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="pass" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpass" required>
            </div>
            <div class="input-group">
            <button name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text" align="center">Have An Account?
                <a href="login.php">Login</a>
            </p>
        </form>
    </div>
</body>
</html>