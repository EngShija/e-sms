<?php
require_once __DIR__. "/helpers/functions.php";
$student_id = id();
$result = get_results($student_id);
kick_user_to("access.php");
sweetAlertSession('login', "Success!","You logged in successfully!", "success" );
$data = get_user_info_by_id(id());
$profile_pic = display_student_profile_picture(id());


?>

<div class="header">
    <h><span>e-</span>SMS</h>
    <p><a href="home.php">Home</a></p>
    <p onclick="smartAlerts()"><a href="actions-handler/logout-handlerr.php">Logout</a></p>
    <p><a href="profile.php">
    <img src="uploads/<?= $profile_pic['profile_image'] ?>"><?= $data['first_name']; ?>
        </a></p>
    <div class="time">
        <?php include_once "./inc/greetings.php" ?>
    </div>
    <h6></h6>
    </div>
</div>


<div class="container">
    <div class="MyLoginForm">
        <?php genereate_messsage("Your details has been updated successfully!", 'updated', "successBox") ?> 
            <div class="all">
                <div class="LinkBar">
                    <li>
                        <a href="prog.php"><img src="images/Dashboard.png"></a>
                    </li>
                    <li>
                        <a href="profile.php"><img src="images/profile.png"></a>
                    </li>
                    <li>
                        <a href="results.php"><img src="images/results.png"></a>
                    </li>
                    <li>
                        <a href="payment.php"><img src="images/pay.png"></a>
                    </li>
                    <li>
                        <a href="chat.php"><img src="images/chat.png"></a>
                    </li>
                    <li>
                        <a href="security.php"><img src="images/security.png"></a>
                    </li>
                </div>


                <table border="1">
    <tr>
        <th>SUbject name</th>
        <th>Marks scored</th>
        <th>Grede</th>
        <th>Description</th>
    </tr>
    <?php

foreach($result as $result): ?>
<tr>
    <td><?= $result['subject_name'] ?></td>
    <td><?= $result['marks'] ?></td>
    <td><?= $result['grade'] ?></td>
    <td><?= $result['description'] ?></td>
</tr>

<?php

endforeach;
?>

</table>


            </div>          
    </div>
</div>


<footer>
    <section class="footer">
        <div class="head">
            <h2>You logged in as
            <?= $data['first_name'] ?>
            <?= $data['middle_name'] ?>
            <?= $data['last_name'] ?>
            <a href="actions-handler/logout-handlerr.php">(logout)</a>
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
</footer>
</body>

</html>