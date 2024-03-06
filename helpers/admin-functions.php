
<?php
require_once __DIR__ . "/../inc/database.php";
require_once __DIR__. "/costants.php";
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