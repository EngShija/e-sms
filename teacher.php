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
        <?php genereate_messsage("*A user is already exists, Go to login!", "userPresent", "errorMsg") ?>
            <fieldset>
                <legend>
                    <h3>Basic info</h3>
                </legend>
                <form name="myForm" method="POST" action="AdminTools/addTeacher.php"
                    enctype="multipart/form-data">
                    <br>
                         <?php genereate_messsage("*Your passwords did not match", "passmatch", "errorMsg") ?><br><br>
                        <input name="fname" type="text" placeholder="First Name"><br>
                    <?php genereate_messsage("*First name is empty!", "fnamecheck", "errorMsg") ?>
                    
                    <br>
            
                        <input type="text" placeholder="Last Name" name="lname"><br>
                        <?php genereate_messsage("*Last name empty!", "lnamecheck", "errorMsg") ?><br>

                        <label for="gender">Gender:</label>
                        <input type="radio" value="Male" name="gender" style="height: 20px; width: 20px;" id="gender">Male
                        <input type="radio" value="Female" name="gender" style="height: 20px; width: 20px;" id="gender" >Female<br>
                        </span><br>
                        <?php genereate_messsage("*Sellect your gender", "gendercheck", "errorMsg") ?>
                        <label for="birth">DOB:</label>
                        <input type="date" name="birth" id="birth"><br>
                        <?php genereate_messsage("*Fill out your birth date", "birthcheck", "errorMsg") ?><br>

                        <input type="number" name="phone" placeholder="Phone number">
                    <?php genereate_messsage("*Phone number is required!", "phonecheck", "errorMsg") ?><br><br>
    
                    <input type="email" name="email" placeholder="E-mail address">
                    <?php genereate_messsage("*Email is requred!", "emailcheck", "errorMsg") ?><br><br>
                    <label for="joining_date">JOD:</label>
                    <input type="date" name="joining_date" id="joining_date">
                    <?php genereate_messsage("*Joining date is required!", "jdatecheck", "errorMsg") ?><br><br>

                    <input type="text" name="subject" placeholder="Subject tought">
                    <?php genereate_messsage("*subject tought by ateacher is required!", "subcheck", "errorMsg") ?><br><br>
                    
                    <input type="password" placeholder="Password" name="password1"><br><br>
                    <input type="password" placeholder="Confirm password" name="password2"><br><br>
                    <span class="submit">
                      <button type="submit" name="submit">Upload</button>
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