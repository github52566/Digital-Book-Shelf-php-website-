<?php
$status = 0;
if( isset($_GET['status']) && $_GET['status']){
  $status = $_GET['status'];
}
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/main2.css" />
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/logo2.png" />
    <title>About us</title>
  </head>
  <body>
    <?php if ($status==1) { ?>
      <?php include('login_navbar.php') ?>
                   <?php } else { ?>
                     <?php include('navbar.php'); ?>
                     <?php } ?>


                     <section class="about-us text-center">
                     	<div class="container">
                     	<h1>About Us</h1>
                     	<hr>
                     	<p class="lead">First of all thanks for visiting our site.We want to share and talk about the books that we all love.You will get all the books free of charge here. </p>
                      <hr>
                      <p class="lead">Have a nice day.</p>
                      <hr>
                      <p class="lead">With Regards From Developers</p>

                      <img class="img-thumbnail" src="images/company-team_image.jpg" alt="loading">
                     	</div>
                     	</section>

                     	<div class="team-section">
                     	<h1>Our Team</h1>
                     	<span class="border"></span>
                     	<div class="ps">
                     	<a href="#p1" ><img src="images/ak.jpg" alt="loading"> </a>
                     	<a href="#p2" ><img src="images/as.jpg" alt="loading"> </a>
                     	</div>

                     	<div class="section" id="p1">
                     	<span class="name"> Afrin Kakon</span>
                     	<span class="border"></span>
                     	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen bookLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen bookLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                     	</div>

                     	<div class="section" id="p2">
                     	<span class="name">Ashek Seum</span>
                     	<span class="border"></span>
                     	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                     	</p>
                     	</div>
                     	</div>





    <?php include('footer.php') ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
