<?php
require_once "inc/header.php";

require_once __DIR__ . "/helpers/functions.php";

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
                    <small>Basic info</small>
                </legend>        
                <form name="myForm" method="POST" action="actions-handler/register-handler.php"
                    enctype="multipart/form-data">
                         <?php genereate_messsage("*Your passwords did not match", "passmatch", "errorMsg") ?><br>
                        <input name="fname" type="text" placeholder="First Name" autofocus><br>
                    <?php genereate_messsage("*First name is empty!", "fnamecheck", "errorMsg") ?>
                    
                    <br>
                    <input type="text" name="mname" placeholder="Middle Name"><br>
                    <?php genereate_messsage("*Middle name is empty!", "mnamecheck", "errorMsg") ?><br>
                        <input type="text" placeholder="Last Name" name="lname"><br>
                        <?php genereate_messsage("*Last name empty!", "lnamecheck", "errorMsg") ?><br>
                        <input type="text" name="address" placeholder="Physical address"><br>
                        <?php genereate_messsage("*Address is empty!", "addresscheck", "errorMsg") ?><br>

                        <input type="date" name="birth" placeholder="Date of birth"><br>
                        <?php genereate_messsage("*Fill out your birth date", "birthcheck", "errorMsg") ?>

                        Gender:
                        <input type="radio" value="Male" name="gender" style="height: 20px; width: 20px;">Male
                        <input type="radio" value="Female" name="gender" style="height: 20px; width: 20px;">Female<br>
                        </span><br>
                        <?php genereate_messsage("*Sellect your gender", "gendercheck", "errorMsg") ?>
                </fieldset>


                <fieldset>
                    <legend>
                        <h3>Contact info</h3>
                    </legend>
                    <input type="number" name="phone" placeholder="Phone number">
                    <?php genereate_messsage("*Phone number is required!", "phonecheck", "errorMsg") ?><br><br>
        
                    <input type="email" name="email" placeholder="E-mail address">
                    <?php genereate_messsage("*Email is requred!", "emailcheck", "errorMsg") ?><br><br>
                    <input type="password" placeholder="Password" name="password1"><br><br>
                    <input type="password" placeholder="Confirm password" name="password2"><br><br>
                    <span class="submit">
                        <button type="submit" value="Submit"name="submit">Submit</button>
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