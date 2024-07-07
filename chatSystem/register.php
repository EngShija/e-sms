<?php
require_once "includes/header.php";
?>
        <div class="nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="login.php">Login</a></li>
        </div>
    </div>

    <div class="body">
    <h1>FILL YOUR INFORMATION TO REGISTER</h1>
<div class="myForm">
      <form action="actions/register_handler.php" method="post" enctype="multipart/form-data">
            <label for="fname">Full Name:</label>
            <input type="text" name="fname" id="fname" placeholder="Eg. Rashidi Matiko" required autofocus><br><br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Eg. rashidi@gmail.com" required><br><br>
            <label for="phone">Phone No:</label>
            <input type="number" name="phone" id="phone" placeholder="Eg. 255757000000" required><br><br>
            <label for="password1">Enter Password:</label>;
            <input type="password" name="password1" id="password1" required><br><br>
            <label for="password2">Comfirm Password:</label>
            <input type="password" name="password2" id="password2" required><br><br>
            <!-- <label for="image">CHOOSE IMAGE</label> -->
            <input type="file" name="image" id="image"><br><br>
            <input type="submit" name="register" value="Register" class="button">
      </form>
</div>
</div>
    <?php
require_once "includes/footer.php";
?>


