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
 <link rel="stylesheet"  href="./css/login.css"/>

  </head>
  <body>



      <section class="login">
        <div class="container login__container">

        <ul class="login__details">
                <il>
                <h6>PLAYER TRANSFER SYSTEM</h6>
                  </li>
                  <li>
                 <img src="./images/IMG-20221006-WA0000 - Copy.jpg">
                  </li>
                  <li>
                  <div class="login__copyright">
                    Copyright &copy; FEKA @ #4</div>
                  </li>
        </ul>
         <aside class="login__aside">
         <h2>Login</h2>
              
              <form action="index.php" method="POST" class="login__form">
            <div class="form__username">
                <input type="text" name="Username" placeholder="Username" required>
            </div>
            <div class="form__password">
            <input type="password" name="Password" placeholder="Password" required>
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
           </form>
              
              <ul class="login__socials">
                <li> <a href="https://facebook.com"><i class="uil uil-facebook-f"></i></a></li>
                <li> <a href="https://instagram.com"><i class="uil uil-instagram"></i></a></li>
                <li> <a href="https://twitter.com"><i class="uil uil-twitter"></i></a></li>
                <li> <a href="https://linkedin.com"><i class="uil uil-linkedin-alt"></i></a></li>
              </ul>
           </aside>
        </div>
     </section>