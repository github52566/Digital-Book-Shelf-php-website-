<?php
$status =0;
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
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/logo2.png" />

    <title>Book Shelf Bangla Books</title>
    <style media="screen">
    .c1 {
font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
font-size: 150%;
padding: 4%;
margin-top: 5%;
background-color: #45b6a1e3;
border-radius: 10px;
text-align: center;
font-weight: bold;
}
    </style>
  </head>

  <body>
    <?php
if ($status == 1) {
  include('login_navbar.php');
}else{
    include('navbar.php');
}
   ?>

<?php if ($status ==1) { ?>

  <div class="container">
    <div class="menu2">
      <div class="list1">
       <b>Autobiography</b>
      </div>
    </div>
  </div>

  <div class="container mt-3">
    <div class="row">
      <div class="owl-carousel owl-theme">
        <div class="item">
          <div class="card">
            <a href="bangla_book_page.php?b_id=1">  <img src="images/agni.jpg" alt="img" class="card-img-top"></a>
            <div class="card-body">
              <h3>AgniPakkha</h3>

            </div>
          </div>
        </div>

        <div class="item">
          <div class="card">
            <a href="bangla_book_page.php?b_id=2"> <img src="images/pothe.jpg" alt="img" class="card-img-top"> </a>

            <div class="card-body">
              <h3>Pothe Probase</h3>

            </div>
          </div>
       </div>

       <div class="item">
         <div class="card">
           <a href="bangla_book_page.php?b_id=3"> <img src="images/surrender.jpg" alt="img" class="card-img-top"> </a>

           <div class="card-body">
             <h3 style="font-size: 130.5% ">Surrender at Dhaka</h3>

           </div>
         </div>
       </div>

       <div class="item">
         <div class="card">
           <a href="bangla_book_page.php?b_id=4"> <img src="images/kamf.jpg" alt="img" class="card-img-top"> </a>

           <div class="card-body">
             <h3>Mein Kamf</h3>

           </div>
         </div>
      </div>

      <div class="item">
        <div class="card">
          <a href="bangla_book_page.php?b_id=5"> <img src="images/niaji.jpg" alt="img" class="card-img-top"> </a>

          <div class="card-body">
            <h3 style="font-size: 130.5% ">Niaji'r Attosomorponer Dolil</h3>

          </div>
        </div>
     </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="menu2">
      <div class="list1">
       <b>Thriller</b>
      </div>
    </div>
  </div>

  <div class="container mt-3">
    <div class="row">
      <div class="owl-carousel owl-theme">
        <div class="item">
          <div class="card">
            <a href="bangla_book_page.php?b_id=6"> <img src="images/psycho.jpg" alt="img" class="card-img-top"> </a>

            <div class="card-body">
              <h3>Psycho</h3>

            </div>
          </div>
        </div>

        <div class="item">
          <div class="card">
            <a href="bangla_book_page.php?b_id=7"><img src="images/vertical.jpg" alt="img" class="card-img-top"></a>

            <div class="card-body">
              <h3>Vertical Run</h3>

            </div>
          </div>
       </div>

       <div class="item">
         <div class="card">
           <a href="bangla_book_page.php?b_id=16"><img src="images/dolan.jpg" alt="img" class="card-img-top"></a>

           <div class="card-body">
             <h3 style="font-size: 130.5% ">Dolan's Cadillac</h3>

           </div>
         </div>
      </div>

      <div class="item">
        <div class="card">
          <a href="bangla_book_page.php?b_id=9"><img src="images/tell.jpg" alt="img" class="card-img-top"></a>

          <div class="card-body">
            <h3 style="font-size: 130.5% ">Tell Me Your Dreams</h3>

          </div>
        </div>
     </div>

     <div class="item">
       <div class="card">
         <a href="bangla_book_page.php?b_id=10"><img src="images/ath.jpg" alt="img" class="card-img-top"></a>

         <div class="card-body">
          <h3 style="font-size: 130.5% ">Ath Kuthuri Noy Dorja</h3>

         </div>
       </div>
    </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="menu1">
      <div class="list1">
       <b>Bangla Classic</b>
      </div>
    </div>
  </div>

  <div class="container mt-3">
    <div class="row">
      <div class="owl-carousel owl-theme">
        <div class="item">
          <div class="card">
            <a href="bangla_book_page.php?b_id=11"><img src="images/purbo.jpg" alt="img" class="card-img-top"></a>

            <div class="card-body">
              <h3 style="font-size: 130.5% ">Purbo Pashchim</h3>

            </div>
          </div>
        </div>

        <div class="item">
          <div class="card">
            <a href="bangla_book_page.php?b_id=12"><img src="images/uttor.jpg" alt="img" class="card-img-top"></a>

            <div class="card-body">
              <h3>Uttoradhikar</h3>

            </div>
          </div>
       </div>

       <div class="item">
         <div class="card">
           <a href="bangla_book_page.php?b_id=13"><img src="images/deyal.jpg" alt="img" class="card-img-top"></a>

           <div class="card-body">
             <h3>Deyal</h3>

           </div>
         </div>
      </div>

      <div class="item">
        <div class="card">
          <a href="bangla_book_page.php?b_id=14"><img src="images/paromita.jpg" alt="img" class="card-img-top"></a>

          <div class="card-body">
            <h3>Paromita</h3>

          </div>
        </div>
     </div>

     <div class="item">
       <div class="card">
         <a href="bangla_book_page.php?b_id=15"><img src="images/day.jpg" alt="img" class="card-img-top"></a>

         <div class="card-body">
           <h3>DayBandhan</h3>

         </div>
       </div>
    </div>

      </div>
    </div>
  </div>

<?php } else { ?>
  <div class="container c1">
          <p>Bangla Books <br>
             You need to login to get access to this page. </p>
  </div>

<?php } ?>




<?php include('footer.php') ?>
    <script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/owl.carousel.js" charset="utf-8"></script>
<script>
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
</script>

  </body>
</html>
