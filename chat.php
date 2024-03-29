<?php
include_once "inc/header.php";
include_once __DIR__ . "/inc/database.php";
include_once __DIR__ . "/helpers/functions.php";
kick_user_to("access.php");
if (is_logged()) {
    $data = get_user_info_by_id(id());
}
?>
</div>
<div class="header">
    <h><span>e-</span>SMS</h>
    <p><a href="home.php">Home</a></p>
    <p><a href="actions-handler/logout-handlerr.php">Logout</a></p>
    <p><a href="prog.php">Dashboard</a></p>
    <div class="time">
        <?php include_once "./inc/greetings.php" ?>
    </div>
    <h6></h6>
</div>
</div>
<div class="container">
    <div class="MyLoginForm">

        <?php genereate_messsage("Your passwords didn't match!", "nomatch", "faliureBox") ?>
        <?php genereate_messsage("Incorrect current password!", "wrongCurr", "faliureBox") ?>

        <div class="all">
        <div class="LinkBar">
                    <li>
                        <a href="prog.php"><img src="images/dashboard.png"></a>
                    </li>
                    <li>
                        <a href="profile.php"><img src="images/account.png"></a>
                    </li>
                    <li>
                        <a href="results.php"><img src="images/results.png"></a>
                    </li>
                    <li>
                        <a href="payment.php"><img src="images/pay.svg"></a>
                    </li>
                    <li   class="currrentLink">
                        <a href="chat.php"><img src="images/chat.svg"></a>
                    </li>
                    <li>
                        <a href="security.php"><img src="images/verified_user.png"></a>
                    </li>
                </div>     

    <div id="wrapper">
    <div id="left_pannel">

    </div>
    <div id="right_pannel">
        <div id="header">

        </div>
        <div id="container">
            <div id="inner_left_pannel">

            </div>
            <div id="inner_right_pannel">
                
                </div>
        </div>
    </div>
</div>


    </div>
</div>
</div>
<?php require_once __DIR__. "/inc/logged-in-user-footer.php" ?>