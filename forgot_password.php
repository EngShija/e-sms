<?php include_once "inc/header.php";
require_once __DIR__. "/helpers/functions.php";
?>
<div class="time">
    </div>
        <div class="header">
        <h><span>e-</span>SMS</h>
        <p><a href="home.php">Home</a></p>
        <p><a href="register.php">Register</a></p>
        <p><a href="login.php">Login</a></p>
       
        <div class="time">
                <?php include_once "./inc/greetings.php"?>
            </div>
            <h6></h6>
</div>
        </div>
    <div class="container">
<div class="MyLoginForm">


<?php genereate_messsage("Your Passwords didn't match! Try again!", "notchanged", "faliureBox") ?>

<?php genereate_messsage("A user may not found or wrong credentials entered! Try again!", "notexist", "faliureBox") ?>


    <fieldset>
        <form action="./actions-handler/forgot_password_handler.php" method="POST">
            <br>
<input type = "email" name = "email" placeholder = "Enter Email address"><br><br>
<input type="text" name="RegNo" placeholder="Enter registration number"><br><br>
<input type="password" name="new_password" placeholder="Enter new Password"><br><br>
<input type="password" name="confirm_password" placeholder="Confirm new password"><br><br>
<input type="submit" name="change" value="Change Password" style=" height: 50px; font-size: 20px; color: white; border: 2px solid blue; border-radius: 30px; background: blue;">
</form>
</fieldset>
</div>
</div>

<div class="footer">
    <div class="head">
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
<?php include_once "inc/footer.php"; ?>