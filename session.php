<?php

session_start();

if (isset($_SESSION['user_login'])) {
    header("Location: userhome.php");
}

/*if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION);
    header("Location: login.php");
}*/

?>