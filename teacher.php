<?php
session_start();
 include_once "./inc/header.php"; ?>
    <div class="header">
        <h><span>e-</span>SMS</h>
        <p><a href="home.php">Home</a></p>
        <p><a href="register.php">Register</a></p>
        <div class="time">
                <?php include_once "./inc/greetings.php"?>
            </div>
            <h6></h6>
    </div>
    <div class="container">
        <div class="MyLoginForm">
        <div class="faliureBox">
                <?php 
        if(isset($_GET['wrong-cred'])) {
            echo "<h3>Wrong username or password!</h3>";
        }
        ?>
                </div>

        <div class="successBox">
<?php
if(isset($_GET['changed'])) {
            echo "<h3>Your password is changed successfully! Login now with your new password</h3>";
        }
        ?>
        </div>

           <fieldset>

            <legend> <h2>Teacher's Information;</h2></legend>
                <form action="AdminTools/addTeacher.php" name="myForm" onsubmit="return FormValidation()" method = "POST">
                    <input type="text" name="fname" placeholder="First name"><br><br>
                    <input type="text" name="mname" placeholder="Middle name"><br><br>
                    <input type="text" name="lname" placeholder="Last name"><br><br>
                    <input type="text" name="address" placeholder="Physical Address"><br><br>
                Gender:
                    <input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Female">Female<br><br>
                    DOB:
                    <input type="date" name="birth"><br><br>
                    <input type="number" name="phone" placeholder="Phone number"><br><br>
                    <input type="email" name="email" placeholder="Email"><br><br>
                    <input type="password" name="password" placeholder="Cereate password"><br><br>
                    <input type="password" name="confirmPassword" placeholder="Confirm Password"><br><br>
                    <div class="submit">
                        <input name = "submit" type="submit" value="Upload Info" style="background: blue;  height: font-size: 20px; color: white; border: 2px solid blue; border-radius: 30px; width: fit-content;">
                        <br>
                    </div>
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