<?php
session_start();
session_destroy();
session_abort();
session_unset();
header('Location: ../login.php');