<?php include('server.php') ?>

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

    <title>User Registration</title>

    <style>
body{
  background-color: gray;
}


/* Add padding to containers */
.container {
  box-sizing: border-box;
  margin-top: 2%;
    padding: 16px;
    background-color: #c1d7d7;
}

/* Full-width input fields */
input[type=text], input[type=password] ,input[type=email]{
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus ,input[type=email]:focus{
    background-color: #ddd;
    outline: none;
}
input[type="radio"]{
  margin: 0 3px 0 20px;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid black;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: #16484cd1;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #c1d7d7;
    text-align: center;
}
</style>
  </head>
  <body>
     <?php include('navbar.php') ?>


  <form class="" action="register.php" method="post" enctype="multipart/form-data">
    <div class="container">
 <h1>User Registration</h1>
 <p>Please fill in this form to create an account.</p>
 <?php include('errors.php'); ?>
 <hr>

 <label for="usrename"> <b>User Name</b> </label>
 <input type="text" placeholder="Enter Username" name="username" value="<?php echo $username; ?>" >

 <label for="email"><b>Email</b></label>
 <input type="email" placeholder="Enter Email" name="email" value="<?php echo $email; ?>" > <br>

 <label for="gender"><b>Sex</b> </label> <br>
 <input type="radio" name="gender" value="Male" checked>Male
 <input type="radio" name="gender" value="Female">Female <br> <br>

 <label for="address"><b>Address</b> </label>
 <input type="text" placeholder="Enter Your Address" name="address" value="<?php echo $address; ?>" >

<label for="image"> <b>Choose Image</b> </label>
 <input type="file" name="image"/><br> <br>

 <label for="password_1"><b>Password</b></label>
 <input type="password" placeholder="Enter Password" name="password_1" > <br>

 <label for="password_2"><b>Repeat Password</b></label>
 <input type="password" placeholder="Repeat Password" name="password_2" > <br>
 <hr>


 <button type="submit" class="registerbtn" name="reg_user">Register</button>
</div>

<div class="container signin">
 <p>Already have an account? <a href="login.php">Log in</a>.</p>
</div>

  </form>




    <?php include('footer.php') ?>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
