<?php
session_start();

require_once "../helpers/functions.php";
//defining all variables and set to empty values
$fname = $mname = $lname = $address = $birth_date = $gender = $phone = $email = $password = $password2 = "";

if (isset($_POST['submit'])) {
    if (is_request_method_post()) {

        $fname = validate_inputs($_POST['fname']);

        $mname = validate_inputs($_POST['mname']);

        $lname = validate_inputs($_POST['lname']);

        $birth_date = validate_inputs($_POST['birth']);

        $phone = validate_inputs($_POST['phone']);

        $email = validate_inputs($_POST['email']);

        $password = validate_inputs($_POST['password1']);

        $relationship = validate_inputs($_POST['relationship']);

        $password2 = validate_inputs($_POST['password2']);

        $password_hash = hash_password($password);

        $student_id = $_SESSION["student_id"];

        //VALIDATION.

        required_field($fname, "../parent.php?fnamecheck");

        required_field($mname, "../parent.php?mnamecheck");

        required_field($lname, "../parent.php?lnamecheck");

        required_field($phone, "../parent.php?phonecheck");

        required_field($email, "../parent.php?emailcheck");

        required_field($relationship, "../parent.php?relationcheck");

        if (parent_exist($student_id)) {
            redirect_to("../parent.php?parentPresent");
        } else {

            if (verify_password($password, $password2)) {

                register_parent($fname, $mname, $lname, $phone, $email, $birth_date, $relationship,  $password_hash, $student_id);
                redirect_to('../login.php?success');

            } else {
                redirect_to("../parent.php?passmatch");
            }
        }
    }else{
        redirect_to("../parent.php?error");
    }
}