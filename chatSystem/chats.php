<?php
session_start();
require_once "includes/header.php";
require_once "Database/connection.php";
require_once "helpers/functions.php";
$_SESSION['receiver'] = $_GET['user_id'];
$current_id = $_SESSION['current_user'];
$receiver_id = $_SESSION['receiver'];
$message = getSentMessage($receiver_id, $current_id);
$received = getreceivedMessage($current_id, $receiver_id);
$mysql = "SELECT * FROM users WHERE id = $receiver_id";
$myresult = connection()->query($mysql);
$myrow = $myresult->fetch_assoc();
$user1 = getUserById($current_id);
?>
        <div class="nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="actions/logout.php">Logout</a></li>
            <li class="myProfile"><a href="#"><img src="uploads/<?= $user1['profile_image'] ?>" ><?= " ". $user1['full_name'] ?></a></li>
        </div>
    </div>

    <div class="body">
        <div class="items">
       <div class="sidebar">
        <li><a href="#">MY PROFILE</a></li>
            <li><a href="#">CREATE GROUP</a></li>
            <li><a href="#">FRIENDS</a></li>
            <li><a href="#">PRIVACY & SECURITY</a></li>
            <li><a href="#">NOTIFICATIONS</a></li>
       </div>

    <div class="categories">
        <div class="convs">
        <small><?= $myrow['full_name'] ?></small>
        <?php foreach($message as $sms) :?>
        <div class="send"><?= $sms['content']. "<br><p>". $sms['time_sent']. "</p>" ?></div><br>
        <?php endforeach;?>

        <?php foreach($received as $sms) :?>
        <div class="receive"><?= $sms['content']. "<br><p>". $sms['time_sent']. "</p>" ?></div><br>
        <?php endforeach;?>
       
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <form action="actions/chatsHandler.php" method="post">
            <textarea name="message" id="message" autofocus placeholder="Text Message..."></textarea>
            <button type="submit" name="send"><img src="images/send.svg"></button>
        </form>
        </div>
     </div>
     </div>
    </div>
    <?php
require_once "includes/footer.php";
?>
