<?php
include_once "inc/header.php";
require_once __DIR__ . "/helpers/functions.php";
require_once __DIR__ . "/inc/database.php";
kick_user_to("access.php");
if (isset($_POST['search'])) {
    $reg_num = $_POST['serch_term'];
    $first_name = $_POST['serch_term'];
    $middle_name = $_POST['serch_term'];
    $last_name = $_POST['serch_term'];
    $email = $_POST['serch_term'];
    $role =$_POST['serch_term'];
    $users = search_user($reg_num, $first_name, $middle_name, $last_name, $email, $role);
}
?>

<div class="header">
    <h><span>e-</span>SMS</h>
    <p><a href="home.php">Home</a></p>
    <p><a href="actions-handler/logout-handlerr.php">Logout</a></p>
    <p><a href="admin.php">Dashboard</a></p>
    <div class="time">
        <?php include_once "./inc/greetings.php" ?>
    </div>
    <h6></h6>
</div>

<div class="container">
    <div class="MyLoginForm">
<!-- //Display serch results -->
<?php if($users) { ?>
<small class="successBox">Search results!</small>
<table border="2">
    <tr>
        <th>S/N</th>
        <th>Student's Name</th>
    </tr>

    <tr>
        <?php $counter = 1 ?>
        <?php foreach ($users as $user): ?>

            <td>
                <?= $counter ?>
            </td>
            <td>
            <a href="student-card.php?student-id=<?= $user['id'] ?>">
                <?= $user['first_name'] ?>
                <?= $user['middle_name'] ?>
                <?= $user['last_name'] ?>
            </td>

        </tr>
        <?php $counter++; ?>
    <?php endforeach; ?>
</table>
<?php }else{
    redirect_to("studentsList.php?nouser");
} ?>
    </div>
</div>


<section class="footer">
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
</section>
<?php include_once "inc/footer.php"; ?>