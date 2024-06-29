<?php

include './conn.php';

?>


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

 <!--<style>
  body {0773355552
    background-image: url("./images/Screenshot_20230122-152246_WhatsAppBusiness\ -\ Copy.jpg");
  }
 </style> -->

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
    <header>

      <!--======================================== END OF NAV BAR ====================================-->

        <div class="container header__container">
            <div class="header__left">
              <h1>Grow your skills to advance your career path</h1>
              <p>
                Lorem ipsum dolor sit
                  amet consectetur,elit
                  temporibus,qui.
              </p>
              <a href="courses.php" class="btn btn-primary">Get Started</a>
            </div>

            <div class="header__right">
              <div class="header__right-image">
                <img src="./images/Screenshot_20230122-152246_WhatsAppBusiness - Copy.jpg" alt="image">
              </div>
            </div>
            </div>
        </header>

<section class="categories">
  <div class="container categories__container">
    <div class="categories__left">
      <h1>Categories</h1>
      <p>
        Lorem ipsum dolor sit
        amet consectetur,elit
        temporibus,qui.
      </p>
      <a href="#" class="btn">Learn More</a>
    </div>

    <div class="categories__right">
      <article class="category">
        <span class="category__icon">
          <i class="uil uil-bitcoin-circle"></i>
        </span>
        <h5>Blockchain</h5>
        <p>
          Lorem ipsum dolor sit
          amet consectetur,elit
          temporibus,qui.
        </p>
      </article>

      
        <article class="category">
          <span class="category__icon">
            <i class="uil uil-bitcoin-palette"></i>
          </span>
          <h5>Graphic Design</h5>
          <p>
            Lorem ipsum dolor sit
            amet consectetur,elit
            temporibus,qui.
          </p>
        </article>

        
          <article class="category">
            <span class="category__icon">
              <i class="uil uil-bitcoin-circle"></i>
            </span>
            <h5>Finance</h5>
            <p>
              Lorem ipsum dolor sit
              amet consectetur,elit
              temporibus,qui.
            </p>
          </article>

        
          <article class="category">
            <span class="category__icon">
              <i class="uil uil-bitcoin-megaphone"></i>
            </span>
            <h5>Marketing</h5>
            <p>
              Lorem ipsum dolor sit
              amet consectetur,elit
              temporibus,qui.
            </p>
          </article>

          
            <article class="category">
              <span class="category__icon">
                <i class="uil uil-bitcoin-music"></i>
              </span>
              <h5>Music</h5>
              <p>
                Lorem ipsum dolor sit
                amet consectetur,elit
                temporibus,qui.
              </p>
            </article>

            
              <article class="category">
                <span class="category__icon">
                  <i class="uil uil-puzzle-piece"></i>
                </span>
                <h5>Business</h5>
                <p>
                  Lorem ipsum dolor sit
                  amet consectetur,elit
                  temporibus,qui.
                </p>
              </article>
                </div>
  </div>
</section>
<!--============================ END OF CATEGORIES ==============================-->


<!--============================ COURSES ==============================-->


<section class="courses">
  <h2>Our Popular Courses</h2>
  <div class="container courses__container">
     <article class="course">
      <div class="course__image">
        <img src="./images/Screenshot_20230122-152246_WhatsAppBusiness - Copy.jpg">
      </div>
      <div class="course__info">
        <h4>Responsive Social Media Website UI Design</h4>
      <p>
        Lorem ipsum dollar sit amet consectetur adipisicing elit. Quisquam saepe animi, ad quis et atque initial-scale placet minus ipsa rem?
      </p>
      <a href="courses.php" class="btn btn-primary">Learn More</a>
      </div>
    </article>
  

<article class="course">
  <div class="course__image">
    <img src="./images/Screenshot_20230122-152246_WhatsAppBusiness - Copy.jpg">
  </div>
  <div class="course__info">
    <h4>Responsive Social Media Website UI Design</h4>
  <p>
    Lorem ipsum dollar sit amet consectetur adipisicing elit. Quisquam saepe animi, ad quis et atque initial-scale placet minus ipsa rem?
  </p>
  <a href="courses.php" class="btn btn-primary">Learn More</a>
</div> 
</article>

<article class="course">
  <div class="course__image">
    <img src="./images/Screenshot_20230122-152246_WhatsAppBusiness - Copy.jpg">
  </div>
  <div class="course__info">
    <h4>Responsive Social Media Website UI Design</h4>
  <p>
    Lorem ipsum dollar sit amet consectetur adipisicing elit. Quisquam saepe animi, ad quis et atque initial-scale placet minus ipsa rem?
  </p>
  <a href="courses.php" class="btn btn-primary">Learn More</a>
