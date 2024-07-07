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
                <li class="currrentLink">
                    <a href="payment.php" title="Payments"><img src="images/pay.svg"></a>
                </li>
                <li>
                    <a href="chat/user.php" title="Chat"><img src="images/chat.svg"></a>
                </li>
                <li>
                    <a href="security.php" title="Security"><img src="images/security.svg"></a>
                </li>
            </div>

            <fieldset class="paylinks">
                <legend>Sellect payment purpose</legend>
                    <div class="col-md-4 column productbox">
                        <div class="purpose">
                         <li><a class="submit" href="https://payments.azampay.co.tz/?id=eda31e86-5645-4143-9cc1-62e048c92f0f&language=en">Tuition Fee </a></li><br>
                         <li><a class="submit" href="https://payments.azampay.co.tz/?id=eda31e86-5645-4143-9cc1-62e048c92f0f&language=en">Library Fee </a></li><br>
                         <li><a class="submit" href="https://payments.azampay.co.tz/?id=eda31e86-5645-4143-9cc1-62e048c92f0f&language=en">ID Fee </a></li><br>
                         <li><a class="submit" href="https://payments.azampay.co.tz/?id=eda31e86-5645-4143-9cc1-62e048c92f0f&language=en">Student organization Fee </a></li><br>
                        <li> <a class="submit" href="https://payments.azampay.co.tz/?id=eda31e86-5645-4143-9cc1-62e048c92f0f&language=en">Accomodation Fee </a></li>
                        </div>
                        </div>
                    </div>
        </div>
        </form>
        </fieldset>
    </div>
</div>
</div>
<?php require_once __DIR__ . "/inc/logged-in-user-footer.php" ?>



</div>
</div>
</div>
<?php require_once __DIR__ . "/inc/logged-in-user-footer.php" ?>