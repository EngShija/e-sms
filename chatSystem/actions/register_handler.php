<?php
require_once "../Database/connection.php";
require_once "../helpers/functions.php";
if(connection()){
    $fullName = $_POST['fname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $profile = $_FILES['image']['name'] ?: 'avatar.jpg';

    if($password1 === $password2){
register_user($fullName, $email, $phone, $password1, $profile);
if ($_FILES["image"]["error"] !== UPLOAD_ERR_OK) {
    switch ($_FILES["image"]["error"]) {
        case UPLOAD_ERR_PARTIAL:
            redirectTo('../register.php');
            break;

        case UPLOAD_ERR_NO_FILE:
            redirectTo('../login.php');
            break;

        case UPLOAD_ERR_EXTENSION:
            redirectTo('../register.php');
            break;

        case UPLOAD_ERR_INI_SIZE:
            redirectTo('../register.php');
            break;

        default:
        redirectTo('../register.php');
            break;
    }
}

$finfo = new finfo(FILEINFO_MIME_TYPE);

$mime_type = $finfo->file($_FILES["image"]["tmp_name"]);

$mime_type = ['image/png', 'image/jpg', 'image/jpeg', 'image/gif'];

if (!in_array($_FILES["image"]["type"], $mime_type)) {
    $_SESSION['notImage'] = "A file is not an image";
    redirectTo('../register.php');
}
if ($_FILES["image"]["size"] > 1048576) {
    $_SESSION['maxsize'] = "File too large (Max size is 2MB)";
    redirectTo('../register.php');
}

$pathinfo = pathinfo($_FILES["image"]["name"]);

$base = $pathinfo["filename"];

$base = preg_replace("/[^\w-]/", "_", $base);

$filename = $base . "." . $pathinfo["extension"];

$destination = __DIR__ . "/../uploads/" . $filename;

$i = 1;

while(file_exists($destination)){
    $filename = $base . "($i)." . $pathinfo["extension"];
    $destination = __DIR__ . "/../uploads/" . $filename;

    $i++;
}

if (!move_uploaded_file($_FILES["image"]["tmp_name"], $destination)) {
    $_SESSION['maxsize'] = "File not uploaded successfully";
    redirectTo('../register.php');
}
redirectTo('../login.php?registered');

    }
}
