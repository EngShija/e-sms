<?php
require_once "inc/header.php";

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
        <div class="inlineForm">
            <fieldset>
                <legend>
                    <h3>Fill parent's info</h3>
                </legend>
                <form name="myForm" method="POST" action="actions-handler/parent-register-handler.php"
                    enctype="multipart/form-data">
                    <?php genereate_messsage("*Passwords did not match", "passmatch", "errorMsg") ?>
                    <input name="fname" type="text" placeholder="First Name"><br>
                    <?php genereate_messsage("*First name is empty!", "fnamecheck", "errorMsg") ?>

                    <br>
                    <input type="text" name="mname" placeholder="Middle Name"><br>
                    <?php genereate_messsage("*Middle name is empty!", "mnamecheck", "errorMsg") ?><br>
                    <input type="text" placeholder="Last Name" name="lname"><br>
                    <?php genereate_messsage("*Last name empty!", "lnamecheck", "errorMsg") ?><br>
                    <input type="number" name="phone" placeholder="Phone number">
                    <?php genereate_messsage("*Phone number is required!", "phonecheck", "errorMsg") ?><br><br>
                    <input type="email" name="email" placeholder="E-mail address">
                    <?php genereate_messsage("*Email is requred!", "emailcheck", "errorMsg") ?><br><br>
                    DOB:
                    <input type="date" name="birth"><br>
                    <?php genereate_messsage("*Date of birth is required", "birthcheck", "errorMsg") ?><br>
                    <input type="text" name="relationship" placeholder="Relationship"><br>
                    <?php genereate_messsage("*Fill out the relationship", "mnamecheck", "errorMsg") ?><br>

                    <input type="password" placeholder="Password" name="password1"><br><br>
                    <input type="password" placeholder="Confirm password" name="password2"><br><br>
                    <span class="submit">
                        <input type="submit" name="submit" value="Upload personal info"
                            style="font-size: 20px; color: white; border: 2px solid blue; border-radius: 30px; background: blue;">
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