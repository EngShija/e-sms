<?php
include_once "inc/header.php";
include_once "inc/database.php";
require_once __DIR__ . "/helpers/functions.php";
kick_user_to("access.php");
?>


    <div class="header">
    <h><span>e-</span>SMS</h>
    <p><a href="home.php">Home</a></p>
        <p><a href="actions-handler/logout-handlerr.php">Logout</a></p>
       
        <div class="time">
                <?php include_once "./inc/greetings.php"?>
            </div>
            <h6>Welcome Teacher</h6>
</div>
      
    <div class="container">
        <div class="MyLoginForm">
        <div class="admintools">
           <li>  <a href="results.php">Results</a></li>
           <li>  <a href="announce.php">Announcements</a></li>
           <li>  <a href="studentsList.php">Students</a></li>
           <li>  <a href="studentsList.php">Parents</a></li>
        </div>
          
        </div>
    </div>
    <?php require_once __DIR__. "/inc/footer.php" ?>