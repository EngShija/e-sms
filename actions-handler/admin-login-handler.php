<?php 
session_start();
include_once "../inc/database.php";

require_once __DIR__."/../helpers/functions.php";


if (isset($_POST['login'])) {

    
    $username = $_POST['username'];
    
    $password = $_POST['password'];

    login_admin($username, $password);

}
