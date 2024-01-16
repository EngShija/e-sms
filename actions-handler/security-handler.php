<?php
session_start();
include_once "../inc/database.php";
require_once __DIR__ . "/../helpers/functions.php";
$current_password = $_POST['current_password'];
$user_id = id();
$new_password = $_POST['new_password'];
$hash_new_password = hash_password($new_password);
$confirm_password = $_POST['confirm_password'];
$password_hash = hash_password($new_password);
$data = get_user_info_by_id($user_id);
$old_password = $_POST['current_password'];


if (isset($_POST['change'])) {

    if (get_user_info_by_id($user_id)) {

        if (verify_hashed_password($old_password, $data['password'])) {

            if (verify_password($new_password, $confirm_password)) {
                
                update_user_password($hash_new_password, $user_id);
                log_out("../login.php?changed");
            } else {
                redirect_to("../security.php?nomatch");
            }
        } else {
            redirect_to("../security.php?wrongCurr");
        }
    } else {
        redirect_to('../security.php?failed');
    }
}



















