<?php
session_start();
$user_id = $_SESSION['userId'];
include_once "../inc/database.php";
require_once __DIR__ . "/../helpers/functions.php";
$current_password = $_POST['current_password'];

$new_password = $_POST['new_password'];
$hash_new_password = hash_password($new_password);
$confirm_password = $_POST['confirm_password'];
$password_hash = hash_password($new_password);
$user_id = $_SESSION['userId'];
$data = get_user_info_by_id($user_id);
$old_password = $_POST['current_password'];


if (isset($_POST['change'])) {
    if (get_user_info_by_id($user_id)) {
        if (verify_hashed_password($old_password, $data['password'])) {
            if (verify_password($new_password, $confirm_password)) {
                update_user_password($hash_new_password, $user_id);
                redirect_to("../login.php?changed");
            } else {
                redirect_to("../security.php?nomatch");
            }
        } else {
            redirect_to("../security.php?wrongCurr");
        }
    } else {
        redirect_to('location: ../security.php?failed');
    }
}



















