<?php
include_once "inc/header.php";
include_once "inc/database.php";
require_once __DIR__ . "/helpers/functions.php";
if (isset($_GET['editid'])) {
    $id = $_GET['editid'];
    $data = get_user_info_by_id($id);
    $profile_pic = display_student_profile_picture($id);
}
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
    <div class="admintools">
        <li><a href="addParent.php">Add parent</a></li>
        </div>
        <div class="inlineForm">


            <fieldset>
              
                <legend> <img src="uploads/<?= $profile_pic['profile_image'] ?>"></legend>
                <div class="prof">
                    <li><a href="editParent.php">Edit Parent info</a></li>
                </div>
                <form name="myForm" method="POST" action="config/edit_config.php" enctype="multipart/form-data">
                    <br>

                    <input name="ufname" type="text" placeholder="First Name" required
                        value="<?= $data['first_name'] ?>"><br><br>

                    <input type="text" name="umname" placeholder="Middle Name" required
                        value="<?= $data['middle_name'] ?>"><br><br>

                    <input type="text" placeholder="Last Name" name="ulname" required
                        value="<?= $data['last_name'] ?>"><br><br>

                    <input type="text" name="uaddress" placeholder="Physical address" required
                        value="<?= $data['physical_address'] ?>"><br><br>

                    <input type="date" name="ubirth" placeholder="Date of birth" required
                        value="<?= $data['DOB'] ?>"><br><br>

                    Gender:
                    <input type="radio" value="Male" name="ugender" style="height: 20px; width: 20px;" required>Male
                    <input type="radio" value="Female" name="ugender" style="height: 20px; width: 20px;"
                        required>Female<br><br>
                    </span><br>
                    <input type="text" name="uRegNo" placeholder="Registration number" required
                        value="<?= $data['reg_num'] ?>"><br><br>
                    <input type="number" name="uphone" placeholder="Phone number" required
                        value="<?= $data['phone'] ?>"><br><br>

                    <input type="email" name="uemail" placeholder="E-mail address" required
                        value="<?= $data['email'] ?>"><br><br>
                        <span class="submit">
                        <button type="submit" value="Update"name="update">Update</button>
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