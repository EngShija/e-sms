<?php
session_start();
include_once "inc/header.php";
include_once "inc/database.php";
require_once __DIR__ . "/helpers/functions.php";
kick_user_to("access.php");
sweetAlertSession('login', "Success!","You logged in successfully!", "success" );
$data = get_user_info_by_id(id());

?>
<div class="header">
    <h><span>e-</span>SMS</h>
    <p><a href="home.php">Home</a></p>
    <p onclick="smartAlerts()"><a href="actions-handler/logout-handlerr.php">Logout</a></p>
    <p><a href="profile.php">
            <?= $data['first_name']; ?>
        </a></p>
    <div class="time">
        <?php include_once "./inc/greetings.php" ?>
    </div>
    <h6></h6>
</div>
</div>

<div class="container">
    <div class="MyLoginForm">
        <div class="successBox">
            <?php if (isset($_GET['updated']))
                echo "Your details has been updated successfully!" ?>
            </div>
            <div class="all">
                <div class="LinkBar">
                    <li>
                        <a href="prog.php"><img src="images/Dashboard.png"></a>
                    </li>
                    <li>
                        <a href="profile.php"><img src="images/profile.png"></a>
                    </li>
                    <li>
                        <a href="results.php"><img src="images/results.png"></a>
                    </li>
                    <li>
                        <a href="payment.php"><img src="images/pay.png"></a>
                    </li>
                    <li>
                        <a href="chat.php"><img src="images/chat.png"></a>
                    </li>
                    <li>
                        <a href="security.php"><img src="images/security.png"></a>
                    </li>
                </div>


                <div class="messages">
                    <marquee behavior="alternate" direction="up" height="120%" scrollamount="3" loop="3">
                        <p>*Results are out! </p>
                        <p>*New announcements are available! </p>
                        <p>*Your status is poor pool up! </p>
                        <p>*Yor results are incomplete, visit staff!</p>
                        <p>*Your attendance is very poor!</p>
                        <p>*Your balance is outstanding, pay on time!</p>
                        </br>
                        </br>
                        </br>
                        <br>
                    </marquee>
                </div>
            </div>

        </div>

    </div>

    </div>

<footer>
    <section class="footer">
        <div class="head">
            <h2>You logged in as
            <?= $data['first_name'] ?>
            <?= $data['middle_name'] ?>
            <?= $data['last_name'] ?>
        </h2>
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
</footer>
</body>

</html>