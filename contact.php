<!Doctype php>
<php lang="en">
  <head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Player Transfer System</title>
<!--ICONSCOUT CDN-->
<link rel="stylesheet" href="https://unicons.iconscout.com/release/
v2.1.6/css/unicons.css">

<!--GOOGLE FONTS (MONTSERRAT)-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com"> <crossorigin></crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com/css2family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
rel="stylesheet">

<!-- SWIPER JS-->
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

 <link rel="stylesheet"  href="./css/style.css"/>
 <link rel="stylesheet"  href="./css/contact.css"/>

  </head>
  <body>
<!--=============================================== NAV BAR ===================================-->

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

      <!--======================================== END OF NAV BAR ====================================-->




      <section class="contact">
        <div class="container contact__container">
           <aside class="contact__aside">
              <div class="aside__image">
                 <img src="./images/Screenshot_20230122-152246_WhatsAppBusiness - Copy.jpg">
              </div>
              <h2>Contact Us</h2>
              <p>
                 Lorem ipsum dollar sit amet consectetur adipisicing elit. Quisquam saep
              </p>
              <ul class="contact__details">
                <li>
                    <i class="uil uil-phone-times"></i>
                    <h5>+263775959575</h5>
                </li>
                <li>
                <i class="uil uil-envelope"></i>
                <h5>erickfadzaisam@gmail.com</h5>
                </li>
                <li>
                    <i class="uil uil-location-point"></i>
                    <h5>Mbare Harare, Zimbabwe</h5>
                </li>
              </ul>
              <ul class="contact__socials">
                <li> <a href="https://facebook.com"><i class="uil uil-facebook-f"></i></a></li>
                <li> <a href="https://instagram.com"><i class="uil uil-instagram"></i></a></li>
                <li> <a href="https://twitter.com"><i class="uil uil-twitter"></i></a></li>
                <li> <a href="https://linkedin.com"><i class="uil uil-linkedin-alt"></i></a></li>
              </ul>
           </aside>


           <form action="https://formspree.io/f/xeqnevgj" method="POST" class="contact__form">
            <div class="form__name">
                <input type="text" name="First Name" placeholder="First Name" required>
                <input type="text" name="Last Name" placeholder="Last Name" required>
            </div>

            <input type="email" name="Email Address" placeholder="Your Email Address" required>
            <textarea name="Message" rows="7" placeholder="Message" required></textarea>
            <button type="submit" class="btn btn-primary">Send Message</button>
           </form>
        </div>
     </section>




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