
<style media="screen">
    .dropdown:hover>.dropdown-menu{
      display: block;
    }
  </style>

   <nav class="navbar navbar-expand-lg sticky-top navbar-dark py-4">
     <a class="navbar-brand ml-0" href="index.php?status=0"><img src="images/logoo2.png" width="50" height="35" class="d-inline-block align-top" alt="">
        <img src="images/banner.png" alt="book shelf"> </a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav ml-auto pr-5">
         <li class="nav-item nav-tabs">
           <a class="nav-link" href="index.php?status=0">Home <span class="sr-only">(current)</span></a>
         </li>

       <li class="nav-item dropdown nav-tabs">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Books
           </a>
           <div class="dropdown-menu drp" aria-labelledby="navbarDropdown">
             <a class="dropdown-item " href="bnbooks.php?status=0"><div class="drop"> Bangla</div></a>
             <a class="dropdown-item " href="enbooks.php?status=0"><div class="drop">English</div></a>
           </div>
         </li>

         <li class="nav-item nav-tabs">
           <a class="nav-link" href="about.php?status=0">About Us</a>
         </li>
         <li class="nav-item nav-tabs">
           <a class="nav-link" href="contact.php?status=0">Contact us</a>
         </li>
         <li class="nav-item nav-tabs">
           <a class="nav-link" href="register.php">Register</a>
         </li>
         <li class="nav-item nav-tabs">
           <a class="nav-link" href="login.php">Log In</a>
         </li>
       </ul>
     </div>
   </nav>
