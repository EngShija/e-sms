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
    <section class="footer">
        <div class="head">
            <h2>You logged as<a href="actions-handler/logout-handlerr.php">(Logout)</a></h2>
            <h3>Developed and published by Eng. Shija</h3>
            <h3>Vist us and follow us</h3>
            <div class="row">
                <li>
                    <a href="https://www.facebook.com/maigeshija.sitta.1/"><img src="images/facebook.png"></a>
                </li>
                <li>
                    <a href="https://instagram.com/igboe0105?igshid=ZGUzMzM3NWJiOQ=="><img src="images/instagram.jpeg"></a>
                </li>
                <li>
                    <a href="http://www.Twitter.com"><img src="images/twitter.jpeg"></a>
                </li>
                <li>
                    <a href="http://www.YouTube.com"><img src="images/youtube.png"></a>
                </li>
                <li>
                    <a href="https://wa.me/255692538955"><img src="images/whatsApp.jpg"></a>
                </li>
                <li>@eng_shija</li>
            </div>
            <p>&#169All Rights Reserved</p>
        </div>
    </section>
    </body>

</html>