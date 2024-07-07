<?php
session_start();
require_once "includes/header.php";
require_once "Database/connection.php";
require_once "helpers/functions.php";
$current_user = $_SESSION['current_user'];
$users = getAllUsers($current_user);
$user1 = getUserById($current_user);
?>
<div class="nav">
    <li><a href="index.php">Home</a></li>
    <li><a href="actions/logout.php">Logout</a></li>
    <li class="myProfile"><a href="#"><img src="uploads/<?= $user1['profile_image'] ?>" ><?= " ". $user1['full_name'] ?></a></li>
</div>
</div>

<div class="body">
<div class="items">
<div class="sidebar">
<li><a href="#">MY PROFILE</a></li>
    <li><a href="#">CREATE GROUP</a></li>
    <li><a href="#">FRIENDS</a></li>
    <li><a href="#">PRIVACY & SECURITY</a></li>
    <li><a href="#">NOTIFICATIONS</a></li>
</div>

<div class="categories">
<div class="users">
<small>USERS</small>
<?php 
    foreach($users as $user):
 ?>
<h2><a href="chats.php?user_id=<?= $user['id'] ?>"><img src="uploads/<?= $user['profile_image'] ?>">
<?= $user['full_name'] ?></a>
<?php
$_SESSION['user_id'] = $user['id'];
?>
</h2><hr>
<?php endforeach; ?> 
</div>

<!-- <div class="chats">
<small>CHATS</small>
</div>

<div class="groups">
<small>GROUPS</small>
</div> -->
</div>
</div>
</div>
<?php
require_once "includes/footer.php";
?>


