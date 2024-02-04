<?php
session_start();
require_once "../helpers/functions.php";
//defining all variables and set to empty values
 $username = $password1 = $password2 = "";


if (isset($_POST['submit'])) {
    if (is_request_method_post()) {

        $username = validate_inputs($_POST['username']);

        $password = validate_inputs($_POST['password1']);

        $confirm_password = validate_inputs($_POST['password2']);

        $password_hash = hash_password($password);


            if (verify_password($password, $confirm_password)) {

                register_admin($username, $password_hash);

                redirect_to('../admin.php?adminAdded');
}
    }
}