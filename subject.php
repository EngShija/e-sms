<?php
session_start();
 include_once "./inc/header.php"; ?>
    <div class="header">
        <h><span>e-</span>SMS</h>
        <p><a href="home.php">Home</a></p>
        <p><a href="register.php">Register</a></p>
    </div>
    <div class="container">
        <div class="MyLoginForm">
            <fieldset>
                <form action="AdminTools/addSubject.php" name="class" method = "POST">
                    <input type="text" name="subName" placeholder="Subject Name"><br><br>
                    <input type="number" name="studentNumber" placeholder="Student's number taking"><br><br>
                    <input type="number" name="subName" placeholder="No of Teachers teaching"><br><br>
                    <div class="submit">
                        <input name = "addsub" type="submit" value="Add" style="background: blue;  height: font-size: 20px; color: white; border: 2px solid blue; border-radius: 30px; width: 200px;">
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