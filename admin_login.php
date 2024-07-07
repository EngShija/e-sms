<?php
include_once "./inc/header.php"; 
require_once __DIR__."/helpers/functions.php";
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
        <?php genereate_messsage("Username or password is invalid", "wrong-cred", "faliureBox") ?>

        <?php genereate_messsage("Sorry! User not found!", "noexist", "faliureBox") ?>

        <?php genereate_messsage("Your password was changed successfully! Login now with your new password!", "changed", "successBox") ?>
        </div><br>


        <fieldset>
            <legend><img src="images/avatar.jpeg"></legend>

            <form action="actions-handler/admin-login-handler.php" name="myForm"
                method="POST">
                <input type="text" name="username" placeholder="Admin's username" autofocus><br><br>
                <input type="password" name="password" placeholder="Password"><br><br>
                <span class="submit">
                        <button type="submit" value="login"name="login">Login</button>
                    </span>
                <a href="forgot_password.php" style="text-decoration: none;">
                    <h3>Forgot Password!</h3>
                </a>
            </form>
        </fieldset>
    </div>
</div>
</div>
<?php require_once __DIR__. "/inc/footer.php" ?>