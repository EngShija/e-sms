
<?php
session_start();
$user_id = $_SESSION['userId'];
include_once "inc/header.php";
include_once "inc/database.php"; 
require_once __DIR__ . "/helpers/functions.php";
kick_user_to("access.php");

$data = get_user_info_by_id($user_id);
?>
    <div class="header">
    <h><span>e-</span>SMS</h>
    <p><a href="home.php">Home</a></p>
        <p><a href="actions-handler/logout-handlerr.php">Logout</a></p>
        <p><a href="prog.php">Dashboard</a></p>
        <div class="time">
                <?php include_once "./inc/greetings.php"?>
            </div>
            <h6></h6>
</div>
      
    <div class="container">
        <div class="MyLoginForm">
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
        
                <div class="prof">
                   <img src="images/avatar.jpeg"><br>
                   <h3>Full Name: </h3> <p> <?php echo $data['fname'] ?> <?php echo $data['mname'] ?> <?php echo $data['lname'] ?> </p><br><hr>
                   <h3>Gender: </h3> <p><?php echo $data['gender'] ?> </p><br><hr>
                   <h3>Date of birth: </h3> <p><?php echo $data['birth_date'] ?> </p><br><hr>
                   <h3>Physical Address: </h3> <p><?php echo $data['physicalAddress'] ?> </p><br><hr>
                   <h3>Email: </h3> <p><?php echo $data['email'] ?> </p><br><hr>
                   <h3>Phone number: </h3> <p><?php echo $data['phone'] ?> </p><br><hr>
                   <h3>Registration number: </h3> <p><?php echo $data['RegNo'] ?> </p><hr>
                 <li><a href="update.php">Edit Your Details</a></li>
                
                </div>
            </div>
        </div>
    </div>
    <section class="footer">
        <div class="head">
            <h2>You logged in as <?php echo $data['fname'] ?> <?php echo $data['mname'] ?> <?php echo $data['lname'] ?></h2>
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