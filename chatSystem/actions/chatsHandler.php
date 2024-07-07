<?php
error_reporting(0);
session_start();
require_once "../Database/connection.php";
require_once "../helpers/functions.php";
$sender_id = $_SESSION['current_user'];
$receiver_id = $_SESSION['receiver'];
if(isPostMethod()){
    if(isset($_POST['send'])){
        $content = $_POST['message'];
        $time_sent = date('Y-m-d H:i:s');
        sendMessage($sender_id, $receiver_id, $time_sent, $content);
        redirectTo('../chats.php?user_id='.$receiver_id);
    }
}
