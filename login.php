<?php
require_once __DIR__ . "/inc/header.php";
require_once __DIR__ . "/helpers/functions.php";
?>
<div class="header">
    <h><span>e-</span>SMS</h>
    <p><a href="home.php">Home</a></p>
    <p><a href="register.php">Register</a></p>
    <div class="time">
        <?php include_once "./inc/greetings.php" ?>
    </div>
    <h6></h6>
</div>
<div class="container">
    <div class="MyLoginForm">
        <div>
<?php sweetAlert('wrong-cred', 'Ooops!', 'Wrong email or password!', 'error') ?>
<?php sweetAlert('noexist', 'Ooops!', 'A user may not found!', 'error') ?>
<?php sweetAlertSession('logout', 'Successfully!','You logged out!', 'warning' ) ?>
<?php sweetAlertSession('change', 'Successfully!',  'Your password was changed! Login now with your new password!', 'success' ) ?>
<?php sweetAlertSession('status', 'Success!',  'You logged in successfully!', 'success' ) ?>

        </div><br>


        <fieldset>
            <legend><img src="images/avatar.jpeg"></legend>

            <small><a href="admin_login.php">Admin</a></small><br><br>

            <form action="./actions-handler/login-handler.php" name="myForm" onsubmit="return FormValidation()" method="POST">
                <input type="email" name="username" placeholder="Email" autofocus required><br><br>
                <input type="password" name="password" placeholder="Password" required><br><br>
                <span class="submit">
                    <button type="submit" value="login" name="login">Login</button>
                </span>


                <br>
                <a href="forgot_password.php" style="text-decoration: none;">
                    <h3>Forgot Password!</h3>
                </a>
                <div class="row"></div>
                <input type="checkbox" name="cookie" style="height: 17px;width: 17px;" id="cookie"><label for="cookie"> Remember me</label><br>
                <div class="submit">
            </form>
        </fieldset>
    </div>
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

<?php include_once "./inc/footer.php"; ?>