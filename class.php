<?php
 include_once "./inc/header.php";
 require_once __DIR__. "/helpers/functions.php";
 sweetAlert('added', 'Successfully!', 'Class added', 'success');
 ?>
    <div class="header">
        <h><span>e-</span>SMS</h>
        <p><a href="home.php">Home</a></p>
        <p><a href="register.php">Register</a></p>
        <div class="time">
                <?php include_once "./inc/greetings.php"?>
            </div>
            <h6></h6>
    </div>
    </div>
    <div class="container">
        <div class="MyLoginForm">
            <fieldset>
                <form action="AdminTools/addClass.php" name="class" method = "POST">
                    <input type="text" name="className" placeholder="Class Name"><br><br>
                    <span class="submit">
                        <button type="submit" value="Add Class"name="addclass">Add Class</button>
                    </span>
                    <div class="submit">
                </form>
                </fieldset>
            </div>
        </div>
    </div>
    <?php require_once __DIR__. "/inc/footer.php" ?>