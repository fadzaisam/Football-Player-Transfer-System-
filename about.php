<!Doctype php>
<php lang="en">
  <head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Player Transfer System About</title>
<!--ICONSCOUT CDN-->
<link rel="stylesheet" href="https://unicons.iconscout.com/release/
v2.1.6/css/unicons.css">

<!--GOOGLE FONTS (MONTSERRAT)-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com"> <crossorigin></crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com/css2family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
rel="stylesheet">

<link rel="stylesheet"  href="./css/style.css"/>
<link rel="stylesheet"  href="./css/about.css"/>

</head>
<body>
<nav>
  <div class="container nav__container">
      <a href="index.php"><h4>FEKA @ #4</h4></a>
      <ul class="nav__menu">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="courses.php">Courses</a></li>
          <li><a href="contact.php">Contact</a></li>
      </ul>
       <button id="open-menu-btn"><i class="uli uil-bars"></i></button>
       <button id="open-menu-btn"><i class="uli uil-multiply"></i></button>
      </nav>
      </div>



<section class="about__achievements">
    <div class="container about__achievements-container">
    <div class="about__achievements-left">
        <img src="./images/Screenshot_20230122-152246_WhatsAppBusiness - Copy.jpg">
    </div>
    <div class="about__achievements-right">
        <h1>Achievements</h1>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Debitis exercitationem non dollores sed expedita hic
            dignissimos,minus labore voluptas inventore delectus nobis
            culpa perspiciatis ex repellat distinctio aperiam ipsa tempore.
          </p>
          <div class="achievements__cards">
            <article class="achievement__card">
                <span class="achievement__icon">
                    <i class="uil uil-video"></i>
                </span>
                <h3>450+</h3>
                <p>Courses</p>
            </article>

            <article class="achievement__card">
                <span class="achievement__icon">
                    <i class="uil uil-users-alt"></i>
                </span>
                <h3>79,000+</h3>
                <p>Students</p>
            </article>

            <article class="achievement__card">
                <span class="achievement__icon">
                    <i class="uil uil-trophy"></i>
                </span>
                <h3>26</h3>
                <p>Awards</p>
            </article>

          </div>
    </div>
    </div>
</section>
<!----======================================= END OF ACHIEVEMENTS =========================-->


<!--============================================ ACHIEVEMENTS ============================-->
<section class="team">
    <h2>Meet Our Team</h2>
    <div class="container team__container">
    <?php
include './conn.php';

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM dynamos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>

        <article class="team__member">
            <div class="team__member-image">
                <img src="./images/IMG-20221006-WA0000.jpg">
                <!--<img src="<?php echo $row["image"]; ?>">-->
            </div>
            <div class="team__member-info">
            <h4><?php echo $row["name"] . " " . $row["surname"]; ?></h4>
    <p><?php echo $row["description"]; ?></p>
    <p>Position: <?php echo $row["position"]; ?></p>
    <p>Status: <?php echo $row["status"]; ?></p>
    <p>Age: <?php echo $row["age"]; ?></p>
    <a href="courses.php" class="btn btn-primary">Learn More</a>
            </div>
            <div class="team__member-socials">
                <a href="http://instagram.com" targets="_blank"><i class="uil uil-instagram"></i></a>
                <a href="http://twitter.com" targets="_blank"><i class="uil uil-twitter-alt"></i></a>
                <a href="http://linkedin.com" targets="_blank"><i class="uil uil-linkedin-alt"></i></a>
            </div>
        </article>

        <?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>

 </div>
 </section>





<!--===================================== END OF ACHIEVEMENTS =============================-->


        <!--=================================== FOOTER ======================-->

    
<footer>
    <div class="container footer__container">
      <div class="footer__1">
        <a href="index.php" class="footer__logo"><h4>FEKA @ #4</h4></a>
        <P>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis ipsum nobis ratione.
        </P>
      </div>
  
      <div class="footer__2">
        <h4>Permalinks</h4>
        <ul class="permalinks">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="courses.php">Courses</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
  
  
      <div class="footer__3">
        <h4>Primacy</h4>
        <ul class="privacy">
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms and Conditions</a></li>
          <li><a href="#">Refund Policy</a></li>
        </ul>
      </div>
  
      <div class="footer__4">
        <h4>Contact Us</h4>
        <p>+263 775 959 575</p>
        <p>+263 714 612 182</p>
        <p>+263 732 959 575</p>
        <p>erickfadzaisam@gmail.com</p>
      </div>
  
  
      <ul class="footer__socials">
          <li>
            <a href="#"><i class="uil uil-facebook-f"></i></a>
          </li>
          <li>
            <a href="#"><i class="uil uil-instagram-alt"></i></a>
          </li>
          <li>
            <a href="#"><i class="uil uil-twitter"></i></a>
          </li>
          <li>
            <a href="#"><i class="uil uil-linkedin-alt"></i></a>
          </li>
        </ul>
      </div>
    </div>
    <div class="footer__copyright">
      <small>Copyright &copy; FEKA @ #4</small>
    </div>
  </footer>
  
  <!--=================================== FOOTER ======================-->
  
  <script src="./main.js"></script>
    </body>
    </php>