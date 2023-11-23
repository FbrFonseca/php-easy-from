<!-- user area, needs: form maker, forms filled -->
<?php
include "connect.php";

session_start();

// Check if the user is logged in, if not then redirect to login page
if (!isset($_SESSION['userID'])) {
    header('Location: login.php');
    exit;
}

?>


<h3>AREA DO USUARIO</h3>