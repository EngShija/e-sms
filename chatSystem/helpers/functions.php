<?php
require_once __DIR__. "/../Database/connection.php";
function register_user($fullName, $email, $phone, $password1, $profile){
    $sql = "INSERT INTO users(full_name, email, phone, password, profile_image)
    VALUES('$fullName', '$email', '$phone', '$password1', '$profile')";
    return connection()->query($sql);
}
function sendMessage($sender_id, $receiver_id, $time_sent, $content){
    $sql = "INSERT INTO messages(sender_id, receiver_id, time_sent, time_received, status, content) 
    VALUES($sender_id, $receiver_id, '$time_sent', '', '', '$content')";
    return connection()->query($sql);
}

function getSentMessage($current_id, $sender_id){
    $sql = "SELECT time_sent, content FROM messages WHERE receiver_id = $current_id AND sender_id = $sender_id";
    return connection()->query($sql)->fetch_all(MYSQLI_ASSOC);
}
function getreceivedMessage($current_id, $sender_id){
    $sql = "SELECT time_sent, content FROM messages WHERE receiver_id = $current_id AND sender_id = $sender_id";
    return connection()->query($sql)->fetch_all(MYSQLI_ASSOC);
}
function redirectTo($url){
    header('Location: '. $url);
    exit;
}
function isPostMethod(){
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}
function getAllUsers($current_user){
$mysql = "SELECT * FROM users WHERE id <> $current_user";
$myresult = connection()->query($mysql);
return $myresult->fetch_all(MYSQLI_ASSOC);
}

function getUserById($current_user){
    $mysql = "SELECT * FROM users WHERE id = $current_user";
    $myresult = connection()->query($mysql);
    return $myresult->fetch_assoc();
    }

function loginWithEmail($username, $password){
    $query = "SELECT * FROM users WHERE email = '$username' AND password = '$password'";
    $result = connection()->query($query);
    return $result->fetch_assoc();
}
function getId($user_id){
    $sql = "SELECT id FROM users WHERE email = '$user_id'";
    return connection()->query($sql)->fetch_assoc();
}

