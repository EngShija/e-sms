<?php
session_start();
require_once __DIR__ . "/../inc/database.php";
require_once __DIR__. "/costants.php";
function is_user_present(string $email, int $phone_number)
{
    $sql = "SELECT * FROM student WHERE email = '$email' OR phone = $phone_number";
    return database()->query($sql)->num_rows > 0;
}
function register($fname, $mname, $lname, $address, $birth_date, $gender, $RegNo, $phone, $email, $password)
{
    $sql = "INSERT INTO student(first_name, middle_name, last_name, physical_address, DOB, gender, reg_num, phone, email,password) 

  VALUES('$fname', '$mname', '$lname', '$address', '$birth_date', '$gender', '$RegNo', $phone, '$email', '$password')";
    return database()->query($sql);
}
function get_user_info_by_email(string $email)
{
    $result = database()->query("SELECT * FROM student WHERE email = '$email'");
    return $result->fetch_assoc();
}
function get_user_info_by_id($user_id)
{
    $result = database()->query("SELECT * FROM student WHERE id = '$user_id'");
    return $result->fetch_assoc();
}
function student()
{
    return database()->query("SELECT * FROM student")->fetch_all(MYSQLI_ASSOC);
}
function login_student(string $email, string $password)
{
    $user = get_user_info_by_email($email);

    if ($user) {
        if (verify_hashed_password($password, $user[PASSWORD])) {
            set_session($user[STORED_ID]);
            redirect_to('../prog.php?logged-in='. $user['email']);
        } else {
            redirect_to('../login.php?wrong-cred');
        }
    }
}

function update_user_password(string $new_password, int $user_id)
{
    $sql = ("UPDATE student SET password ='$new_password' WHERE id = $user_id");
    return database()->query($sql);
}
function update_user($user_id, $fname, $mname, $lname, $address, $birth, $gender, $RegNo, $phone, $email)
{
    $query = "UPDATE student SET first_name = '$fname', middle_name = '$mname', last_name = '$lname', physical_address = '$address', DOB = '$birth', gender = '$gender', reg_num = '$RegNo', phone = $phone, email = '$email'  WHERE id =$user_id";
    return database()->query($query);
}

function self_user_update($user_id, $fname, $mname, $lname, $address, $birth, $gender, $phone, $email,)
{
    $query = "UPDATE student SET first_name = '$fname', middle_name = '$mname', last_name = '$lname', physical_address = '$address', DOB = '$birth', gender = '$gender', phone = '$phone', email = '$email' WHERE id =$user_id";
    return database()->query($query);
}

function delete_student(int $user_id)
{
    $sql = "DELETE from student where id = $user_id";
    $result = database()->query($sql);
    return $result;
}
function get_email_and_reg_no(string $email, string $RegNo)
{
    $sql = "SELECT email, reg_num FROM student WHERE email = '$email' && reg_num = '$RegNo'";
    $result = database()->query($sql);
    return $result->fetch_assoc();
}
function search_user($reg_num, $first_name, $middle_name, $last_name, $email, $role)
{
    $sql = "SELECT * FROM student WHERE reg_num LIKE '%$reg_num%' OR first_name LIKE '%$first_name%' OR middle_name LIKE '%$middle_name%' OR last_name LIKE '%$last_name%' OR email LIKE '%$email%'";
    $result = database()->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function display_student_profile_picture($student_id)
{
    $sql = "SELECT profile_image FROM profile WHERE student_id = $student_id";
    $result = database()->query($sql);
    return $result->fetch_assoc();
}

function profile_exist(int $student_id)
{
    $sql = "SELECT profile_image FROM profile WHERE student_id = $student_id";
    return database()->query($sql)->num_rows > 0;
}

function get_chat_users_by_email($email){

    $result = database()->query("SELECT * FROM users WHERE Email = '$email'");
    return $result->fetch_assoc();
}
function student_count(){
    $sql = "SELECT COUNT(id) AS id_count FROM student";
    $result = database()->query($sql);
    return $result->fetch_assoc();
}
