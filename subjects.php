<?php 
require_once __DIR__. "/helpers/functions.php";
$subject_id = $_SESSION['subject_id'];
$data = get_subject_info_by_id($subject_id);
$subject_name = $data['subject_name'];
sweetAlert('resultadded', 'Successfully', $subject_name. ' Results added!', 'success');
?>

<div>
    <div class="header">
    <h><span>e-</span>SMS</h>
    <p><a href="login.php">Login</a></p>
        <p><a href="register.php">Register</a></p>
        <div class="time">
<?php include_once "./inc/greetings.php"; ?>
</div>
<h6></h6>
        </div>

<?php
$data = get_subject_imfo();
$i = 0;
foreach($data as $data){
    ?>
    <a href="add-results.php?subject_id=<?= $data['id'] ?>"><?= $data['subject_name']. "<br>"?></a>

    <?php
}
$i++;
?>

<div class="footer">
        <div class="head">
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
    </div>

<?php include_once "./inc/footer.php"; ?>