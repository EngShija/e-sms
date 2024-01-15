<?php
require_once __DIR__ . "/../inc/database.php";

function is_user_present(string $email, int $phone_number)
{
    $sql = "SELECT * FROM users WHERE email = '$email' OR phone = $phone_number";
    $result = database()->query($sql);
    return $result->num_rows > 0;
}

function redirect_to(string $url)
{
    header("Location: $url");
    exit;
}

function register($fname, $mname, $lname, $address, $birth_date, $gender, $RegNo, $phone, $email, $password)
{
    $sql = "INSERT INTO users(fname, mname, lname, physicalAddress, birth_date, gender, RegNo, phone, email,password) 

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

function login_out(string $url)
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

function get_usrer_info_by_email(string $email)
{
    $result = database()->query("SELECT * FROM users WHERE email = '$email'");
    return $result->fetch_assoc();
}

function get_user_info_by_id(int $user_id)
{
    $result = database()->query("SELECT * FROM users WHERE id = '$user_id'");
    return $result->fetch_assoc();
}

function get_admin_info_by_email(string $email)
{
    $result = database()->query("SELECT * FROM mainadmin WHERE email = '$email'");
    return $result->fetch_assoc();
}

function users()
{
    return database()->query("SELECT * FROM users")
        ->fetch_all(MYSQLI_ASSOC);
}

function login_student(string $email, string $password)
{
    $user = get_usrer_info_by_email($email);

    if ($user) {
        if (verify_hashed_password($password, $user['password'])) {
            $_SESSION['userId'] = $user['id'];
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
    return isset($_SESSION['userId']);
}

function kick_user_to(string $url)
{
    if (!is_logged() && $_SESSION['userId'] == null) {
        redirect_to($url);
    }
}

function is_request_method_post()
{
    return strtoupper($_SERVER["REQUEST_METHOD"] === "POST");
}

function update_user_password(string $new_password, int $user_id)
{
    $sql = ("UPDATE users SET password ='$new_password' WHERE id = $user_id");
    return database()->query($sql);

}

function update_user($user_id, $fname, $mname, $lname, $address, $birth, $gender, $RegNo, $phone, $email, $role)
{
    $query = "UPDATE users SET fname = '$fname', mname = '$mname', lname = '$lname', physicalAddress = '$address', birth_date = '$birth', gender = '$gender', RegNo = '$RegNo', phone = '$phone', email = '$email', `role` = '$role' WHERE id =$user_id";
    return database()->query($query);
}

function self_user_update($user_id, $fname, $mname, $lname, $address, $birth, $gender, $phone, $email, )
{
    $query = "UPDATE users SET fname = '$fname', mname = '$mname', lname = '$lname', physicalAddress = '$address', birth_date = '$birth', gender = '$gender', phone = '$phone', email = '$email' WHERE id =$user_id";
    return database()->query($query);
}

function delete_user(int $delete_id)
{
    $sql = "DELETE from users where id = $delete_id";
    $result = database()->query($sql);
    return $result;
}

function get_email_and_reg_no(string $email, string $RegNo)
{
    $sql = "SELECT email, RegNo FROM users WHERE email = '$email' && RegNo = '$RegNo'";
    $result = database()->query($sql);
    return $result->fetch_assoc();
}

function validate_inputs($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



