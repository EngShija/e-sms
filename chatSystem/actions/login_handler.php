<?php
session_start();
require_once "../Database/connection.php";
require_once  "../helpers/functions.php";

if(connection()){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phone = $_POST['username'];
    if(loginWithEmail($username, $password)){
    $get_info = loginWithEmail($username, $password);
    $_SESSION['current_user'] = $get_info['id'];
    redirectTo("../dashboard.php?success");
    }
    else{
        redirectTo("../login.php?incorrectLogin");
    }
}
