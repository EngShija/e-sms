<?php
require_once __DIR__ . "/../inc/database.php";
require_once __DIR__. "/costants.php";

function parent()
{
    return database()->query("SELECT * FROM parent")->fetch_all(MYSQLI_ASSOC);
}
function delete_parent(int $user_id)
{
    $sql = "DELETE from parent where student_id = $user_id";
    $result = database()->query($sql);
    return $result;
}