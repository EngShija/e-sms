<?php
include_once "inc/header.php";
require_once __DIR__ . "/helpers/functions.php";
require_once __DIR__ . "/inc/database.php";
if (isset($_POST['search'])) {
    $reg_num = $_POST['serch_term'];
    $first_name = $_POST['serch_term'];
    $middle_name = $_POST['serch_term'];
    $last_name = $_POST['serch_term'];
    $email = $_POST['serch_term'];
    $role =$_POST['serch_term'];


    //sql query to serch data
    $sql = "SELECT * FROM users WHERE RegNo LIKE '%$reg_num%' OR fname LIKE '%$first_name%' OR mname LIKE '%$middle_name%' OR lname LIKE '%$last_name%' OR email LIKE '%$email%' OR role LIKE '%$role%'";
    $result = database()->query($sql);
    $students = $result->fetch_all(MYSQLI_ASSOC);
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
<?php if($students) { ?>
<small class="successBox">Search results!</small>
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
        <?php foreach ($students as $student): ?>

            <td>
                <?= $counter ?>
            </td>
            <td>
                <?= $student['RegNo'] ?>
            </td>
            <td>
                <?= $student['fname'] ?>
            </td>
            <td>
                <?= $student['mname'] ?>
            </td>
            <td>
                <?= $student['lname'] ?>
            </td>
            <td>
                <?= $student['gender'] ?>
            </td>
            <td>
                <?= $student['birth_date'] ?>
            </td>
            <td>
                <?= $student['physicalAddress'] ?>
            </td>
            <td>
                <?= $student['phone'] ?>
            </td>
            <td>
                <?= $student['email'] ?>
            </td>
            <td>
                <?= $student['role'] ?>
            </td>

            <td class="editbtn"><a href="edit.php?editid=<?= $student['id'] ?>"><img src="images/edit.png"></a>
            </td>
            <td class="deletebtn"><a href="config/delete.php?deleteid=<?= $student['id'] ?>"><img
                        src="images/delete.jpeg"></a>
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