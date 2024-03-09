<?php
require_once "inc/header.php";
include_once "inc/database.php";
require_once __DIR__ . "/helpers/functions.php";
kick_user_to("access.php");

if(isset($_GET['subject_id'])){
    $_SESSION['subject_id'] = $_GET['subject_id'];
}
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
                    <h3>#</h3>
                </legend>        
                <form name="myForm" method="POST" action="actions-handler/results-handle.php"
                    enctype="multipart/form-data">
                        <input name="marks" type="text" placeholder="Marks scored"  required><br><br>
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