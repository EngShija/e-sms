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
                    <a href="prog.php" title="Dashboard"><img src="images/dashboard.png"></a>
                </li>
                <li>
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
                <li class="currrentLink">
                    <a href="security.php" title="Security"><img src="images/security.svg"></a>
                </li>
            </div>



            <fieldset>
                <form action="actions-handler/security-handler.php" method="POST">
                    <br>
                    <input type="password" name="current_password" placeholder="Enter your old password"><br><br>
                    <input type="password" name="new_password" placeholder="Enter new password"><br><br>
                    <input type="password" name="confirm_password" placeholder="Confirm new password"><br><br>
                    <input type="submit" name="change" value="Change Password" style=" width: fit-content; height: auto; font-size: 20px; color: white; border: 2px solid blue; border-radius: 30px; background: blue;">
                </form>
            </fieldset>
        </div>
    </div>
</div>
<?php require_once __DIR__ . "/inc/logged-in-user-footer.php" ?>