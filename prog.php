<?php
include_once "inc/header.php";
include_once "inc/database.php";
require_once __DIR__ . "/helpers/functions.php";
kick_user_to("access.php");
sweetAlertSession('login', "Success!","You logged in successfully!", "success" );
$data = get_user_info_by_id(id());
$profile_pic = display_student_profile_picture(id());

?>
<div class="header">
    <h><span>e-</span>SMS</h>
    <p><a href="home.php">Home</a></p>
    <p onclick="smartAlerts()"><a href="actions-handler/logout-handlerr.php">Logout</a></p>
    <p><a href="profile.php">
    <img src="uploads/<?= $profile_pic['profile_image'] ?>"><?= $data['first_name']; ?>
        </a></p>
    <div class="time">
        <?php include_once "./inc/greetings.php" ?>
    </div>
    <h6></h6>
</div>
</div>

<div class="container">
    <div class="MyLoginForm">
        <?php genereate_messsage("Your details has been updated successfully!", 'updated', "successBox") ?> 
            <div class="all">
                <div class="LinkBar">
                    <li   class="currrentLink">
                        <a href="prog.php"><img src="images/dashboard.png"></a>
                    </li>
                    <li>
                        <a href="profile.php"><img src="images/account.png"></a>
                    </li>
                    <li>
                        <a href="results.php"><img src="images/results.png"></a>
                    </li>
                    <li>
                        <a href="payment.php"><img src="images/pay.svg"></a>
                    </li>
                    <li>
                        <a href="chat.php"><img src="images/chat.svg"></a>
                    </li>
                    <li>
                        <a href="security.php"><img src="images/security.svg"></a>
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
    <?php  require_once __DIR__. "/inc/logged-in-user-footer.php" ?>
