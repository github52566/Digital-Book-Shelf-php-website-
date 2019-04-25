<?php
$status =0;
//$successful=0;
if( isset($_GET['status']) && $_GET['status']){
  $status = $_GET['status'];
}
//if( isset($_GET['success']) && $_GET['success']){
  //$successful = $_GET['success'];
//}

session_start();
$name = '';
$message = '';
$error = '';
$success = '';
date_default_timezone_set('Asia/Dhaka');
$currentTime = date('Y-m-d H:i:s');
$db = mysqli_connect('localhost', 'root', '', 'bookproject');

if (isset($_POST['send_msg'])) {
  $name = $_SESSION['username'];
      $message = mysqli_real_escape_string($db, $_POST['message']);
      if (empty($message)) {
        $error  .= '<lebel class="text-danger">Enter your message</lebel>';
      } else {
        $success .= '<lebel class="text-success">Thanks for contracting us</lebel>';
        $sql = "INSERT INTO contact (username, message, message_date)
                 VALUES('$name' , '$message' , '$currentTime')";

                 mysqli_query($db, $sql);

                // header('location: contact.php?status=1&success=1');
      }
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

    <title>Book Shelf Contact</title>
    <style media="screen">
    hr{
        background: white;
      }

      .start{
      background-image: url(images/contact.jpeg);
      box-shadow: 5px 10px 18px #131212f2;
      background-size:cover;
      padding-top: 4%;
      padding-bottom: 20%;
      border-radius: 0;
      }


      .contact-form {
      background: rgba(0,0,0, .6);
      color: white;
      margin-top: 10px;
      padding: 10px;
      box-shadow: 0px 0px 10px 3px grey;
      border-radius: none;
      }

      .contact-icons {
      margin-top: 60px;
      margin-left: 90px;
      margin-bottom: 80px;
  }
      .btn {
      background-color: #0d7282cc;
      color: white;
      margin-top: 10px;
      }


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
    <?php if ($status == 1) { ?>
      <div class="start">
          <div class="container contact-form">
          	<h1>Contact form</h1>
          	<hr>

          	<div class="row">

                 <div class="col-md-6">
                 	<ul class="contact-icons">
                                  <li><i class="fa fa-map-marker fa-2x"></i>
                                      <p>Santi Niketon,Tejgaon,Dhaka</p>
                                  </li>

                                  <li><i class="fa fa-phone fa-2x"></i>
                                      <p>+880 1681347430</p>
                                      <p>+880 1623247656</p>
                                  </li>

                                  <li><i class="fa fa-envelope fa-2x"></i>
                                      <p>afrinkakon31@gmail.com</p>
                                      <p>ashekseum86@gmail.com</p>
                                  </li>
                              </ul>
                 </div>

                 <div class="col-md-6">
                      <form class="" action="contact.php?status=1" method="post">
                          <?php echo $error; ?> <br>
                          <?php //if ($status==1 && $successful==1) {
                              echo $success;
                          //}
                         ?> <br>



                       <label> <b>Message</b> </label>
                       <textarea name="message" rows="4" cols="57" style="border-radius:0;" placeholder="Enter Message" value="<?php echo $message; ?>"></textarea>

                    <button type="submit" class="btn btn-block" name="send_msg">Send</button>
                      </form>


                 </div>

              </div>

          </div>
          </div>

    <?php } else { ?>
      <div class="container c1">
              <p>Contact Us <br>
                 You need to login to get access to this page. </p>
      </div>
<?php } ?>

<?php include('footer.php') ?>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>
</html>
