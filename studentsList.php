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

        <form>
            <input type="text" onkeyup="serch(this.value)" placeholder="Search">
        </form>
        </div>

        <div class="users">
        <small>STUDENTS</small>
        <?php 
            foreach(student() as $user):
         ?><h2>
 <a href="student-card.php?student-id=<?= $user['id'] ?>">
                <?= $user['first_name'] ?>
                <?= $user['middle_name'] ?>
                <?= $user['last_name'] ?>
                </a></h2><hr>
       <?php endforeach; ?> 
        </div>
        <?php $_SESSION['std_id'] = $user['id'] ?> 
        </div>
</div>
</div>
<?php require_once __DIR__. "/inc/footer.php" ?>