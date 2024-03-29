<?php
require_once "inc/header.php";
include_once "inc/database.php";
require_once __DIR__ . "/helpers/functions.php";
kick_user_to("access.php");
?>

<div class="header">
    <h><span>e-</span>SMS</h>
    <p><a href="home.php">Home</a></p>
    <p><a href="login.php">Login</a></p>
    <div class="time">
        <?php include_once "./inc/greetings.php" ?>
    </div>
    <h6></h6>
</div>

</div>
<div class="container">
    <div class="MyLoginForm">
    <?php genereate_messsage("*A user is already exists, Go to login!", "userPresent", "errorMsg") ?>

        <div class="inlineForm">
            <fieldset>
                <legend>
                    <h3>Admin Registration</h3>
                </legend>        
                <form name="myForm" method="POST" action="actions-handler/admin-register-handler.php"
                    enctype="multipart/form-data">
                        <input name="username" type="text" placeholder="Admin's username"  required><br><br>
                   
                    <input type="password" placeholder="Password" name="password1"  required><br><br>
                    <input type="password" placeholder="Confirm password" name="password2"  required><br><br>
                    <span class="submit">
                        <button type="submit" value="Submit"name="submit">Upload</button>
                    </span>
            </div>
            </form>
            </fieldset>

        </div>
    </div>
    </div>
    </div>
    </div>
    <?php require_once __DIR__. "/inc/footer.php" ?>