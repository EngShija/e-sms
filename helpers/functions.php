<?php
require_once __DIR__ . "/../inc/database.php";
require_once __DIR__ . "/student-functions.php";
require_once __DIR__ . "/parent-functions.php";
require_once __DIR__ . "/teacher-functions.php";
require_once __DIR__ . "/admin-functions.php";
function redirect_to(string $url)
{
    header("Location: $url");
    exit;
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

    if (isset($_COOKIE['userid'])) {
        $passwords = $_COOKIE['userid'];
        $user_email = $_COOKIE['useremail'];
        setcookie("userid", $passwords, time() - (60 * 60 * 24 * 7));
        setcookie("useremail", $user_email, time() - (60 * 60 * 24 * 7));
        $queryz = "UPDATE Users Set Online='Offline' WHERE Password='$passwords' ";
        database()->query($queryz) or die('Errorr, query failed');

        header("Location: index.php");
    } else {
        header("Location: index.php");
    }
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
function required_field($field, $redirect_url)
{
    if (empty($field)) {
        redirect_to($redirect_url);
    }
}

function sweetAlert($get_string, $alert_head, $message, $class)
{
    if (isset($_GET[$get_string])) {
    ?>
        <script>
            swal('<?= $alert_head ?>', '<?= $message ?>', '<?= $class ?>');
        </script>
    <?php
    }
}
function sweetAlertSession($session_string, $alert_head, $message, $class)
{
    if (isset($_SESSION[$session_string])) { ?>
        <script>
            swal('<?= $alert_head ?>', '<?= $message ?>', '<?= $class ?>');
        </script>
<?php
    }
    unset($_SESSION[$session_string]);
}

function addClass($classname)
{
    $querry = "INSERT INTO class(class_name) VALUE('$classname')";
    $result = database()->query($querry);
    return $result;
}

function addSubject($classname)
{
    $querry = "INSERT INTO subject(subject_name) VALUE('$classname')";
    $result = database()->query($querry);
    return $result;
}

function upload_profile_pic(int $student_id, int $teacher_id, int $parent_id, int $admin_id, string $profile_pic)
{
    $query = "INSERT INTO profile(student_id, teacher_id, parent_id, admin_id, profile_image)
               VALUES($student_id, $teacher_id, $parent_id, $admin_id, '$profile_pic')";
    return database()->query($query);
}

function update_user_profile($profile_pic, $id,  $user_id){
    $query = "UPDATE profile SET  profile_image = '$profile_pic' WHERE $id = $user_id";
    return database()->query($query);
}

function is_upload_err_ok($nofile_url, $partial_upload_url, $unknown_err_url)
{

    if ($_FILES["image"]["error"] !== UPLOAD_ERR_OK) {

        switch ($_FILES["image"]["error"]) {
            case UPLOAD_ERR_NO_FILE:
                redirect_to($nofile_url);
                break;

            case UPLOAD_ERR_PARTIAL:
                redirect_to($partial_upload_url);

            default:
                redirect_to($unknown_err_url);
        }
    }
}
function is_file_image()
{
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $mime_type = $finfo->file($_FILES["image"]["tmp_name"]);
    $mime_type = ['image/png', 'image/jpg', 'image/jpeg', 'image/gif'];
    return in_array($_FILES['image']['type'], $mime_type);
}

function max_file_size()
{
    return  $_FILES["image"]["size"];
}

function upload_file()
{
    $pathinfo = pathinfo($_FILES["image"]["name"]);
    $base = $pathinfo["filename"];
    $base = preg_replace("/[^\w-]/", "_", $base);
    $filename = $base . "." . $pathinfo["extension"];
    $destination = __DIR__ . "/../uploads/" . $filename;
    $i = 1;
    while (file_exists($destination)) {
        $filename = $base . "($i)." . $pathinfo["extension"];
        $destination = __DIR__ . "/../uploads/" . $filename;
        $i++;
    }
    $_SESSION["profile_pic"] = $filename; 
    if (!move_uploaded_file($_FILES["image"]["tmp_name"], $destination)) {
        redirect_to("../profile_picture.php?failed");
    }
    return;
}

function add_results($student_id, $subject_id, $subject_name, $marks, $grade, $description)
{
    $query = "INSERT INTO result(student_id, subject_id, subject_name, marks, grade, description) VALUES($student_id, $subject_id, '$subject_name', $marks, '$grade', '$description')";
    return database()->query($query);
}
function get_subject_imfo()
{
    $query = "SELECT * FROM subject";
    $result = database()->query($query);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function get_subject_imfo_single_row()
{
    $query = "SELECT * FROM subject";
    $result = database()->query($query);
    return $result->fetch_assoc();
}

function get_subject_info_by_id($subject_id)
{
    $query = "SELECT * FROM subject WHERE id = $subject_id";
    $result = database()->query($query);
    return $result->fetch_assoc();
}
function get_results($student_id)
{
    $query = "SELECT * FROM result WHERE student_id = $student_id";
    $result = database()->query($query);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function class_count()
{
    $sql = "SELECT COUNT(id) AS id_count FROM class";
    $result = database()->query($sql);
    return $result->fetch_assoc();
}

function counter($table)
{
    $sql = "SELECT COUNT(id) AS id_count FROM $table";
    $result = database()->query($sql);
    return $result->fetch_assoc();
}