

<!Doctype php>
<php lang="en">
  <head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Player Transfer System Courses</title>
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
 <link rel="stylesheet"  href="./css/courses.css"/>
 <style>
   .courses {
      margin-top: 1rem;
   }
 </style>

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

<!--=============================================== SEARCH =======================================-->


<!--===================================================== SEARCH =======================================-->

<!--============================ COURSES ==============================-->




<section class="courses">

   <div class="mid">
    <form action="" method="POST" class="contact__form">
      <div class="search">
         <input type="text" placeholder="Search here..." required/>
         <select>
            <option All Categories>All Categories</option>
            <option value="Category 1">Category 1</option>
            <option value="Category 2">Category 2</option>
            <option value="Category 3">Category 3</option>
            <option value="Category 4">Category 4</option>
            <option value="Category 5">Category 5</option>
         </select>
         <button type="submit" class="btn btn-primary">Search</button>
      </div>
    </form>

    
   </div>
   <h2>Our Popular Courses</h2>
   <div class="container courses__container">

   

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

<article class="course">
  <div class="course__image">
  <img src="./images/Screenshot_20230122-152246_WhatsAppBusiness - Copy.jpg">
    <!--<img src="<?php echo $row["image"]; ?>">-->
  </div>
  <div class="course__info">
    <h4><?php echo $row["name"] . " " . $row["surname"]; ?></h4>
    <p><?php echo $row["description"]; ?></p>
    <p>Position: <?php echo $row["position"]; ?></p>
    <p>Status: <?php echo $row["status"]; ?></p>
    <p>Age: <?php echo $row["age"]; ?></p>
    <a href="courses.php" class="btn btn-primary">Learn More</a>
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


 

 
 
 <!--============================ END OF COURSES ==============================-->

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