<?php
require_once __DIR__ . "/../helpers/functions.php";
$profile_pic = $_SESSION["profile_pic"];
$student_id = id();
if (!is_request_method_post()) {
    exit("POST request method required");
}
if (empty($_FILES)) {
    exit("A file should not be empty!");
}
is_upload_err_ok("../profile_picture.php?noimage", "../profile_picture.php?partialupload", "../profile_picture.php?unknownerr");

if (!is_file_image()) {
    redirect_to("../profile_picture.php?notimage");
}
if (max_file_size() > MAX_FILE_SIZE) {
    redirect_to("../profile_picture.php?toolarge");
}
if (!profile_exist($student_id)) {
        upload_file();
        upload_profile_pic($student_id, 0, 0, 0, $profile_pic);
        redirect_to("../profile.php?dpuploaded");
        exit;
} else {
    redirect_to("../profile.php?dpexist");
    exit;
}
