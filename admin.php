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
       
        <div class="time">
                <?php include_once "./inc/greetings.php"?>
            </div>
</div>
      
    <div class="container">
        <div class="MyLoginForm">
            <div class="counters">
        <section class="student">
<?php $row_count = counter('student');
echo $row_count['id_count']. " Total students";
?>
        </section>
<section class="parent">
<?php $row_count = counter('parent');
echo $row_count['id_count']. " Total parents";
?>
</section>
<section  class="teacher">
<?php $row_count = counter('teacher');
echo $row_count['id_count']. " Total Teachers";
?>
</section>

<section  class="subject">
<?php $row_count = counter('subject');
echo $row_count['id_count']. " Total Subjects";
?>
</section>

<section  class="class">
<?php $row_count = counter('class');
echo $row_count['id_count']. " Total Classes";
?>
</section>


<section  class="admin">
<?php $row_count = counter('admin');
echo $row_count['id_count']. " Total Admins";
?>
</section>
</div>
        <div class="admintools">
           <li>  <a href="class.php">Add Class</a></li>
           <li>  <a href="add-subject.php">Add Subject</a></li>
           <li>  <a href="announce.php">Announcements</a></li>
           <li>  <a href="teacherList.php">Teachers</a></li>
           <li>  <a href="studentsList.php">Students</a></li>
           <li>  <a href="parentsList.php">Parents</a></li>
           <li>  <a href="admin-registration.php">Admins</a></li>
        </div>
          
        </div>
    </div>
    <?php require_once __DIR__. "/inc/footer.php" ?>