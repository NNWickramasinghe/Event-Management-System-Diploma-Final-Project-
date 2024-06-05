<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>home</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> 
  <link rel="stylesheet"  href="style.css">
</head>
<body>
  <!--header-->
  <section class="header">
    <a href="home.php" class="logo">EventEase</a>
    <nav class="navbar">
      <a href="welcomepage.php">home</a>
      <a href="about.php">about</a>
      <a href="gallery.php">gallery</a>
      <a href="loginfrom.php">logout</a>
    </nav>

    <div id="menu-btn" class="fa fa-bars"></div>
        
      
  </section>

  <section class="home">
    <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img style="height: 650px;width: 100%;" src="finalpic/j.jpg" alt="Image 1"></div>
      <div class="swiper-slide"><img style="height: 650px;width: 100%;" src="finalpic/h7.jpg" alt="Image 2"></div>
      <div class="swiper-slide"><img style="height: 650px;width: 100%;" src="finalpic/h9.jpg" alt="Image 3"></div>
      <!-- Add more slides as needed -->
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>
  </section>

  <section class="services">
    <h1 class="heading-title"> our services </h1>
    <div class="box-container">
      <div class="box">
        <img src="finalpic/icon8.png" alt="">
        <h3>unique</h3>
      </div>
      <div class="box">
        <img src="finalpic/icon2.png" alt="">
        <h3>customize</h3>
      </div>
      <div class="box">
        <img src="finalpic/icon7.png" alt="">
        <h3>Best of the Best</h3>
      </div>
      <div class="box">
        <img src="finalpic/icon4.png" alt="">
        <h3>high quality</h3>
      </div>
      <div class="box">
        <img src="finalpic/icon6.png" alt="">
        <h3>on time service</h3>
      </div>
    </div>
  </section>


  <section class="home-about">
    <div class="image">
      <img src="finalpic/about2.jpg" alt="">
    </div>

    <div class="content">
      <h3>about us</h3>
      <p>Established in 2022, EventEase is more than just an event planning service – we're dedicated musical enthusiasts on a mission to bring relaxation to people's lives through the magic of music. With a focus on creating a haven of tranquility, we organize monthly musical events featuring renowned artists. Our belief is simple: everyone deserves a break, and what better way to unwind than with the soothing power of melodies? Join us in the harmony, and let EventEase be your guide to moments of pure musical joy and relaxation.</p>
      <a href="about.php" class="btn">read more</a>
    </div>
  </section>

  
  <section class="gallery" id="gallery">
    <h1 class="heading-title">our <span>gallery</span></h1>
    <div class="box-container">
      <div class="box">
        <img src="finalpic/g.jpg" alt="">
      </div>
      <div class="box">
        <img src="finalpic/g2.jpg" alt="">
      </div>
      <div class="box">
        <img src="finalpic/g3.jpg" alt="">
      </div>
      <div class="box">
        <img src="finalpic/g4.jpg" alt="">
      </div>

    </div>
        <div class="load-more"><a href="gallery.php" class="btn">load more</a></div>
  </section>

  <!-- Link Swiper's JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      autoplay: {
        delay: 5000, 
        disableOnInteraction: false, 
      },
      loop: true, 
      pagination: {
        el: '.swiper-pagination', 
        clickable: true, 
      },
    });
  </script>



<section class="footer">
  <div class="box-container">
    <div class="box">
      <h3>quick links</h3>
      <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
      <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
      <a href="package.php"><i class="fas fa-angle-right"></i> gallery</a>
      <a href="book.php"><i class="fas fa-angle-right"></i> view</a>
    </div>
    <div class="box">
      <h3>extra links</h3>
      <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
      <a href="#"><i class="fas fa-angle-right"></i> about us</a>
      <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
      <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
    </div>
    <div class="box">
      <h3>contact info</h3>
      <a href="#"><i class="fas fa-phone"></i> 091 1234567</a>
      <a href="#"><i class="fas fa-phone"></i> 091 9876543</a>
      <a href="#"><i class="fas fa-envelope"></i> eventease@gmail.com</a>
      <a href="#"><i class="fas fa-map"></i> Sri Lanka,Wackwalla,Galle,001</a>
    </div>
    <div class="box">
      <h3>follow us</h3>
      <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
      <a href="#"><i class="fab fa-twitter"></i> twitter</a>
      <a href="#"><i class="fab fa-instagram"></i> instagram</a>
      <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
    </div>
  </div>
  <div class="hr"><hr></div>
</section>


<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script type="text/javascript" src="script.js"></script>  

</body>
</html>