</div> 
</article>
</div>
</section>


<!--============================ END OF COURSES ==============================-->

<!--============================ FREQUENTLY ASKED QUESTIONS ==============================-->


<section class="faqs">
  <h2>Frequently Asked Questions</h2>
 <div class ="container faqs__container">
  <article class="faq">
      <div class="faq__icon"><i class="uil uil-plus"></i></div>
        <div class="question__answer">
          <h4>How do l know the right courses for me?</h4>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit laudantium quis qui similique quidem at voluptatem ex. Est dolorum minima dolor aut ut, accusantium vitae architecto aliquid nostrum numquam quibusdam.
          </p>
        </div>
  </article>
      



  <article class="faq">
      <div class="faq__icon"><i class="uil uil-plus"></i></div>
        <div class="question__answer">
          <h4>How do l know the right courses for me?</h4>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit laudantium quis qui similique quidem at voluptatem ex. Est dolorum minima dolor aut ut, accusantium vitae architecto aliquid nostrum numquam quibusdam.
          </p>
        </div>
  </article>
      


  <article class="faq">
      <div class="faq__icon"><i class="uil uil-plus"></i></div>
        <div class="question__answer">
          <h4>How do l know the right courses for me?</h4>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit laudantium quis qui similique quidem at voluptatem ex. Est dolorum minima dolor aut ut, accusantium vitae architecto aliquid nostrum numquam quibusdam.
          </p>
        </div>
  </article>
      

<article class="faq">
  <div class="faq__icon"><i class="uil uil-plus"></i></div>
    <div class="question__answer">
      <h4>How do l know the right courses for me?</h4>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit laudantium quis qui similique quidem at voluptatem ex. Est dolorum minima dolor aut ut, accusantium vitae architecto aliquid nostrum numquam quibusdam.
      </p>
    </div>
</article>

<article class="faq">
  <div class="faq__icon"><i class="uil uil-plus"></i></div>
    <div class="question__answer">
      <h4>How do l know the right courses for me?</h4>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit laudantium quis qui similique quidem at voluptatem ex. Est dolorum minima dolor aut ut, accusantium vitae architecto aliquid nostrum numquam quibusdam.
      </p>
    </div>
</article>

<article class="faq">
  <div class="faq__icon"><i class="uil uil-plus"></i></div>
    <div class="question__answer">
      <h4>How do l know the right courses for me?</h4>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit laudantium quis qui similique quidem at voluptatem ex. Est dolorum minima dolor aut ut, accusantium vitae architecto aliquid nostrum numquam quibusdam.
      </p>
    </div>
</article>

<article class="faq">
  <div class="faq__icon"><i class="uil uil-plus"></i></div>
    <div class="question__answer">
      <h4>How do l know the right courses for me?</h4>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit laudantium quis qui similique quidem at voluptatem ex. Est dolorum minima dolor aut ut, accusantium vitae architecto aliquid nostrum numquam quibusdam.
      </p>
    </div>
</article>

<article class="faq">
  <div class="faq__icon"><i class="uil uil-plus"></i></div>
    <div class="question__answer">
      <h4>How do l know the right courses for me?</h4>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit laudantium quis qui similique quidem at voluptatem ex. Est dolorum minima dolor aut ut, accusantium vitae architecto aliquid nostrum numquam quibusdam.
      </p>
    </div>
</article>

<article class="faq">
  <div class="faq__icon"><i class="uil uil-plus"></i></div>
    <div class="question__answer">
      <h4>How do l know the right courses for me?</h4>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit laudantium quis qui similique quidem at voluptatem ex. Est dolorum minima dolor aut ut, accusantium vitae architecto aliquid nostrum numquam quibusdam.
      </p>
    </div>
</article>

<article class="faq">
  <div class="faq__icon"><i class="uil uil-plus"></i></div>
    <div class="question__answer">
      <h4>How do l know the right courses for me?</h4>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit laudantium quis qui similique quidem at voluptatem ex. Est dolorum minima dolor aut ut, accusantium vitae architecto aliquid nostrum numquam quibusdam.
      </p>
    </div>
</article>
</div>
</section>
<!--============================ END OF FREQUENTLY ASKED QUESTIONS ==============================-->


<!--=================================== TESTIMONIALS =================================-->

