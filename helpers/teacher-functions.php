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
