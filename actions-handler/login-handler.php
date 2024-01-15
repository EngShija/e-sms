<?php 
session_start();
include_once "../inc/database.php";

require_once __DIR__."/../helpers/functions.php";


if (isset($_POST['login'])) {

    
    $email = $_POST['username'];
    
    $password = $_POST['password'];

    $_SESSION['login'] = $_POST['login'];

  if(login_student($email, $password)) {
    redirect_to("../prog.php");
  }


}
