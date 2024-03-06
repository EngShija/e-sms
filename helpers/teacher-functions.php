<?php
require_once __DIR__ . "/../inc/header.php";
require_once __DIR__ . "/../inc/database.php";
require_once __DIR__ . "/../inc/header.php";
require_once __DIR__. "/costants.php";
function register_teacher($fname, $mname, $gender, $DOB, $phone, $email, $joining_date, $subject_tought, $password)
{
    $sql = "INSERT INTO teacher(first_name, last_name, gender, DOB, phone, email, joining_date, subject_tought, password)

  VALUES('$fname', '$mname', '$gender', '$DOB', $phone, '$email', '$joining_date', '$subject_tought', '$password')";
    return database()->query($sql);
}
function teacher()
{
    return database()->query("SELECT * FROM teacher")->fetch_all(MYSQLI_ASSOC);
}

function get_teacher_info_by_email(string $email)
{
    $result = database()->query("SELECT * FROM teacher WHERE email = '$email'");
    return $result->fetch_assoc();
}

function login_teacher(string $email, string $password)
{
    $user = get_teacher_info_by_email($email);

    if ($user) {
        if (verify_hashed_password($password, $user[PASSWORD])) {
            set_session($user[STORED_ID]);
            redirect_to('../teacher-dashboard.php?logged-in='. $user['email']);
        } else {
            redirect_to('../login.php?wrong-cred');
        }
    } else {
        redirect_to("../login.php?noexist");
    }
}
