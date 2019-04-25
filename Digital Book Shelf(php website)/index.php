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


    <title>Book Shelf Home</title>
  </head>
  <body>
    <?php
if ($status == 1) {
  include('login_navbar.php');
}else{
    include('navbar.php');
}
   ?>

    <div class="starter">
         <div class="container write1">
           <div class="write11">
             <b >Welcome to the Realm of Knowledge</b><br>
             <p >Find your favourite books and magazines for free.</p>
           </div>
         </div>
       </div>

       <div class="container">
         <div class="menu1">
           <div class="list1">
            <b>New Arrivals</b>
           </div>
         </div>
       </div>

    <!-- New Arrival Books -->

     <div class="container mt-3">
       <div class="row">
         <div class="owl-carousel owl-theme">
           <div class="item">
             <div class="card">
                <?php if ($status==1) { ?>
                  <a href="bangla_book_page.php?b_id=1"><img src="images/agni.jpg" alt="img" class="card-img-top"></a>
                <?php } else { ?>
                  <a href="sorry.php"><img src="images/agni.jpg" alt="img" class="card-img-top"></a>
                <?php } ?>

               <div class="card-body">
                 <h3>AgniPakkha</h3>

               </div>
             </div>
           </div>


           <div class="item">
             <div class="card">
                 <?php if ($status==1) { ?>
                   <a href="bangla_book_page.php?b_id=13"><img src="images/deyal.jpg" alt="img" class="card-img-top"></a>
                   <?php } else { ?>
                     <a href="sorry.php"><img src="images/deyal.jpg" alt="img" class="card-img-top"></a>
                     <?php } ?>
               <div class="card-body">
                 <h3>Deyal</h3>

               </div>
             </div>
           </div>

           <div class="item">
             <div class="card">
               <?php if ($status==1) { ?>
                 <a href="bangla_book_page.php?b_id=2"><img src="images/pothe.jpg" alt="img" class="card-img-top"></a>
                   <?php } else { ?>
                     <a href="sorry.php"><img src="images/pothe.jpg" alt="img" class="card-img-top"></a>
                     <?php } ?>
               <div class="card-body">
                 <h3>Pothe Probase</h3>

               </div>
             </div>
          </div>


           <div class="item">
             <div class="card">
               <?php if ($status==1) { ?>
                 <a href="bangla_book_page.php?b_id=3"><img src="images/surrender.jpg" alt="img" class="card-img-top"></a>
                   <?php } else { ?>
                     <a href="sorry.php"><img src="images/surrender.jpg" alt="img" class="card-img-top"></a>
                     <?php } ?>
               <div class="card-body">
                 <h3 style="font-size: 130.5% ">Surrender at Dhaka</h3>

               </div>
             </div>
           </div>


           <div class="item">
             <div class="card">
               <?php if ($status==1) { ?>
                 <a href="bangla_book_page.php?b_id=6"><img src="images/psycho.jpg" alt="img" class="card-img-top"></a>
                   <?php } else { ?>
                     <a href="sorry.php"><img src="images/psycho.jpg" alt="img" class="card-img-top"></a>
                     <?php } ?>
               <div class="card-body">
                 <h3>Psycho</h3>

               </div>
             </div>
           </div>


           <div class="item">
             <div class="card">
               <?php if ($status==1) { ?>
                 <a href="english_book_page.php?e_id=10"><img src="images/return.jpg" alt="img" class="card-img-top"></a>
                   <?php } else { ?>
                     <a href="sorry.php"><img src="images/return.jpg" alt="img" class="card-img-top"></a>
                     <?php } ?>


               <div class="card-body">
                 <h3>Uttoradhikar</h3>

               </div>
             </div>
           </div>

         </div>
       </div>
     </div>

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
