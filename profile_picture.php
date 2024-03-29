<?php
include_once "inc/header.php";
require_once __DIR__ . "/helpers/functions.php";
kick_user_to("access.php");
$data = get_user_info_by_id(id());
sweetAlert('noimage', 'Sorry!', 'No image sellected!', 'error');
sweetAlert('notimage', 'Sorry!', 'A file sellected is not image!', 'error');
sweetAlert('toolarge', 'Sorry!', 'Image size is too large (Max: 1MB)', 'warning');
?>
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

<div class="container">
    <div class="MyLoginForm">

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
                    <li>
                        <a href="chat.php"><img src="images/chat.svg"></a>
                    </li>
                    <li>
                        <a href="security.php"><img src="images/verified_user.png"></a>
                    </li>
                </div>

<fieldset>
        <form action="actions-handler/file_upload_handler.php" method="post" enctype="multipart/form-data">
            <label for="file" class="label">CHOOSE AN IMAGE TO UPLOAD</label>
        <div class="hidden">
            <input type="file" name="image" id="file">
        </div>
            <button type="submit" name="upload" class="uploadbtn">UPLOAD</button>
           
        </form>
        </fieldset>
    </div>
</div>
</div>
<?php require_once __DIR__. "/inc/logged-in-user-footer.php" ?>
