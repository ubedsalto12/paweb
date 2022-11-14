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
            <div class="logo"><a href="#HOME">Max's Exhibiton</a></div>
            <div class="navbar">
                <a href="#" class="tombol-nav">
                    <span class="garis"></span>
                    <span class="garis"></span>
                    <span class="garis"></span>
                </a>
                <ul>
                    <li><a href="#HOME">HOME</a></li>
                    <li><a href="#COLLECTION">COLLECTION</a></li>
                    <li><a href="#ABOUT">ABOUT</a></li>
                    <li><a href="#CONTACT">CONTACT</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="home"  id="HOME">
        <p>WELCOME TO MAX'S EXHIBITION</p>
    </div>
    <section class="collection" id="COLLECTION">
        <h1 class="heading">C O L L E C T I O N</h1>
        <div class="box-container">
            <?php
            require "connection.php";
            $query = mysqli_query($db, "SELECT * FROM table_lukisan");
            while ($row = mysqli_fetch_assoc($query)){
            ?>
            <div class="box">
                <img src="<?= $row['gambar']?>" alt="<?= $row['gambar']?>">
                <div class="content">
                    <h3><?= $row['judul']?></h3>
                    <p><?= $row['diskripsi']?></p>
                    <a href="detail.php?id=<?=$row['id']?>" class="btn"><i>See More...</i></a>
                </div>
            </div>
            <?php
            }?>
        </div>
    </section>
    <section id="ABOUT" class="aboutus">
          <div class="layar-dalam">
            <h3>About Us</h3>
            <p class="ringkasan">
                Simple Ways To Visit The Exhibition !
            </p>
            <div class="konten-isi">
              <p>
                An online-based exhibition website that presented arts by one of the pioneers of abstract art, Max Ackermann.
                To get a new experience of art exhibition in different way.
              </p>
            </div>
          </div>
    </section>
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