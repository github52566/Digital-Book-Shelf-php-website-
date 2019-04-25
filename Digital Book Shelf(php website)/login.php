<?php include('server.php');
$pass_cahnge = 0;
$register = 0;
if( isset($_GET['pass_change']) && $_GET['pass_change']){
  $pass_cahnge = $_GET['pass_change'];
}
if( isset($_GET['registration_success']) && $_GET['registration_success']){
  $register = $_GET['registration_success'];
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/logo2.png" />

    <title>Book Shelf Log In</title>
    <style>

    body{
      background-color: gray;
    }

    .container {
      box-sizing: border-box;
      margin-top: 4%;
        padding: 16px;
        background-color: #c1d7d7;
    }

    input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    hr {
        border: 1px solid black;
        margin-bottom: 25px;
    }

    button {
        background-color: #16484cd1;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        opacity: 0.8;
    }

  }


    </style>

  </head>
  <body>
      <?php include('navbar.php') ?>

      <?php if ($pass_cahnge==1) { ?>
        <div class="container">
          <p>Password changed Successfully. Log In with new Password.</p>
        </div>
        <?php } ?>

        <?php if ($register==1) { ?>
          <div class="container">
            <p>Registration Successful. Log In with your username and pasasword. </p>
          </div>
                   <?php }  ?>



      <form action="login.php"  method="post">

        <div class="container">
           <h1>User Login</h1>
          <?php include('errors.php'); ?>
          <hr>
          <label for="username"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="username" >

          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" >

          <button type="submit" name="login">Login</button>
           <p>
              Not yet a member? <a href="register.php">Sign up</a>
           </p>
        </div>

      </form>

      <?php include('footer.php') ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
