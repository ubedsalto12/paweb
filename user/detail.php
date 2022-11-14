<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max's Exhibition</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="shortcut icon" type="x-icon" href="gmbar frame.png">

</head>
<body>
    <nav>
        <div class="container">
            <div class="logo"><a href="">Max's Exhibiton</a></div>
            <div class="navbar">
                <a href="#" class="tombol-nav">
                    <span class="garis"></span>
                    <span class="garis"></span>
                    <span class="garis"></span>
                </a>
                <ul>
                    <li><a href="index.php"><i class="fa-solid fa-arrow-left"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class = "detail">
        <?php
            require "connection.php";
            if (isset($_GET['id'])){
                $query = mysqli_query($db, "SELECT * FROM table_lukisan WHERE id=$_GET[id]");
                $result = mysqli_fetch_assoc($query);
                $id = $result['id'];
                $judul = $result['judul'];
                $diskripsi = $result['diskripsi'];
                $harga = $result['harga'];
                $gambar = $result['gambar'];
            }
        ?>
        <img src="<?= $gambar?>" alt="<?= $gambar?>">
    </div>
    <div class = "detail-container">
            <div class = "detail-content">
                <h3><?= $judul?></h3>
                <p><?= $diskripsi?></p>
                <p class="harga">Rp<?= $harga?></p>
                <div class = "btn-container">
                <a href="https://wa.link/d6mevs" class ="btn-buy">BUY NOW</a>
                </div>
            </div>
    </div>
    <footer id="CONTACT">
        <div class="layar-dalam">
          <div>
            <h5>Contact</h5>
            <div class="social-media">
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-solid fa-envelope"></i></a>
            </div> 
          </div>
        </div>
        <div class="layar-dalam">
          <div class="copyright">&copy; 2022 Max Ackermann</div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="javascript.js"></script>
</body>
</html>