<section class="container testimonials__container" mySwiper>
  <h2>Students Testimonials</h2>
  <div class="swiper-wrapper">
    <article class="testimonial swiper-slide">
      <div class="avatar">
        <img src="./images/Screenshot_20230122-152246_WhatsAppBusiness - Copy.jpg">
      </div>
      <div class="testimonial__info">
        <h5>Erick Aisam</h5>
        <small>Student</small>
      </div>
      <div class="testimonial__body">
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
          Debitis exercitationem non dollores sed expedita hic
          dignissimos,minus labore voluptas inventore delectus nobis
          culpa perspiciatis ex repellat distinctio aperiam ipsa tempore.
        </p>
      </div>
    </article>


    <article class="testimonial swiper-slide">
  <div class="avatar">
    <img src="./images/Screenshot_20230122-152246_WhatsAppBusiness - Copy.jpg">
  </div>
  <div class="testimonial__info">
    <h5>Junior Aisam</h5>
    <small>Web Developer</small>
  </div>
  <div class="testimonial__body">
    <p>
      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
      Debitis exercitationem non dollores sed expedita hic
      dignissimos,minus labore voluptas inventore delectus nobis
      culpa perspiciatis ex repellat distinctio aperiam ipsa tempore.
    </p>
  </div>
</article>

<article class="testimonial swiper-slide">
  <div class="avatar">
    <img src="./images/Screenshot_20230122-152246_WhatsAppBusiness - Copy.jpg">
  </div>
  <div class="testimonial__info">
    <h5>Fadzai Aisam</h5>
    <small>Student</small>
  </div>
  <div class="testimonial__body">
    <p>
      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
      Debitis exercitationem non dollores sed expedita hic
      dignissimos,minus labore voluptas inventore delectus nobis
      culpa perspiciatis ex repellat distinctio aperiam ipsa tempore.
    </p>
  </div>
</article>

<article class="testimonial swiper-slide">
  <div class="avatar">
    <img src="./images/Screenshot_20230122-152246_WhatsAppBusiness - Copy.jpg">
  </div>
  <div class="testimonial__info">
    <h5>Laura Aisam</h5>
    <small>Student</small>
  </div>
  <div class="testimonial__body">
    <p>
      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
      Debitis exercitationem non dollores sed expedita hic
      dignissimos,minus labore voluptas inventore delectus nobis
      culpa perspiciatis ex repellat distinctio aperiam ipsa tempore.
    </p>
  </div>
</article>

<article class="testimonial swiper-slide">
  <div class="avatar">
    <img src="./images/Screenshot_20230122-152246_WhatsAppBusiness - Copy.jpg">
  </div>
  <div class="testimonial__info">
    <h5>Rosaria Aisam</h5>
    <small>Student</small>
  </div>
  <div class="testimonial__body">
    <p>
      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
      Debitis exercitationem non dollores sed expedita hic
      dignissimos,minus labore voluptas inventore delectus nobis
      culpa perspiciatis ex repellat distinctio aperiam ipsa tempore.
    </p>
  </div>
</article>

<article class="testimonial swiper-slide">
  <div class="avatar">
    <img src="./images/Screenshot_20230122-152246_WhatsAppBusiness - Copy.jpg">
  </div>
  <div class="testimonial__info">
    <h5>Fungai Aisam</h5>
    <small>Student</small>
  </div>
  <div class="testimonial__body">
    <p>
      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
      Debitis exercitationem non dollores sed expedita hic
      dignissimos,minus labore voluptas inventore delectus nobis
      culpa perspiciatis ex repellat distinctio aperiam ipsa tempore.
    </p>
  </div>
</article>

<article class="testimonial swiper-slide">
  <div class="avatar">
    <img src="./images/Screenshot_20230122-152246_WhatsAppBusiness - Copy.jpg">
  </div>
  <div class="testimonial__info">
    <h5>Laura Aisam</h5>
    <small>Student</small>
  </div>
  <div class="testimonial__body">
    <p>
      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
      Debitis exercitationem non dollores sed expedita hic
      dignissimos,minus labore voluptas inventore delectus nobis
      culpa perspiciatis ex repellat distinctio aperiam ipsa tempore.
    </p>
  </div>
</article>

<article class="testimonial swiper-slide">
  <div class="avatar">
    <img src="./images/Screenshot_20230122-152246_WhatsAppBusiness - Copy.jpg">
  </div>
  <div class="testimonial__info">
    <h5>Engeline Aisam</h5>
    <small>Student</small>
  </div>
  <div class="testimonial__body">
    <p>
      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
      Debitis exercitationem non dollores sed expedita hic
      dignissimos,minus labore voluptas inventore delectus nobis
      culpa perspiciatis ex repellat distinctio aperiam ipsa tempore.
    </p>
  </div>
</article>
</div>
<div class="swiper-pagination"></div>
</section>
<!--=================================== END OF TESTIMONIALS ======================-->



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

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="./main.js"></script>

<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    // when window width is >= 600px
    breakpoint: {
      600: {
        slidesPerView: 2,
      }
    }

  });
</script>

  </body>
  </php>