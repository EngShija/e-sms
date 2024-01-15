<?php
session_start();
include_once "inc/header.php";
include_once "inc/database.php";
require_once __DIR__ . "/helpers/functions.php";
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
        <?php genereate_messsage("Student added successfully!", "sucessBox", "failureBox") ?>
        <?php genereate_messsage("One User records deleted!", "deleted", "failureBox") ?>

    <table border="2">
        <tr>
            <th>S/N</th>
            <th>RegNumber</th>
            <th>FirstName</th>
            <th>MiddleName</th>
            <th>LastName</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>PhysicalAddress</th>
            <th>Phone</th>
            <th>Email</th>
            <th>UserRole</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <tr>
            <?php $counter = 1 ?>
            <?php foreach (users() as $user): ?>

                <td>
                    <?= $counter ?>
                </td>
                <td>
                    <?= $user['RegNo'] ?>
                </td>
                <td>
                    <?= $user['fname'] ?>
                </td>
                <td>
                    <?= $user['mname'] ?>
                </td>
                <td>
                    <?= $user['lname'] ?>
                </td>
                <td>
                    <?= $user['gender'] ?>
                </td>
                <td>
                    <?= $user['birth_date'] ?>
                </td>
                <td>
                    <?= $user['physicalAddress'] ?>
                </td>
                <td>
                    <?= $user['phone'] ?>
                </td>
                <td>
                    <?= $user['email'] ?>
                </td>
                <td>
                    <?= $user['role'] ?>
                </td>

                <td class="editbtn"><a href="edit.php?editid=<?= $user['id'] ?>"><img src="images/edit.png"></a>
                </td>
                <td class="deletebtn"><a href="config/delete.php?deleteid=<?= $user['id'] ?>"><img
                            src="images/delete.jpeg"></a>
                </td>

            </tr>
            <?php $counter++ ?>
        <?php endforeach; ?>

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