<?php
require_once __DIR__ . "/../inc/header.php";
include_once "../inc/database.php";

require_once __DIR__ . "/../helpers/functions.php";


if (isset($_POST['login'])) {

  $email = $_POST['username'];

  $password = $_POST['password'];

  $_SESSION['userid'] = $_POST['password'];
  $_SESSION['useremail'] = $_POST['username'];
  $_SESSION['login'] = $_POST['login'];

  $_SESSION['login'] = $_POST['login'];
  if (!login_student($email, $password)) {
    login_teacher($email, $password);
  }
  $usql = "SELECT * FROM Users WHERE Email='$email' && Password='$password' ";
  $uresult = mysqli_query(database(), $usql) or die("database error:" . mysqli_error(database()));
  $urow = mysqli_fetch_assoc($uresult);

  if ($urow['Password'] == $password) {

    setcookie("userid", $password, time() + (60 * 60 * 24 * 7));
    setcookie("useremail", $email, time() + (60 * 60 * 24 * 7));

    $firstname = $found['Firstname'];
    $sirname = $found['Sirname'];
    $id = $found['id'];

    $time = time();
    $queryz = "UPDATE Users Set Online='Online',Time='$time' WHERE Password='$password' ";
    database()->query($queryz) or die('Errorr, query failed to upload');

    echo "ok";
  } else {
    echo "email or password does not exist."; // wrong details 
  }
}
