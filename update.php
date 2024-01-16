<?php include_once "./inc/header.php";
session_start();
include_once "inc/header.php";
include_once "inc/database.php";
require_once __DIR__ . "/helpers/functions.php";
$user_id = $_SESSION['user_id'];
$data = get_user_info_by_id($user_id);
?>


<div class="header">
    <h><span>e-</span>SMS</h>
    <p><a href="home.php">Home</a></p>
    <p><a href="prog.php">Dashboard</a></p>
    <p><a href="profile.php">Profile</a></p> 
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
                <legend><img src="images/avatar.jpeg"></legend>
                <form name="myForm" method="POST" action="actions-handler/update_handler.php"
                    enctype="multipart/form-data">
                    <br>

                    <input name="ufname" type="text" placeholder="First Name" value="<?= $data['fname'] ?>"
                        required><br><br>

                    <input type="text" name="umname" placeholder="Middle Name" required
                        value="<?php echo $data['mname'] ?>"><br><br>

                    <input type="text" placeholder="Last Name" name="ulname" required
                        value="<?= $data['lname'] ?>"><br><br>

                    <input type="text" name="uaddress" placeholder="Physical address" required
                        value="<?= $data['physicalAddress'] ?>"><br><br>

                    <input type="date" name="ubirth" placeholder="Date of birth" required
                        value="<?= $data['birth_date'] ?>"><br><br>

                    Gender:
                    <input type="radio" value="Male" name="ugender" style="height: 20px; width: 20px;" required>Male
                    <input type="radio" value="Female" name="ugender" style="height: 20px; width: 20px;"
                        required>Female<br><br>
                    </span><br>
                    <input type="number" name="uphone" placeholder="Phone number" required
                        value="<?= $data['phone'] ?>"><br><br>

                    <input type="email" name="uemail" placeholder="E-mail address" required
                        value="<?= $data['email'] ?>"><br><br>
                    <span class="submit"><br>
                        <input type="submit" name="update" value="Submit Changes"
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
<section class="footer">
        <div class="head">
            <h2>You logged in as
            <?= $data['fname'] ?>
            <?= $data['mname'] ?>
            <?= $data['lname'] ?>
        </h2>
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
</section>
</body>

</html>