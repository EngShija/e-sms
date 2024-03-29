<?php
require_once "inc/header.php";
include_once "inc/database.php";
require_once __DIR__ . "/helpers/functions.php";
kick_user_to("access.php");

if(isset($_GET['subject_id'])){
    $_SESSION['subject_id'] = $_GET['subject_id'];
}
?>

<div class="header">
    <h><span>e-</span>SMS</h>
    <p><a href="home.php">Home</a></p>
    <p><a href="login.php">Login</a></p>
    <div class="time">
        <?php include_once "./inc/greetings.php" ?>
    </div>
    <h6></h6>
</div>

</div>
<div class="container">
    <div class="MyLoginForm">
        <div class="inlineForm">
            <fieldset>
                <legend>
                    <h3>#</h3>
                </legend>        
                <form name="myForm" method="POST" action="actions-handler/results-handle.php"
                    enctype="multipart/form-data">
                        <input name="marks" type="text" placeholder="Marks scored"  required><br><br>
                    <span class="submit">
                        <button type="submit" value="Submit"name="submit">Upload</button>
                    </span>
            </div>
            </form>
            </fieldset>

        </div>
    </div>
    </div>
    </div>
    </div>
    <?php require_once __DIR__. "/inc/footer.php" ?>