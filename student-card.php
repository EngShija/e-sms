<?php
include_once "./inc/header.php"; 
require_once __DIR__."/helpers/functions.php";
$_SESSION['studentId'] = $_GET['student-id'];
kick_user_to("access.php");
if (isset($_GET['student-id'])) {
    $id = $_GET['student-id'];
    $_SESSION['student_id'] = $_GET['student-id'];
    $student = get_user_info_by_id($id);
    $profile_pic = display_student_profile_picture($id);
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
        <div class="prof">
            <img src="uploads/<?= $profile_pic['profile_image'] ?>"> <li>  <a href="subjects.php">Add Results</a></li><br>
            <h1><?= $student['first_name'] ?></h1>
            <h1><?= $student['middle_name'] ?></h1>
            <h1><?= $student['last_name'] ?></h1><br>
            <h3>Registration number:</h3>
            <p><?= $student['reg_num'] ?><br><hr>
            <h3>Gender:</h3>
            <p><?= $student['gender'] ?><br><hr>
            <h3>Phone number:</h3>
            <p><?= $student['phone'] ?><br><hr>
            <h3>Email:</h3>
            <p><?= $student['email'] ?><br><hr>
            <h3>DOB:</h3>
            <p><?= $student['DOB'] ?><br><hr>
            <h3>Physica Address:</h3>
            <p><?= $student['physical_address'] ?><hr>

           <li><a href="edit.php?editid=<?= $student['id'] ?>">Edit</li>

          <div  class="delete"> <li><a href="config/delete.php?deleteid=<?= $student['id'] ?>">Delete</a></li></div>
        
</div>
    </div>
</div>
<?php require_once __DIR__. "/inc/footer.php" ?>