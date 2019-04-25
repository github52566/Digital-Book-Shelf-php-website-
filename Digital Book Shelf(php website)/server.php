<?php
session_start();

$username = "";
$email = "";
$gender = "";
$address = "";
$errors =  array();
date_default_timezone_set('Asia/Dhaka');
$currentTime = date('Y-m-d H:i:s');
$db = mysqli_connect('localhost', 'root', '', 'bookproject');

//user Registration
if(isset($_POST['reg_user']) && isset($_FILES["image"]["tmp_name"]) ) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);


  if (empty($username)) { array_push($errors,"Username is required"); }
  if (empty($email)) { array_push($errors,"Email is required"); }
  if (empty($gender)) { array_push($errors,"Gender is required"); }
  if (empty($address)) { array_push($errors,"Address is required"); }
  if (empty($password_1)) { array_push($errors,"Password is required"); }
  if (empty($_FILES["image"]["tmp_name"])) {array_push($errors,"Picture is required");}

  if($password_1 != $password_2){
    array_push($errors, "Two passwords do not match");
  }

  $user_check_query = "SELECT *FROM users WHERE username = '$username' OR email = '$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if($user){
    if($user['username'] === $username){
      array_push($errors, "Username already exists");
    }
    if($user['email'] === $email){
      array_push($errors, "Email already exists");
    }
  }



  if(count($errors) == 0){
    $password = md5($password_1);
    $image = $_FILES['image']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));

    $query = "INSERT INTO users (username, email, gender, address, password,image,created_date)
             VALUES('$username' , '$email' , '$gender' , '$address' , '$password','$imgContent', '$currentTime')";

   mysqli_query($db, $query);
   $_SESSION['username'] = $username;
   header('location: login.php?registration_success=1');
  }
}

//User Login
if(isset($_POST['login'])){

  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

$member_query= "SELECT *FROM users WHERE username = '$username' LIMIT 1";
$result2 = mysqli_query($db, $member_query);
$user = mysqli_fetch_assoc($result2);
$email2 = $user['email'];
$currentTime2 = $user['created_date'];
$address2 = $user['address'];


  if(empty($username)){
    array_push($errors, "Username is required");
  }
  if(empty($password)){
    array_push($errors, "Password is required");
  }

  if(count($errors) == 0){
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $results = mysqli_query($db, $query);
    if(mysqli_num_rows($results) == 1){
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email2;
    $_SESSION['created_date'] = $currentTime2;
    $_SESSION['address'] = $address2;
    header('location: index.php?status=1');
    } else{
      array_push($errors, "Wrong username/password combination");
    }
  }

}

 ?>
