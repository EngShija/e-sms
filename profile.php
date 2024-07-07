<?php
include_once "inc/header.php";
include_once "inc/database.php";
require_once __DIR__ . "/helpers/functions.php";
kick_user_to("access.php");
$data = get_user_info_by_id(id());
$profile_pic = display_student_profile_picture(id());
sweetAlert('dpexist', 'Sorry!', 'You have already a profile picture!', 'warning');
sweetAlert('dpuploaded', 'Successfully!', 'Profile picture uploaded', 'success')
?>
<header class="header">
    <h><span>e-</span>SMS</h>
    <p><a href="home.php">Home</a></p>
    <p><a href="actions-handler/logout-handlerr.php">Logout</a></p>
    <p><a href="prog.php">Dashboard</a></p>
    <div class="time">
    </div>
    <h6></h6>
</header>

<div class="container">
    <div class="MyLoginForm">
        <div class="all">
            <div class="LinkBar">
                <li>
                    <a href="prog.php" title="Dashboard"><img src="images/dashboard.png"></a>
                </li>
                <li class="currrentLink">
                    <a href="profile.php" title="Profile"><img src="images/account.png"></a>
                </li>
                <li>
                    <a href="results.php" title="Results"><img src="images/results.png"></a>
                </li>
                <li>
                    <a href="payment.php" title="Payments"><img src="images/pay.svg"></a>
                </li>
                <li>
                    <a href="chat/user.php" title="Chat"><img src="images/chat.svg"></a>
                </li>
                <li>
                    <a href="security.php" title="Security"><img src="images/security.svg"></a>
                </li>
            </div>


            <div class="prof">
                <img src="uploads/<?= $profile_pic['profile_image'] ?>"><br>
                <li><a href="profile_picture.php">Upload profile picture</a></li><br>
                <h3>Full Name: </h3>
                <p>
                    <?= $data['first_name'] ?>
                    <?= $data['middle_name'] ?>
                    <?= $data['last_name'] ?>
                </p><br>
                <hr>
                <h3>Gender: </h3>
                <p>
                    <?= $data['gender'] ?>
                </p><br>
                <hr>
                <h3>Date of birth: </h3>
                <p>
                    <?= $data['DOB'] ?>
                </p><br>
                <hr>
                <h3>Physical Address: </h3>
                <p>
                    <?= $data['physical_address'] ?>
                </p><br>
                <hr>
                <h3>Email: </h3>
                <p>
                    <?= $data['email'] ?>
                </p><br>
                <hr>
                <h3>Phone number: </h3>
                <p>
                    <?= $data['phone'] ?>
                </p><br>
                <hr>
                <h3>Registration number: </h3>
                <p>
                    <?= $data['reg_num'] ?>
                </p>
                <hr>
                <li><a href="update.php">Edit Your Details</a></li>
                <li><a href="addParent.php">Add Parent</a></li>

            </div>
        </div>
    </div>
</div>
<?php require_once __DIR__ . "/inc/logged-in-user-footer.php" ?>