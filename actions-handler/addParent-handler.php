<?php
session_start();
include_once "../inc/header.php";
include_once "../inc/database.php";
require_once __DIR__ . "/../helpers/functions.php";
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

        $student_id = id();


        //VALIDATION.

        required_field($fname, " ../addParent.php?fnamecheck");

        required_field($mname, " ../addParent.php?mnamecheck");

        required_field($lname, " ../addParent.php?lnamecheck");

        required_field($phone, " ../addParent.php?phonecheck");

        required_field($email, " ../addParent.php?emailcheck");

        required_field($relationship, " ../addParent.php?relationcheck");

        required_field($fname, " ../addParent.php?fnamecheck");


        if (parent_exist($student_id)) {
            redirect_to("../addParent.php?parentPresent");
        } else {

            if (verify_password($password, $password2)) {

                register_parent($fname, $mname, $lname, $phone, $email, $birth_date, $relationship,  $password_hash, $student_id);
                redirect_to('../addParent.php?parentAdded');

            } else {
                redirect_to("../addParent.php?passmatch");
            }
        }
    }else{
        echo "Error occured";
    }
}