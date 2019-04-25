<?php
session_start();
$username = $_SESSION['username'];
$currentpass = '';
$changepass = '';
$dbpass = '';
$error = '';

$error_add ='';
$new_add='';
$add='';

$error_pic = '';

$db = mysqli_connect('localhost', 'root', '', 'bookproject');

if (isset($_POST['change_pass'])) {
  $currentpass = mysqli_real_escape_string($db,$_POST['current_password']);

  $changepass = mysqli_real_escape_string($db,$_POST['new_password']);


  if (empty($currentpass)) {
    $error  .= '<lebel class="text-danger">Enter Current Password</lebel> <br>';
  } if(empty($changepass)){
      $error  .= '<lebel class="text-danger">Enter new password</lebel>';
  }

  $sql1 = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
  $result = mysqli_query($db,$sql1);
  $user = mysqli_fetch_assoc($result);

if(!empty($currentpass) && !empty($changepass)) {
  $currentpass = md5($currentpass);
  $changepass = md5($changepass);
    $dbpass = $user['password'];
    if ($currentpass != $dbpass) {
      $error  .= '<lebel class="text-danger">Enter correct Password</lebel>';
    }else {
      $sql2 = "UPDATE users SET password = '$changepass' WHERE username = '$username'";
      mysqli_query($db,$sql2);
      header('location: login.php?pass_change=1');
    }
  }

}

if (isset($_POST['change_add'])) {
  $new_add = mysqli_real_escape_string($db,$_POST['address']);
  if (empty($new_add)) {
    $error_add .= '<lebel class="text-danger">Enter New Address</lebel> <br>';
  }else {
    $update = "UPDATE users SET address = '$new_add' WHERE username = '$username'";
    mysqli_query($db,$update);
    header('location: member.php');
  }
}

if (isset($_POST['change_pic']) && isset($_FILES["image"]["tmp_name"])) {
  if (empty($_FILES["image"]["tmp_name"])) {
    $error_pic .= '<lebel class="text-danger">Please Choose Picture. </lebel> <br>';
  }else {
    $image = $_FILES['image']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
    $update_img = "UPDATE users SET image = '$imgContent' WHERE username = '$username'";
    mysqli_query($db,$update_img);
    header('location: member.php');
  }

}

$query= "SELECT *FROM users WHERE username = '$username' LIMIT 1";
$res = mysqli_query($db, $query);
$user = mysqli_fetch_assoc($res);
$add=$user['address'];
$propic = $user['image'];

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


    <title>Book Shelf My Account</title>
    <style media="screen">
    
    .container {
      font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
      font-size: 150%;
      padding: 4%;
      margin-top: 5%;
      background-color: #0f6369c2;
      border-radius: 10px;
      box-shadow: 5px 10px 18px #131212f2;
  }
    .card1{
      border-radius: 0;
      border-style:  inset;
      margin-top: 1%;
      font-size: 80%;

    }
    input[type=text],input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    .b1 {
        background-color: #13464a;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

  .b1:hover {
        opacity: 0.8;
    }
    img{
      border-radius: 0;
    }
    </style>
  </head>
  <body>
    <?php include('login_navbar.php'); ?>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p>User Name: <strong><?php echo $_SESSION['username']; ?></strong> <br>
            Email : <strong><?php echo $_SESSION['email']; ?></strong> <br>
            Address : <strong><?php echo $add;?></strong> <br> <br>
           You have joined us on: <strong> <?php echo $_SESSION['created_date']; ?></strong> </p>
        </div>

        <div class="col-md-6">
             <img src="data:image/jpeg;base64,<?php echo base64_encode( $propic ); ?>" alt="image" width="400" height="400">
        </div>

      </div>
    </div>

    <div class=container>
    <div class="card1 card-body">
     <p style="text-align: center; font-size: 130%;"><strong>Change Password</strong></p>
        <form class="" action="member.php" method="post">
          <?php echo $error; ?><br>
          <label for="password"><b>Current Password</b></label>
          <input type="password" placeholder="Enter Current Password" name="current_password">

          <label for="password"><b>New Password</b></label>
          <input type="password" placeholder="Enter New Password" name="new_password" >

          <button class="b1" type="submit" name="change_pass">Change</button>
        </form>
    </div>

    <div class="card1 card-body">
     <p style="text-align: center; font-size: 130%;"><strong>Change Address</strong></p>
        <form class="" action="member.php" method="post">
          <?php echo $error_add; ?><br>

          <label for="address"><b>New Address</b></label>
          <input type="text" placeholder="Enter New address" name="address" value="<?php echo $new_add; ?>">

          <button class="b1" type="submit" name="change_add">Change</button>
        </form>
    </div>

    <div class="card1 card-body">
     <p style="text-align: center; font-size: 130%;"><strong>Change Profile Picture</strong></p>
        <form class="" action="member.php" method="post" enctype="multipart/form-data">
          <?php echo $error_pic; ?><br>

          <label for="image"> <b>Choose Image</b> </label>
           <input type="file" name="image"/><br> <br>
           <button class="b1" type="submit" name="change_pic">Change</button>


        </form>
    </div>

    </div>



<?php include('footer.php') ?>
    <script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>


  </body>
</html>
