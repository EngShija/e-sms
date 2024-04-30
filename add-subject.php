<?php
include_once "./inc/header.php";
require_once __DIR__ . "/helpers/functions.php";
kick_user_to("access.php");
?>
<div class="header">
    <h><span>e-</span>SMS</h>
    <p><a href="home.php">Home</a></p>
    <p><a href="register.php">Register</a></p>
</div>
<div class="container">
    <div class="MyLoginForm">
        <fieldset>
            <form action="AdminTools/addSubject.php" name="class" method="POST">
                <input type="text" name="subName" placeholder="Subject Name"><br><br>
                <span class="submit">
                        <button type="submit"name="addsubject">Add Subject</button>
                    </span>
            </form>
        </fieldset>
    </div>
</div>
</div>
<?php require_once __DIR__. "/inc/footer.php" ?>