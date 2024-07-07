<?php
require_once "includes/header.php";
?>
        <div class="nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="register.php">Register</a></li>
        </div>
        </div>
    <div class="body">
    <h1>PROVIDE THE REQIURED CREDENTIALS TO LOGIN</h1>
<div class="myForm">
        <?php
            if(isset($_GET['incorrectLogin'])){
                echo "<small>Username or password incorrect!</small>";
            }
        ?>
      <form action="actions/login_handler.php" method="post">
            <label for="user">Username:</label>
            <input type="text" name="username" id="user" placeholder="Email/ Phone" required autofocus><br><br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required><br><br>
            <input type="submit" name="login" value="Login" class="button">
      </form>
</div>
    </div>
    <?php
require_once "includes/footer.php";
?>