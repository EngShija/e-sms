<?php

require_once __DIR__ . "/../inc/database.php";

define("CURRENT_USER_ID", "user_id");
define("STORED_ID", "id");
define("PASSWORD", "password");

function is_user_present(string $email, int $phone_number)
{
    $sql = "SELECT * FROM student WHERE email = '$email' OR phone = $phone_number";
    return database()->query($sql)->num_rows > 0;

}

function redirect_to(string $url)
{
    header("Location: $url");
    exit;
}

function register($fname, $mname, $lname, $address, $birth_date, $gender, $RegNo, $phone, $email, $password){

    $sql = "INSERT INTO student(first_name, middle_name, last_name, physical_address, DOB, gender, reg_num, phone, email,password) 

  VALUES('$fname', '$mname', '$lname', '$address', '$birth_date', '$gender', '$RegNo', $phone, '$email', '$password')";
    return database()->query($sql);
}

function genereate_messsage(string $message, string $query_string, string $class)
{
    if (isset($_GET[$query_string])) {
        ?>
        <small class="<?= $class ?>">
            <?= $message ?><br>
        </small>
        <?php
    }
}

function verify_password(string $pass_one, string $pass_two)
{
    return $pass_one === $pass_two;
}

function log_out(string $url)
{
    session_start();
    session_regenerate_id(true);
    session_unset();
    session_destroy();
    redirect_to($url);
}

function hash_password(string $password)
{
    return password_hash($password, PASSWORD_DEFAULT);
}

function verify_hashed_password(string $entered_password, string $stored_password)
{
    return password_verify($entered_password, $stored_password);
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
            redirect_to('../prog.php');
        } else {
            redirect_to('../login.php?wrong-cred');
        }
    } else {
        redirect_to("../login.php?noexist");
    }
}


function is_logged()
{
    return isset($_SESSION[CURRENT_USER_ID]);
}

function kick_user_to(string $url)
{
    if (!is_logged() && $_SESSION[CURRENT_USER_ID] == null) {
        redirect_to($url);
    }
}

function is_request_method_post()
{
    return strtoupper($_SERVER["REQUEST_METHOD"] === "POST");
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

function self_user_update($user_id, $fname, $mname, $lname, $address, $birth, $gender, $phone, $email, )
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

function delete_parent(int $user_id)
{
    $sql = "DELETE from parent where student_id = $user_id";
    $result = database()->query($sql);
    return $result;
}

function get_email_and_reg_no(string $email, string $RegNo)
{
    $sql = "SELECT email, reg_num FROM student WHERE email = '$email' && reg_num = '$RegNo'";
    $result = database()->query($sql);
    return $result->fetch_assoc();
}

function validate_inputs($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function set_session(int $user_id)
{
    $_SESSION[CURRENT_USER_ID] = $user_id;
}


function id()
{
    return isset($_SESSION[CURRENT_USER_ID]) ? $_SESSION[CURRENT_USER_ID] : null;

}
function search_user($reg_num, $first_name, $middle_name, $last_name, $email, $role){
    $sql = "SELECT * FROM student WHERE reg_num LIKE '%$reg_num%' OR first_name LIKE '%$first_name%' OR middle_name LIKE '%$middle_name%' OR last_name LIKE '%$last_name%' OR email LIKE '%$email%'";
    $result = database()->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function register_parent($fname, $mname, $lname, $phone, $email, $DOB, $relationship,$password, $student_id,)
{
    $sql = "INSERT INTO parent(first_name, middle_name, last_name, phone, email, DOB, relationship, password, student_id)

  VALUES('$fname', '$mname', '$lname', $phone, '$email', '$DOB', '$relationship', '$password', $student_id )";
    return database()->query($sql);
}
function parent_exist(int $student_id)
{
    $sql = "SELECT * FROM parent WHERE student_id = $student_id";
    return database()->query($sql)->num_rows > 0;
}

function get_parent_info_by_id($user_id)
{
    $result = database()->query("SELECT * FROM parent WHERE student_id = '$user_id'");
    return $result->fetch_assoc();
}

function update_parent($user_id, $fname, $mname, $lname, $birth,  $phone, $email)
{
    $query = "UPDATE parent SET first_name = '$fname', middle_name = '$mname', last_name = '$lname', DOB = '$birth', phone = $phone, email = '$email'  WHERE student_id =$user_id";
    return database()->query($query);
}

function register_admin($username, $password){

    $sql = "INSERT INTO admin(admin_username, password)

  VALUES('$username', '$password')";
    return database()->query($sql);
}


function get_admin_info_by_username(string $username)
{
    $result = database()->query("SELECT * FROM admin WHERE admin_username = '$username'");
    return $result->fetch_assoc();
}

function login_admin(string $username, string $password)
{
    $admin = get_admin_info_by_username($username);

    if ($admin) {
        if (verify_hashed_password($password, $admin[PASSWORD])) {
            set_session($admin[STORED_ID]);
            redirect_to('../admin.php');
        } else {
            redirect_to('../admin_login.php?wrong-cred');
        }
    } else {
        redirect_to("../admin_login.php?noexist");
    }
}
function register_teacher($fname, $mname, $gender, $DOB, $phone, $email, $joining_date, $subject_tought, $password)
{
    $sql = "INSERT INTO teacher(first_name, last_name, gender, DOB, phone, email, joining_date, subject_tought, password)

  VALUES('$fname', '$mname', '$gender', '$DOB', $phone, '$email', '$joining_date', '$subject_tought', '$password')";
    return database()->query($sql);
}




