<?php 
session_start();
require_once __DIR__. "/../inc/header.php";
include_once "../inc/database.php";

require_once __DIR__."/../helpers/functions.php";


if (isset($_POST['login'])) {

    $email = $_POST['username'];
    
    $password = $_POST['password'];

    $_SESSION['login'] = $_POST['login'];
   if(! login_student($email, $password)){
    login_teacher($email, $password);
   }

 }