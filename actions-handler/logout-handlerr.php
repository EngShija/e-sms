<?php
require_once __DIR__."/../helpers/functions.php";
log_out("../login.php?logout");
if(isset($_GET['logout'])){
    $_SESSION['logout'] = $_GET['logout'];
    }