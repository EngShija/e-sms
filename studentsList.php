<?php
include_once "inc/header.php";
include_once "inc/database.php";
require_once __DIR__ . "/helpers/functions.php";
kick_user_to("access.php");
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
        <?php genereate_messsage("Student details updated successfully!", "updated", "successBox") ?>
        <?php genereate_messsage("Student added successfully!", "sucess", "successBox") ?>
        <?php genereate_messsage("Data deleted successfully!", "deleted", "faliureBox") ?>
        <?php genereate_messsage("No user found!", "nouser", "faliureBox") ?>

        <div class="admintools">
        <form action="search.php" method="POST">
            <input type="text" name="serch_term" placeholder="Serch users" class="serchBox" required>
            <input type="submit" name="search" value="Search">
            <li><a href="student.php">Add student</a></li>
        </form>
        </div>

    <table border="2">
        <tr>
            <th>S/N</th>
            <th>Student's Name</th>
        </tr>

        <tr>

            <?php $counter = 1 ?>
            <?php foreach (student() as $user): ?>

                <td>
                    <?= $counter ?>
                </td>
                <td>
                <a href="student-card.php?student-id=<?= $user['id'] ?>">
                <?= $user['first_name'] ?>
                <?= $user['middle_name'] ?>
                <?= $user['last_name'] ?>
                </a>
            </td>
            </tr>
            <?php $counter++ ?>
        <?php endforeach; ?>

        <?php $_SESSION['std_id'] = $user['id'] ?>

    </table>

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
</body>

</html>