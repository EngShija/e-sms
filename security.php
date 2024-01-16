<?php
session_start();
include_once "inc/header.php";
include_once __DIR__ . "/inc/database.php";
include_once __DIR__ . "/helpers/functions.php";
kick_user_to("access.php");
if (is_logged()) {
    $data = get_user_info_by_id(id());
}
?>
</div>
<div class="header">
    <h><span>e-</span>SMS</h>
    <p><a href="home.php">Home</a></p>
    <p><a href="actions-handler/logout-handlerr.php">Logout</a></p>
    <p><a href="prog.php">Dashboard</a></p>
    <div class="time">
        <?php include_once "./inc/greetings.php" ?>
    </div>
    <h6></h6>
</div>
</div>
<div class="container">
    <div class="MyLoginForm">

        <?php genereate_messsage("Your passwords didn't match!", "nomatch", "faliureBox") ?>
        <?php genereate_messsage("Incorrect current password!", "wrongCurr", "faliureBox") ?>


        <fieldset>
            <form action="actions-handler/security-handler.php" method="POST">
                <br>
                <input type="password" name="current_password" placeholder="Enter your old password"><br><br>
                <input type="password" name="new_password" placeholder="Enter new password"><br><br>
                <input type="password" name="confirm_password" placeholder="Confirm new password"><br><br>
                <input type="submit" name="change" value="Change Password"
                    style=" width: fit-content; height: auto; font-size: 20px; color: white; border: 2px solid blue; border-radius: 30px; background: blue;">
            </form>
        </fieldset>
    </div>
</div>

<div class="footer">
    <div class="head">
        <h2>You logged in as
            <?= $data['fname'] ?>
            <?= $data['mname'] ?>
            <?= $data['lname'] ?>
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
</div>

<?php include_once "./inc/footer.php"; ?>