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
        <div class="inlineForm">
        <?php genereate_messsage("*A user is already exists, Go to login!", "userPresent", "") ?>
            <fieldset>
                <legend>
                    <h3>Basic info</h3>
                </legend>
                <form name="myForm" method="POST" action="actions-handler/register-handler.php"
                    enctype="multipart/form-data">
                    <br>
                         <?php genereate_messsage("*Your passwords did not match", "passmatch", "errorMsg") ?><br><br>
                        <input name="fname" type="text" placeholder="First Name"><br>
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
                        <h3>Registration info</h3>
                    </legend>
                    <input type="text" placeholder="Student's Reg.No" name="RegNo"><br><br>
                    <?php genereate_messsage("*Kindly enter your registration number!", "regcheck", "errorMsg") ?>
    
                    <input type="number" name="phone" placeholder="Phone number">
                    <?php genereate_messsage("*Phone number is required!", "phonecheck", "errorMsg") ?><br><br>
        
                    <input type="email" name="email" placeholder="E-mail address">
                    <?php genereate_messsage("*Email is requred!", "emailcheck", "errorMsg") ?><br><br>
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