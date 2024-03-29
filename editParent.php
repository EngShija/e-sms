<?php
include_once "./inc/header.php";
include_once "inc/header.php";
include_once "inc/database.php";
require_once __DIR__ . "/helpers/functions.php";
kick_user_to("access.php");
$data = get_parent_info_by_id(id());
?>


<div class="header">
    <h><span>e-</span>SMS</h>
    <p><a href="home.php">Home</a></p>
    <p><a href="prog.php">Dashboard</a></p>
    <p><a href="profile.php">Profile</a></p> 
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
                <legend><img src="images/avatar.jpeg"></legend>
                <form name="myForm" method="POST" action="actions-handler/editParent-handler.php"
                    enctype="multipart/form-data">
                    <br>

                    <input name="ufname" type="text" placeholder="First Name" value="<?= $data['first_name'] ?>"
                        required><br><br>

                    <input type="text" name="umname" placeholder="Middle Name" required
                        value="<?= $data['middle_name'] ?>"><br><br>

                    <input type="text" placeholder="Last Name" name="ulname" required
                        value="<?= $data['last_name'] ?>"><br><br>

                    <input type="number" name="uphone" placeholder="Phone number" required
                        value="<?= $data['phone'] ?>"><br><br>

                    <input type="email" name="uemail" placeholder="E-mail address" required
                        value="<?= $data['email'] ?>"><br><br>
                    <input type="date" name="ubirth" placeholder="Date of birth" required
                        value="<?= $data['DOB'] ?>"><br><br>

                    <input type="text" name="relationship" placeholder="Relationship" required
                        value="<?= $data['relationship'] ?>"><br><br>
                    <span class="submit"><br>
                        <input type="submit" name="update" value="Submit Changes"
                            style="font-size: 20px; color: white; border: 2px solid blue; border-radius: 30px; background: blue;">
                    </span>
        </div>
        </form>
        </fieldset>
    </div>
</div>
</div>
</div>
</div>
<?php require_once __DIR__. "/inc/logged-in-user-footer.php" ?>