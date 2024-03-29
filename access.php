<?php include_once "./inc/header.php"; ?>

<div>
    <div class="header">
    <h><span>e-</span>SMS</h>
    <p><a href="login.php">Login</a></p>
        <p><a href="register.php">Register</a></p>
        <div class="time">
<?php include_once "./inc/greetings.php"; ?>
</div>
<h6></h6>
        </div>
    <div class="container">
        <div class="MyLoginForm denied">
            <h1>ACCESS DENIED</h1>
        </div>
    </div>
    <?php require_once __DIR__. "/inc/footer.php" ?>