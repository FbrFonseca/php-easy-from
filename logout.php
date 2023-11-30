<?php
session_start();

if (isset($_SESSION['userID'])) {

    session_unset();
    session_destroy();

    header('Location: login.php'); 
    exit();
}
?>
