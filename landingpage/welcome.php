<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../pa web/pict/frame.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="welcome.css" />
    <title>Max's Exhibition</title>
  </head>
  <body>
    <nav>
      <div class="layar-dalam">
        <div class="logo">
            <a href="welcome.php" class="white">Max's Exhibition</a>
            <a href="welcome.php" class="black">Max's Exhibition</a>
        </div>
        <div class="menu">
          <a href="#" class="menu-btn">
            <span class="garis"></span>
            <span class="garis"></span>
            <span class="garis"></span>
          </a>
          <ul>
            <li><a href="register.php">Register</a></li>
            <li><a href="login.php">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="full-screen">
      <header id="home">
        <div class="overlay"></div>
        <video autoplay muted loop>
          <source src="../pa web/pict/exhibition.mp4" type="video/mp4" />
        </video>
        <div class="intro">
        <h3>Get The Best Experience Of Arts</h3>
          <p>
            "Showcasing arts by the one of greatest artist in the world with selection of different sensibilities and taste.<br>
            Discovered the collection by browsing it just through your devices."
          </p>
          <p>
            <a href="login.php" class="intro-btn">Explore Now</a>
          </p>
        </div>
      </header>
      <main>
        <section id="aboutus">
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
        <section class="abuabu" id="history">
          <div class="layar-dalam history">
            <div>
                <div><i class="fa-solid fa-building-user"></i></div>
                <h6>First Solo Exhibition</h6>
                <p>
                  1992 - Museum am Ostwall in Dortmund, Germany
                  & Representation of the state
                  Baden-Württenberg in Bonn, Germany.
                </p>
              </div>
              <div>
              <div><i class="fa-sharp fa-solid fa-building-columns"></i></div>
                <h6>First Group Exhibition</h6>
                <p>
                  1993 - Gallery of the peoples bank in Stuttgart, Germany,
                  Representaion of the state Baden-Würrtenberg in Bonn, Germany,
                  State Museum of Schleswig-Holstein, Germany &
                  State Museum in Mainz, Germany.
                </p>
              </div>
            </div>
        </section>
        <section class="quote">
          <div class="layar-dalam">
            <p>"Art Is Not What You See, But What You Make Others See"</p>
          </div>
        </section>
        <section id="max">
          <div class="layar-dalam">
            <h3>Profile</h3>
            <p class="ringkasan">
                Max Ackermann was a German painter and graphic artist 
                of abstract works and representational art.
            </p>
            <div class="profile">
              <div>
                <img src="../pa web/pict/max.png" />
                <h6>Max Ackermann</h6><br>
                <span>(Berlin, Germany</span>
                <span>October 5, 1887)</span>
              </div>
            </div>
          </div>
        </section>
        <section class="abuabu" id="preview">
          <div class="layar-dalam">
            <h3>Preview Art</h3>
            <p class="ringkasan">
                Some Previous Arts By Max Ackermann
            </p>
            <div class="slider">
              <div class="images">
              <input type="radio" name="slide" id="img1" checked>
              <input type="radio" name="slide" id="img2">
              <input type="radio" name="slide" id="img3">
            
              <img src="../pa web/pict/art1.png" class="m1" alt="img1">
              <img src="../pa web/pict/art4.png" class="m2" alt="img2">
              <img src="../pa web/pict/art3.jpg" class="m3" alt="img3">
            </div>
            <div class="dots">
                <label for="img1"></label>
                <label for="img2"></label>
                <label for="img3"></label>
            </div>
          </div>
          </div>
        </section>
      </main>
      <footer id="contact">
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
    </div>
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script src="javascript.js"></script>
  </body>
</html>