<?php
require_once __DIR__. "/helpers/functions.php";
$student_id = id();
$message = "No results found";
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
        <?php genereate_messsage("Your details has been updated successfully!", 'updated', "success      Box") ?> 
            <div class="all">
            <div class="LinkBar">
                    <li>
                        <a href="prog.php"><img src="images/dashboard.png"></a>
                    </li>
                    <li>
                        <a href="profile.php"><img src="images/account.png"></a>
                    </li>
                    <li   class="currrentLink">
                        <a href="results.php"><img src="images/results.png"></a>
                    </li>
                    <li>
                        <a href="payment.php"><img src="images/pay.svg"></a>
                    </li>
                    <li>
                        <a href="chat.php"><img src="images/chat.svg"></a>
                    </li>
                    <li>
                        <a href="security.php"><img src="images/verified_user.png"></a>
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
<?php require_once __DIR__. "/inc/logged-in-user-footer.php" ?>