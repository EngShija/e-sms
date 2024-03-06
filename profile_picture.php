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
        <form action="actions-handler/file_upload_handler.php" method="post" enctype="multipart/form-data">
            <label for="file" class="label">CHOOSE AN IMAGE TO UPLOAD</label>
        <div class="hidden">
            <input type="file" name="image" id="file">
        </div>
            <button type="submit" name="upload" class="uploadbtn">UPLOAD</button>
           
        </form>
    </div>
</div>

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

<?php
require_once "inc/footer.php";

