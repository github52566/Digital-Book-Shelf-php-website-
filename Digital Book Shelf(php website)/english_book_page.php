<?php
if($_GET['e_id']){
  $e_id = $_GET['e_id'];
}
session_start();

$error = '';
$comment = '';
$username = '';
date_default_timezone_set('Asia/Dhaka');
$currentTime = date('Y-m-d H:i:s');


$db = mysqli_connect('localhost', 'root', '', 'bookproject');
$book_query = "SELECT * FROM englishbooks WHERE e_id = '$e_id' LIMIT 1";
$result = mysqli_query($db,$book_query);
$book = mysqli_fetch_assoc($result);
$title = $book['bookname'];
$author = $book['writername'];
$descrip = $book['description'];
$image = $book['english_image'];
$dl_link = $book['en_download'];

$_SESSION['en_title'] = $title;
$_SESSION['en_author'] = $author;
$_SESSION['en_descrip'] = $descrip;
$_SESSION['english_image'] = $image;
$_SESSION['en_dl'] = $dl_link;

if (isset($_POST['comment_snd'])) {
  $username = $_SESSION['username'];
  $comment = mysqli_real_escape_string($db, $_POST['comment']);
  if (empty($comment)) {
      $error .='<lebel class="text-danger">Enter your comment</lebel>';
  } else{
    $insert_query = "INSERT INTO englishbook_comment (username ,bookname, comment, comment_time)
                    VALUES('$username', '$title', '$comment', '$currentTime')";

                    mysqli_query($db, $insert_query);
                    header('location: english_book_page.php?e_id='.$e_id);

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link rel="shortcut icon" href="images/logo2.png" />
    <title>Books</title>
    <style media="screen">
    .container{
        font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
        font-size: 150%;
        padding: 4%;
        margin-top: 5%;
        background-color: #0f6369c2;
        border-radius: 10px;
      }
    img{
      border-radius: 0;
    }
    .btn {
  background-color: #094044e6;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
}
.btn:hover {
  /*background-color: RoyalBlue; */
  opacity: .8;
}
hr {
    border:1px solid #00000045;

}
    </style>
  </head>
  <body>
     <?php include('login_navbar.php'); ?>
     <div class="container">

       <div class="row">

         <div class="col-md-6">
           <p style="text-align: center;"> <strong> <?php echo $_SESSION['en_title']; ?> </strong> <br>
                <strong> <?php echo $_SESSION['en_author']; ?> </strong> <br> <br>
                <?php echo $_SESSION['en_descrip']; ?> <br> <br> <br>
          <a href="<?php echo $_SESSION['en_dl'] ?>" download>  <button class="btn"><i class="fa fa-download"></i>  Download</button> </a> </p>
                </div>

         <div class="col-md-6">
               <img src="data:image/jpeg;base64,<?php echo base64_encode( $_SESSION['english_image'] ); ?>" alt="image" width="300" height="400">
         </div>

       </div>
     </div>

     <div class="container">
          <p> <strong>Comments</strong> <br> <hr> </p>
          <form class="" action="english_book_page.php?e_id=<?php echo $e_id; ?>" method="post">
            <?php echo $error; ?> <br>
            <textarea name="comment" rows="2" cols="30" style="border-radius: 0; font-size: 70%;" placeholder="Enter Your Comment" value="<?php echo $comment; ?>"></textarea>
            <button type="submit" class="btn-secondary" name="comment_snd">Comment</button>
          </form> <hr>
            <?php
                   $result = mysqli_query($db,"SELECT * FROM englishbook_comment WHERE bookname= '$title'");

                  while($row = mysqli_fetch_array($result)) {
                    $name2 = $row['username'];
                    $comment2 = $row['comment'];
                    $comment_time = $row['comment_time'];
                  //  echo $name2 .'<br>'. $comment2 .'<br>'. $comment_time .'<br>' . '<hr>';
                  echo strtoupper("<div style ='font-size: 100%'> <b>$name2</b> </div>");
                    echo "<div style ='font-size: 100%'> $comment2 </div>";
                      echo "<div style ='font-size: 50%'> $comment_time </div>";
                      echo "<hr>";
                  }


               ?>
        </div>



     <?php include('footer.php'); ?>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
  </body>
</html>
