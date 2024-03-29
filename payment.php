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
                    <li  class="currrentLink">
                        <a href="payment.php"><img src="images/pay.svg"></a>
                    </li>
                    <li>
                        <a href="chat.php"><img src="images/chat.svg"></a>
                    </li>
                    <li>
                        <a href="security.php"><img src="images/verified_user.png"></a>
                    </li>
                </div>

                <fieldset>
                <form method="post" action="stripePayment/stripe_form.php">
                <div class="col-md-4 column productbox">
                <div class="purpose">
                        <select name = "purpose">
                            <option value="0">Sellect purpose of Payment</option>
                            <option value="School fees">School fees</option>
                            <option value="Students organisation fee">Students organisation fee</option>
                            <option value="Lost ID">Lost ID</option>
                        </select><br><br>
                    </div>
                    <input type="number" name="amount" placeholder="Amount"/><br><br>
                    <div>
                    <span class="submit">
                    <button type="submit"  name="submit" role="button">Go to pay</button>
                </span>
                        </div>
                    </div>
                </div>
            </form>
        </fieldset>
    </div>
</div>
</div>
<?php require_once __DIR__. "/inc/logged-in-user-footer.php" ?>



    </div>
</div>
</div>
<?php require_once __DIR__. "/inc/logged-in-user-footer.php" ?>