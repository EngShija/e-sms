<?php
session_start();
include_once "../inc/database.php";
require_once __DIR__ . "/../helpers/functions.php";
$new_password = $_POST['new_password'];
$password_hash = hash_password($new_password);
$confirm_password = $_POST['confirm_password'];
$email = $_POST['email'];
$RegNo = $_POST['RegNo'];
$data = get_usrer_info_by_email($email);
$_SESSION['userId'] = $data['id'];

if(isset($_POST['change'])){
    if(verify_password($new_password, $confirm_password)){
        if(get_email_and_reg_no($email, $RegNo)){
            update_user_password($password_hash, $_SESSION['userId']);
            redirect_to("../login.php?changed");
        }else{
            redirect_to("../forgot_password.php?noexist");
        }

    }else{
        redirect_to("../forgot_password.php?nomatch");
    }
}

// if(isset($_POST['change'])){
// if(get_usrer_info_by_email($stored_email)) {
//     if (verify_password($new_password, $confirm_password)) {
//         if (update_user_forgotten_password($_SESSION['userId'], $password_hash)) {
//             redirect_to("../login.php?changed");
//         } else {
//             redirect_to("../forgot_password.php?fail");
//         }

//     } else {
//         redirect_to("../forgot_password.php?nomatch");
//     }

// } else {
//     redirect_to("../forgot_password.php?noexist");
// }
// }
