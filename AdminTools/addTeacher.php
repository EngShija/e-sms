<?php

require_once "../helpers/functions.php";
//defining all variables and set to empty values
$fname = $mname = $lname = $address = $birth_date = $gender = $phone = $email = $password = $password2 = "";

if (isset($_POST['submit'])) {
    if (is_request_method_post()) {

        $fname = validate_inputs($_POST['fname']);

        $lname = validate_inputs($_POST['lname']);

        $address = validate_inputs($_POST['gender']);

        $DOB = validate_inputs($_POST['birth']);

        $phone = validate_inputs($_POST['phone']);

        $email = validate_inputs($_POST['email']);

        $joining_date = validate_inputs($_POST['joining_date']);

        $subject_tought = validate_inputs($_POST['subject']);

        $password = validate_inputs($_POST['password1']);

        $password2 = validate_inputs($_POST['password2']);

        $password_hash = hash_password($password);

        //VALIDATION.

        if (empty($fname)) {
            redirect_to(" ../teacher.php?fnamecheck");
        }

        if (empty($lname)) {
            redirect_to(" ../teacher.php?lnamecheck");
        }

        if (empty($DOB)) {
            redirect_to(" ../teacher.php?addresscheck");
        }

        if (empty($phone)) {
            redirect_to(" ../teacher.php?birthcheck");
        }

        if (empty($email)) {
            redirect_to("../teacher.php?emailcheck");
        }

        if (is_user_present($email, $phone)) {
            redirect_to("../teacher.php?userPresent");
        } else {

            if (verify_password($password, $password2)) {

                register_teacher($fname, $lname, $gender, $DOB, $phone, $email, $joining_date, $subject_tought, $password_hash);
                redirect_to('../teacher.php?teacherRegistered');

            } else {
                redirect_to("../teacher.php?passmatch");
            }
        }
    }else{
        echo "Error occured";
    }
}